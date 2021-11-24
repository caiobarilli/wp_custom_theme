<?php
/**
 *
 * The template part for displaying page content
 *
 * @package wp_custom_theme
 *
 */
?>

<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <h2 class="fw-bolder mb-5">
            <?php _e(the_title(), 'custom_theme'); ?>
        </h2>
        <?php _e(the_content(), 'custom_theme'); ?>
    </div>
</section>