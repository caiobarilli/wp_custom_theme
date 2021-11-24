<?php
/**
 *
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_custom_theme
 *
 */

?>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-5">
        <p class="m-0 text-center text-white">
            <?php
                _e('Copyright &copy; ', 'custom_theme');
                bloginfo('name');
                echo " ";
                the_time('Y');
            ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>