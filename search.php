<?php
/**
 *
 * The template for displaying search results pages
 *
 * @package wp_custom_theme
 *
 */

get_header();

?>

<!-- Page Header-->
<header class="masthead">
    <div class="container position-relative ">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3>
                        <?php _e('Busca por palavra-chave', 'custom_theme'); ?>
                    </h3>
                    <span class="subheading">
                        <?php echo sprintf(__('%s', 'custom_theme'), $s); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php set_query_var('search_query', $s); ?>
            <?php get_template_part('loop', 'search'); ?>
        </div>
    </div>
</div>

<?php get_footer();
