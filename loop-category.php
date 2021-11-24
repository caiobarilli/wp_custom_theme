<?php
/**
 *
 * The template part displaying category for blog posts
 *
 * @package wp_custom_theme
 *
 */

$category_id = get_query_var('category_id');
$args = array('category__in' => $category_id, 'ignore_sticky_posts' => 1, 'showposts' => -1);
$wp_query = new WP_Query($args);

if ($wp_query->have_posts() && $category_id) : while ($wp_query->have_posts()) : $wp_query->the_post();
    get_template_part('template-parts/content', 'archive');
    endwhile; wp_reset_query(); wp_reset_postdata();
endif;
