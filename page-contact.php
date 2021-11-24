<?php
/**
 * The template part for displaying content
 *
 * @package wp_custom_theme
 *
 */

get_header();

$title = get_theme_mod('set_title_contact');
$subtitle = get_theme_mod('set_subtitle_contact');
$form = get_theme_mod('set_shortcode_contact');

?>

<!-- Contact section-->
<section class="bg-light py-5">
	<div class="container px-5 my-5 px-5">
		<div class="text-center mb-5">
			<h2 class="fw-bolder">
				<?php
                if ($title) {
                    _e($title, 'custom_theme');
                } ?>
			</h2>
			<p class="lead mb-0">
				<?php
                if ($subtitle) {
                    _e($subtitle, 'custom_theme');
                } ?>
			</p>
		</div>
		<div class="row gx-5 justify-content-center">
			<div class="col-lg-6">
				<?php if (!$form): ?>
				<form id="contactForm">
					<!-- Name input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="name" type="text" placeholder="Enter your name..."
							data-sb-validations="required" />
						<label for="name">Full name</label>
						<div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
					</div>
					<!-- Email address input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="email" type="email" placeholder="name@example.com"
							data-sb-validations="required,email" />
						<label for="email">Email address</label>
						<div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
						<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
					</div>
					<!-- Phone number input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
							data-sb-validations="required" />
						<label for="phone">Phone number</label>
						<div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
						</div>
					</div>
					<!-- Message input-->
					<div class="form-floating mb-3">
						<textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
							style="height: 10rem" data-sb-validations="required"></textarea>
						<label for="message">Message</label>
						<div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
					</div>

					<!-- Submit Button-->
					<div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton"
							type="submit">Submit</button></div>
				</form>
				<?php else: echo do_shortcode($form); endif ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
