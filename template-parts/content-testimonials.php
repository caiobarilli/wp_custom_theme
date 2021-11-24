<?php
/**
 *
 * The template part for displaying testimonials content
 *
 * @package wp_custom_theme
 *
 */

$title_testimonial = get_theme_mod('set_title_testimonial');
$subtitle_testimonial = get_theme_mod('set_subtitle_testimonial');

$show = get_theme_mod('set_testimonial_visibility');

if ($show) :

?>

<!-- Testimonials section-->
<section class="py-5 border-bottom">
	<div class="container px-5 my-5 px-5">
		<div class="text-center mb-5">
			<h2 class="fw-bolder">
				<?php
                if ($title_testimonial) {
                    _e($title_testimonial, 'custom_theme');
                } ?>
			</h2>
			<p class="lead mb-0">
				<?php
                if ($subtitle_testimonial) {
                    _e($subtitle_testimonial, 'custom_theme');
                } ?>
			</p>
		</div>
		<div class="row gx-5 justify-content-center">
			<div class="col-lg-6">
				<?php

                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1, 'order' => 'ASC' ); // CPT: testimonials
                $query = new WP_Query($args);

                ?>

				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

				<div class="card mb-4">
					<div class="card-body p-4">
						<div class="d-flex">
							<div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
							</div>
							<div class="ms-4">
								<p class="mb-1">
									<?php _e(the_field('comment'), 'custom_theme'); ?>
								</p>
								<div class="small text-muted">
									<?php _e(the_field('name'), 'custom_theme'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); endif; ?>

			</div>
		</div>
	</div>
</section>

<?php endif;
