<?php
/**
 *
 * The template part displaying blog posts
 *
 * @package wp_custom_theme
 *
 */
?>

<?php

$sticky = get_option('sticky_posts');
$args = array( 'post__in' => $sticky, 'showposts' => 1, 'ignore_sticky_posts' => 1 );
$query = new WP_Query($args);

?>

<!-- Featured blog post-->
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<div class="card mb-4">
    <a href="<?php the_permalink(); ?>">
        <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." />
    </a>
    <div class="card-body">
        <div class="small text-muted">
            <?php get_the_date('l j, Y'); ?>
        </div>
        <h2 class="card-title">
            <?php the_title(); ?>
        </h2>
        <p class="card-text">
            <?php post_excerpt(45); ?>
        </p>
        <a class="btn btn-primary" href="<?php the_permalink(); ?>">
            <?php _e('Read more →', 'custom_theme'); ?>
        </a>
    </div>
</div>
<?php endwhile; wp_reset_postdata(); endif;
