<?php
/**
 *
 * App functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_custom_theme
 *
 */

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

require_once get_stylesheet_directory() . '/inc/plugins.php';
require_once get_stylesheet_directory() . '/inc/customizer.php';
require_once get_stylesheet_directory() . '/inc/custom-pagination.php';
require_once get_stylesheet_directory() . '/inc/custom-post-type.php';
require_once get_stylesheet_directory() . '/inc/custom-fields.php';
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

define('THEME_VERSION', wp_get_theme()->get('Version'));

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

// Theme Support
if (function_exists('add_theme_support')) {
    add_theme_support('menus'); // Add Menu Support
    add_theme_support('custom-logo'); // Add Custom Logo Support

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('post-thumbnail', 700, 350, true);
    add_image_size('post-single', 900, 400, true);

    // Localisation Support
    load_theme_textdomain('custom_theme', get_template_directory() . '/languages');
}

// Sidebar Widget
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name'          => __('Side Widget', 'custom_theme'),
        'description'   => __('widget area', 'custom_theme'),
        'id'            => 'side-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<div>',
        'after_title'   => '</div>'
    ));
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// Navigation: Main Menu
function main_nav()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ),
    );
}

// Register Navigation
function custom_theme_menu()
{
    register_nav_menus(array(
        'header-menu'  => __('Menu Principal', 'custom_theme'), // Main Navigation
    ));
}

// Load Scripts
function header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');

        global $wp_query;

        wp_register_script('custom_theme_scripts', get_template_directory_uri() . '/dist/app.js', array(), THEME_VERSION); // Custom scripts
        wp_localize_script('custom_theme_scripts', 'loadmore_params', array(
            'ajaxurl'       => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
            'posts'         => json_encode($wp_query->query_vars),
            'current_page'  => get_query_var('paged') ? get_query_var('paged') : 1,
            'max_page'      => $wp_query->max_num_pages,
        ));
        wp_enqueue_script('custom_theme_scripts'); // Enqueue it!
    }
}

// Load Styles
function public_assets()
{
    wp_register_style('custom_theme_styles', get_template_directory_uri() . '/dist/app.css', array(), THEME_VERSION);
    wp_enqueue_style('custom_theme_styles'); // Enqueue it!
}

// Custom Excerpt
function post_excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    echo $excerpt;
}

// Load More
function loadmore_ajax_handler()
{
    $args = json_decode(wp_unslash($_POST['query']), true);

    $args['showposts'] = '3';
    $args['paged'] = $_POST['page'] + 1; // load the next page

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
    get_template_part('template-parts/content', 'ajax');
    endwhile;
    endif;

    wp_reset_query();
    wp_reset_postdata();
    wp_die();
}

// Wp Login: change login headertitle
function change_login_headertitle()
{
    return get_option('blogname');
}

// Wp Login: change login headerurl
function change_login_headerurl($value)
{
    return home_url();
}

// Wp Login: change login image
function change_logo_login_head()
{
    echo '<style> .login h1 a { background-image: url(' .  get_template_directory_uri() . '/img/logo.svg' . ');  background-size: contain; background-position: center center; } </style>';
}

// Wp Customizer Remove Sections
function customizer_removes($wp_customize)
{
    $wp_customize->remove_section('static_front_page');
}

// Change the custom logo
function custom_theme_custom_logo()
{

    // The logo
    $custom_logo_id = get_theme_mod('custom_logo');

    // If has logo
    if ($custom_logo_id) {

        // Attr
        $custom_logo_attr = array(
            'class'    => 'custom-logo',
            'itemprop' => 'logo',
        );

        // Image alt
        $image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
        if (empty($image_alt)) {
            $custom_logo_attr['alt'] = get_bloginfo('name', 'display');
        }

        // Get the image
        $html = sprintf(
            '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
            home_url(),
            wp_get_attachment_image($custom_logo_id, 'full', false, $custom_logo_attr)
        );
    }

    // Return
    return $html;
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// add defer attribute to enqueued script
function script_defer_attribute($tag, $handle, $src)
{
    if ($handle === 'custom_theme_scripts') {
        if (false === stripos($tag, 'defer')) {
            $tag = str_replace('<script ', '<script defer ', $tag);
        }
    }

    return $tag;
}

/*------------------------------------*\
    Filters
\*------------------------------------*/

// Add Filters
add_filter('login_headertitle', 'change_login_headertitle'); // Change admin header title
add_filter('login_headerurl', 'change_login_headerurl'); // Change admin logo url
add_filter('get_custom_logo', 'custom_theme_custom_logo'); // Change admin logo
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('script_loader_tag', 'script_defer_attribute', 10, 3); // Add defer to enqueued script

/*------------------------------------*\
    Actions
\*------------------------------------*/

// Add Actions
add_action('init', 'custom_theme_menu'); // Add site menu
add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'public_assets', 99); // Add Theme Stylesheet
add_action('customize_register', 'customizer_removes', 50); // Remove static_front_page from Wp Customizer
add_action('login_head', 'change_logo_login_head'); // Change admin logo
add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // Authenticated users
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // Non-authenticated users
add_action('customize_register', 'custom_theme_customizer'); // Add custom menu in wp customizer
