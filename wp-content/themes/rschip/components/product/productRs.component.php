<?php
$thisProduct = get_field_object('select_product')["value"][0];

if (!empty($thisProduct)) :

    $post = get_post($thisProduct->ID);
    setup_postdata($post);

    $productPrice = $product->get_price_html();
    $attachment_ids = $product->get_gallery_image_ids();
    $productImg = $product->get_image_id();

?>
<section class="product productRs">
        <div class="wrapper">
            <h2 class="page__title-h2_small">More Power</h2>
            <h3 class="page__title-h3">Throttle <span class="page_red">tuning </span>made easy</h3>
            <div class="productFlexContainer">
                <div class="productImg">
                    <picture>
                        <source type="image/png" srcset="assets/images/png/products/imgRsChip1.png" media="(min-width: 992px)">
                        <source type="image/png" srcset="assets/images/png/products/imgRsChip1-sm.png" media="(min-width: 768px)">
                        <img src="assets/images/png/products/imgRsChip1-xs.png" alt="imgRsChip">
                    </picture>
                </div>
                <div class="productText">
                    <h4 class="page__title-h4">Improved acceleration and sportier drive</h4>
                    <ul class="page__ul">
                        <li class="page__li"> <i class="svg-iconMarker svg-iconMarker-box"></i>5 driving modes</li>
                        <li class="page__li"> <i class="svg-iconMarker svg-iconMarker-box"></i>2x CPUs system</li>
                        <li class="page__li"> <i class="svg-iconMarker svg-iconMarker-box"></i>Sporty throttle response</li>
                        <li class="page__li"> <i class="svg-iconMarker svg-iconMarker-box"></i>Easy to install</li>
                    </ul>
                    <div class="productPrice"> 
                        <div class="productsItemActionsAddToCartWoocommerce">
                            <?php do_action('woocommerce_after_shop_loop_item'); ?>
                            <div class="productPrice__cost"><?php echo $productPrice; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
wp_reset_postdata();
endif;?>