<?php
/**
 *
 * The template for displaying category page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_custom_theme
 *
 */

get_header();

$category_id = get_cat_ID(single_cat_title("", false));

?>

<!-- Page Header-->
<header class="masthead">
    <div class="container position-relative ">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3>
                        <?php _e('Category: ', 'custom_theme'); ?>
                        <?php single_cat_title(); ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">

    <?php set_query_var('category_id', $category_id); ?>

    <div class="row flex-row">
        <?php get_template_part('loop', 'category'); ?>
    </div>
</div>


<?php get_footer();
