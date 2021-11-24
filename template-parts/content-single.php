<?php
/**
 *
 * The template part for displaying single content
 *
 * @package wp_custom_theme
 *
 */

?>

<!-- Post content-->
<article>
    <!-- Post header-->
    <header class="my-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">
            <?php the_title(); ?>
        </h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">
            <?php _e('Escrito por', 'custom_theme'); ?>
            <?php the_author_posts_link(); ?>
        </div>
        <!-- Post categories-->
        <?php the_category(', ');?>
    </header>
    <!-- Preview image figure-->
    <figure class="mb-4">
        <?php if (has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"
            title="<?php the_title(); ?>">
            <?php the_post_thumbnail('post-single', array( 'class' => 'card-img-top' )); ?>
        </a>
        <?php else: ?>
        <a href="<?php the_permalink(); ?>">
            <img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." />
        </a>
        <?php endif; ?>
    </figure>
    <!-- Post content-->
    <section class="mb-5">
        <?php the_content(); ?>
    </section>
</article>