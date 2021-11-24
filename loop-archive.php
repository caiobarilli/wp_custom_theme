<?php
/**
 *
 * The template part displaying archive loop for blog author
 *
 * @package wp_custom_theme
 *
 */

$args = array('ignore_sticky_posts' => 1,'showposts' => '3' );
$wp_query = new WP_Query($args);

if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    get_template_part('template-parts/content', 'archive');
    endwhile; wp_reset_query(); wp_reset_postdata();
endif;
