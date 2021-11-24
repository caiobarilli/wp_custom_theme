<?php
/**
 *
 * The template part for displaying search content
 *
 * @package wp_custom_theme
 *
 */
?>

<!-- Post preview-->
<div class="post-preview">
    <a href="<?php the_permalink(); ?>">
        <h2 class="post-title">
            <?php the_title(); ?>
        </h2>
        <h3 class="post-subtitle">
            <?php post_excerpt(25); ?>
        </h3>
    </a>
    <p class="post-meta">
        <?php _e('Escrito por', 'custom_theme'); ?>
        <?php the_author_posts_link(); ?>
    </p>
</div>

<!-- Divider-->
<hr class="my-4" />