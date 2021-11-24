<?php
/**
 *
 * The template part displaying blog posts
 *
 * @package wp_custom_theme
 *
 */

global $wp_query;

?>

<!-- Nested row for non-featured blog posts-->
<div class="row flex-row">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'order' => 'ASC', 'ignore_sticky_posts' => 1, 'paged' =>  $paged);
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        $post_date = get_the_date('l j, Y');
        get_template_part('template-parts/content');
    endwhile;
    endif;
    ?>
</div>