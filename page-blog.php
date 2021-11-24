<?php
/**
 * The template part for displaying blog content
 *
 * @package wp_custom_theme
 *
 */

$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

get_header();

?>

<!-- Page content-->
<div class="container my-4">
    <div class="row">

        <!-- Blog entries-->
        <div class="col-lg-8">
            <?php if ($paged == 1): get_template_part('loop', 'sticky-posts'); endif; ?>
            <?php get_template_part('loop'); ?>

            <!-- Pagination-->
            <?php get_template_part('pagination'); ?>
        </div>

        <!-- Side widgets-->
        <div class="col-lg-4">
            <?php get_template_part('searchform'); ?>

            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">
                    <?php _e('Categories', 'custom_theme'); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-unstyled mb-0">
                                <?php
                                    foreach ($categories as $category) :
                                        $category_link = sprintf(
                                            '<a href="%1$s" alt="%2$s">%3$s</a>',
                                            esc_url(get_category_link($category->term_id)),
                                            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                                            esc_html($category->name)
                                        );
                                        echo '<li>' . sprintf(esc_html__('%s', 'textdomain'), $category_link) . '</li>';
                                    endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">
                    <?php
                        if (function_exists('dynamic_sidebar')) {
                            dynamic_sidebar('side-widget');
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer();
