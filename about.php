<?php
/**
 * Template Name: About
 * The template part for displaying content
 *
 * @package wp_custom_theme
 *
 */

get_header();

$image        = get_field('image');
$title        = get_field('about_title');
$text         = get_field('about_text');
$link         = get_field('link_about');
$callToAction = get_field('about_call_to_action_text');

$title_card_1 = get_field('title_card_1');
$text_card_1  = get_field('text_card_1');
$link_card_1  = get_field('link_card_1');

$title_card_2 = get_field('title_card_3');
$text_card_2  = get_field('text_card_3');
$link_card_2  = get_field('link_card_3');

$title_card_3 = get_field('title_card_3');
$text_card_3  = get_field('text_card_3');
$link_card_3  = get_field('link_card_3');

?>

<!-- Page Content-->
<div class="container px-4 px-lg-5">

    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7">
            <?php if ($image): ?>
            <img class="img-fluid rounded mb-4 mb-lg-0"
                src="<?php echo $image; ?>" alt="" />
            <?php else: ?>
            <img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="" />
            <?php endif; ?>
        </div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">
                <?php _e($title, 'custom_theme'); ?>
            </h1>
            <div class="mb-2">
                <?php _e($text, 'custom_theme'); ?>
            </div>
            <?php if ($link['url']): ?>
            <a class="btn btn-primary"
                href="<?php $link['url']; ?>"><?php _e($link['title'], 'custom_theme'); ?></a>
            <?php else: ?>
            <a class="btn btn-primary" href="#">Call To Action</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <div class="text-white m-0">
                <?php _e($callToAction, 'custom_theme'); ?>
            </div>
        </div>
    </div>

    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">
                        <?php _e($title_card_1, 'custom_theme'); ?>
                    </h2>
                    <p class="card-text">
                        <?php _e($text_card_1, 'custom_theme'); ?>
                    </p>
                </div>
                <div class="card-footer">
                    <?php if ($link_card_1['url']): ?>
                    <a class="btn btn-primary btn-sm"
                        href="<?php $link_card_1['url']; ?>"><?php _e($link_card_1['title'], 'custom_theme'); ?></a>
                    <?php else: ?>
                    <a class="btn btn-primary" href="#">Call To Action</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">
                        <?php _e($title_card_2, 'custom_theme'); ?>
                    </h2>
                    <p class="card-text">
                        <?php _e($text_card_2, 'custom_theme'); ?>
                    </p>
                </div>
                <div class="card-footer">
                    <?php if ($link_card_2['url']): ?>
                    <a class="btn btn-primary btn-sm"
                        href="<?php $link_card_2['url']; ?>"><?php _e($link_card_2['title'], 'custom_theme'); ?></a>
                    <?php else: ?>
                    <a class="btn btn-primary" href="#">Call To Action</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">
                        <?php _e($title_card_2, 'custom_theme'); ?>
                    </h2>
                    <p class="card-text">
                        <?php _e($text_card_2, 'custom_theme'); ?>
                    </p>
                </div>
                <div class="card-footer">
                    <?php if ($link_card_3['url']): ?>
                    <a class="btn btn-primary btn-sm"
                        href="<?php $link_card_3['url']; ?>"><?php _e($link_card_3['title'], 'custom_theme'); ?></a>
                    <?php else: ?>
                    <a class="btn btn-primary" href="#">Call To Action</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
