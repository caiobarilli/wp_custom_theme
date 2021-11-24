<?php
/**
 *
 * The template part for navigation
 *
 * @package wp_custom_theme
 *
 */
?>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <div class="navbar-brand">
            <!-- Custom Logo -->
            <?php
                if (has_custom_logo() && function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . home_url() . '">' . get_option('blogname') . '</a>';
                }
            ?>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php main_nav(array('theme_location'  => 'header-menu')); ?>

    </div>
</nav>