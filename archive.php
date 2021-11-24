<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_custom_theme
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
                        <?php _e('Posts from author: ', 'custom_theme'); ?>
                        <?php the_author(); ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row flex-row">
        <?php get_template_part('loop', 'archive'); ?>
    </div>
</div>

<?php get_footer();
