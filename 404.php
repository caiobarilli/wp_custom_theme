<?php
/**
 *
 * The template for displaying 404 pages (not found)
 *
 * @package wp_custom_theme
 *
 */

get_header();

?>

<!-- title -->
<h1>
    <?php _e('404', 'custom_theme'); ?>
</h1>

<!-- btn -->
<a href="<?php echo home_url(); ?>">
    <?php _e('Voltar', 'custom_theme'); ?>
</a>

<?php get_footer();
