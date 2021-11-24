<?php
/**
 *
 * The template for displaying search results pages
 *
 * @package wp_custom_theme
 *
 */

?>

<!-- Search widget-->
<div class="card mb-4">
    <div class="card-header">Search</div>
    <div class="card-body">
        <form method="get" action="<?php echo home_url(); ?>">
            <div class="input-group">
                <input class="form-control" type="text" type="search" name="s"
                    placeholder="<?php _e('Enter search term...', 'custom_theme'); ?>"
                    aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
            </div>
        </form>
    </div>
</div>