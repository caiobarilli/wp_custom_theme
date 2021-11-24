<?php
/**
 *
 * The template part displaying search results content
 *
 * @package wp_custom_theme
 *
 */

global $wp_query;

$s = get_query_var('search_query');
$args = array('s' => $s, 'post_type' => 'post', 'ignore_sticky_posts' => 1, 'showposts' => -1, );
$wp_query = new WP_Query($args);

if ($wp_query->have_posts()) :
    while ($wp_query->have_posts()) : $wp_query->the_post();
    get_template_part('template-parts/content', 'search');
    endwhile; wp_reset_query(); wp_reset_postdata();
endif;
