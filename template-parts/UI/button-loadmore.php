<?php
/**
 *
 * The template part for displaying button for loadmore content
 *
 * @package wp_custom_theme
 *
 */
?>

<?php if ($wp_query->max_num_pages > 1) : ?>
<form id="loadmore" class=" mt-5 d-flex justify-content-center">
    <input type="button"
        total="<?php echo $wp_query->max_num_pages ?>"
        class="btn btn-outline-dark btn-sm btn-loadmore" value="Carregar Mais" />
</form>
<?php endif;
