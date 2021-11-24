<?php
/**
 *
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_custom_theme
 *
 */

get_header();

?>

<!-- Page content-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (have_posts()): while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'single');
            endwhile; endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer();
