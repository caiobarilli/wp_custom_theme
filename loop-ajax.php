<?php
/**
 *
 * The template part for displaying content
 *
 * @package wp_custom_theme
 *
 */

global $wp_query;

?>

<!-- loop ajax  -->
<section class=" py-5 border-bottom" id="loop-posts">
    <div class="container ">

        <div class="row flex-row">
            <?php
                $args = array('showposts' => '3');
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                    get_template_part('template-parts/content', 'ajax');
                endwhile;
                wp_reset_postdata();
                endif;
            ?>
        </div>

        <?php get_template_part('template-parts/UI/button', 'loadmore'); ?>

    </div>
</section>