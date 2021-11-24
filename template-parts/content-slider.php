<?php

/**
 *
 * The template part for displaying slider content
 *
 * @package wp_custom_theme
 *
 */

?>

<!-- Slider-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="swiper my-swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">
                                <?php _e('Present your business in a whole new way', 'custom_theme'); ?>
                            </h1>
                            <p class="lead text-white-50 mb-4">
                                <?php _e('Quickly design and customize responsive mobile-first
                                sites with Bootstrap, the world’s most popular front-end open source toolkit!', 'custom_theme'); ?>
                            </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">
                                    <?php _e('Get Started', 'custom_theme'); ?>
                                </a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">
                                    <?php _e('Learn More', 'custom_theme'); ?>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</header>