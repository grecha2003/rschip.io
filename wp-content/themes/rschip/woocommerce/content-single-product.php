<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
$productACF = get_fields();
$productPreview = $productACF['products_preview'];

$productPrice = $product->get_price_html();
$attachment_ids = $product->get_gallery_image_ids();
$productImg = $product->get_image_id();
?>
<!--content-ingle-products-->
<section id="product-<?php the_ID(); ?>" class="productSlider">
    <?php if ($productACF["download_btn"]) : ?>
        <a download href="<?php echo $productACF["download_btn"]; ?>" class="page__btn page__btn_notTransparent">DOWLOAD THE GUIDE</a>
    <?php endif; ?>
    <div class="wrapper">
        <h2 class="page__title-h2_small">easy and fast</h2>
        <h3 class="page__title-h3">Throttle response with no delay </h3>
        <div class="productSliderFlexContainer">
            <div class="productSliderGallary">
                <div class="productSliderGallary__Main gallery-top">
                    <div class="swiper-wrapper">
                        <?php if ($attachment_ids && $productImg) :
                            foreach ($attachment_ids as $attachment_id) : ?>
                                <div class="swiper-slide">
                                    <?php echo wp_get_attachment_image($attachment_id, 'full', false); ?>
                                </div>
                            <?php endforeach; ?>

                        <?php else : ?>
                            <div class="swiper-slide"><img src="assets/images/png/products/imgRsChipSliderMain.png" alt="productSliderGallary"></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="productSliderGallary__Thumbnails gallery-thumbs">
                    <div class="swiper-wrapper">
                        <?php if ($attachment_ids && $productImg) :
                            foreach ($attachment_ids as $attachment_id) : ?>
                                <div class="swiper-slide">
                                    <?php echo wp_get_attachment_image($attachment_id, array(60, 60), false); ?>
                                </div>
                            <?php endforeach; ?>

                        <?php else : ?>
                            <div class="swiper-slide">
                                <img src="assets/images/png/products/imgChipSlidermin.png" alt="productSliderGallary"></div>
                        <?php endif; ?>
                    </div>
                    <div class="productSliderGallary__Thumbnails-buttons">
                        <div class="swiper-button-prev js--swiper-button-prev"></div>
                        <div class="swiper-button-next js--swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <div class="productSliderAdvantages">
                <?php echo $productACF['productsItemGain_Html'];?>
                <!-- 
                    TODO: сделать нормально, сейчас это вставка html 
                    <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconSpeedometerGray svg-iconSpeedometerGray-box">
                    </div>
                    <p>Better driving dynamic</p>
                </div>
                <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconWheel svg-iconWheel-box"></div>
                    <p>Backup CPU</p>
                </div>
                <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconChipGray svg-iconChipGray-box"></div>
                    <p>Five driving modes</p>
                </div>
                <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconPinion svg-iconPinion-box"></div>
                    <p>No lag or delay</p>
                </div>
                <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconRudder svg-iconRudder-box"></div>
                    <p>Easy to install</p>
                </div>
                <div class="productSliderAdvantagesItem">
                    <div class="productSliderAdvantagesItemIcon svg-iconHybrEng svg-iconHybrEng-box"></div>
                    <p>ICE, BEV and hybrid engines</p>
                </div> -->
                <div class="productSliderPrice"> 
                    <?php if($productPreview['isCommingSoon']) : ?>
                        <button class="page__btn page__btn_border-gray" disabled> Comming soon</button>
                    <?php else : ?>
                        <div class="productsItemActionsAddToCartWoocommerce">
                            <?php do_action('woocommerce_after_shop_loop_item', array('')); ?>
                        </div> 
                    <?php endif;?>
                    
                </div>
                <div class="productSliderText">*Real world gains may be less or more depending on a large number
                    of contributing factors such as displacement, aspiration and selected tuning mode.</div>
            </div>
        </div>
    </div>
</section>
<!--content-ingle-products-->