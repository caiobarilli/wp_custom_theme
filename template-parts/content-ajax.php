<?php
/**
 *
 * The template part for displaying ajax loop content
 *
 * @package wp_custom_theme
 *
 */

?>

<div class="col-lg-4 mb-3">
    <div class="card h-100">
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"
            title="<?php the_title(); ?>">
            <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'card-img-top' )); ?>
        </a>
        <?php else: ?>
        <a href="<?php the_permalink(); ?>">
            <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
        </a>
        <?php endif; ?>
        <div class="card-body">
            <div class="small text-muted">
                <?php echo $post_date; ?>
            </div>
            <h2 class="card-title h4">
                <?php the_title(); ?>
            </h2>
            <p class="card-text">
                <?php post_excerpt(30); ?>
            </p>
            <a class="btn btn-primary"
                href="<?php the_permalink(); ?>">
                <?php _e('Read more →', 'custom_theme'); ?>
            </a>
        </div>
    </div>
</div>