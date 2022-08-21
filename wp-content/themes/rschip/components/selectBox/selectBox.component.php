<?php
$thisProduct = get_field_object('select_product')["value"][0];

if(!empty($thisProduct)) :
    // echo $thisProduct->ID;
    $post = get_post($thisProduct->ID);
    setup_postdata($post);

    $productId =  $product->id;
    $productSku = $product->sku;
    $productPrice = $product->get_price_html();
    $productDataName =  get_field('data_productname');
?>
<div class="selectBox" data-productname="<?php echo $productDataName; ?>">
    <div class="selectBoxText">Find out how many Horsepowers you can add to your Car</div>
    <div class="selectBoxContainer">
        <?php include(TEMPLATEPATH . '/components/select/select.component.php'); ?>

        <div class="selectBoxAction">
            <div class="selectBoxSearch">
                <div class="svg-iconSearch svg-iconSearch-box"></div>
            </div>
            <div class="selectBoxActionSelected">
                <div class="selectBoxActionPrice"><?php echo $productPrice; ?></div>
                <div class="selectBoxActionSelectedAddToCartWoocommerce">
                    <?php do_action('woocommerce_after_shop_loop_item'); ?>
                </div>
                <!-- <a class="page__btn page__btn_notTransparent" href="cart/cart.html">To cart</a> -->
            </div>
        </div>
    </div>
    <a class="selectBoxLink js-open-modal" href="javascript:void(0)" data-modal="modalCarCantfind">Can’t
        find my Car</a>
</div>
<?php else: ?>
    <div class="selectBox" data-productname="">
    <div class="selectBoxText">Find out how many Horsepowers you can add to your Car</div>
    <div class="selectBoxContainer">
        <?php include(TEMPLATEPATH . '/components/select/select.component.php'); ?>

        <div class="selectBoxAction">
            <div class="selectBoxSearch">
                <div class="svg-iconSearch svg-iconSearch-box"></div>
            </div>
            <div class="selectBoxActionSelected">
                <div class="selectBoxActionPrice"></div>
                <div>
                    
                </div>
                <a class="page__btn page__btn_notTransparent" href="/shop/">To shop</a>
            </div>
        </div>
    </div>
    <a class="selectBoxLink js-open-modal" href="javascript:void(0)" data-modal="modalCarCantfind">Can’t
        find my Car</a>
</div>
<?php
endif;
wp_reset_postdata();
?>