<?php
/**
 * Template Name: Home Page
 **/
?>
<?php
$category_list = get_field('category_list');
?>
<?php get_header(); ?>
<div class="top-section">
    <?php $top_slider = get_field('first_screen_slider'); ?>
    <?php echo do_shortcode($top_slider); ?>
</div>
<div class="categories-section" id="product-categories">
    <div class="cat-icon left js-cat-parallax"></div>
    <div class="cat-icon right js-cat-parallax"></div>
    <div class="cat-icon right-bottom js-cat-parallax"></div>
    <div class="cat-image js-cat-img"></div>
    <div class="container">
        <?php if(!empty($category_list)) { ?>
            <h2 class="h2 main-title">
                <?php echo get_post_meta(get_the_ID(), 'category_title', true); ?>
            </h2>
            <div class="categories-section__wrapper">
                <?php foreach ($category_list as $item) { ?>
                    <a href="<?php echo $item['category_item_link'] ?>" class="categories-section__item">
                        <div class="categories-section__image-wrapper">
                            <img src="<?php echo $item['category_item_image']; ?>" class="categories-section__image" alt="image">
                        </div>
                        <p class="categories-section__title"><?php echo $item['category_item_title']; ?></p>
                    </a>
                <?php } wp_reset_postdata(); ?>
            </div>
        <?php } ?>
    </div>
</div>
<div class="block-video">
    <div class="container">
        <div class="block-video__description">
            <span class="block-video__text"><?php echo get_post_meta(get_the_ID(), 'block_video_title', true); ?></span>
        </div>
    </div>
    <div class="block-video__container">
        <div class="video-icon-left js-parallax-group"></div>
        <div class="video-icon-right js-parallax-group"></div>
        <div class="container">
            <div class="block-video__wrapper">
                <?php $block_video = get_field('block_video_item'); ?>
                <?php echo do_shortcode($block_video); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
<?php get_template_part('loops/content', 'home'); ?>
    <?php /*
    <button type="button" class="btn-custom">
    <span class="btn-stripe"></span>
    <span class="btn-stripe"></span>
    ВЫБРАТЬ ШАШЛЫК
    </button>
    */?>
</div><!-- /.container -->
<?php get_footer(); ?>
