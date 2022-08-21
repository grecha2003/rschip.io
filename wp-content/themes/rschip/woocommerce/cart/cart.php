<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;
do_action('woocommerce_before_cart');

?>
<div class="pageCartTitle">
    <h2 class="page__title-h2 page__title-h2_big">ORDERS <span class="page__title-h2_small page__title-h2_absolute">Shopping</span></h2>
    <h3>Cart </h3>
</div>
<div class="cartTable">
    <form class="cartProducts" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">

        <?php /*do_action('woocommerce_before_cart_table');*/ ?>
        <!-- <div class="cartProducts"> -->
        <div class="cartProductsHeader">
            <div><?php esc_html_e('Product', 'woocommerce'); ?></div>
            <div><?php esc_html_e('Quantity', 'woocommerce'); ?></div>
            <div><?php esc_html_e('Total Price', 'woocommerce'); ?></div>
        </div>

        <?php /*do_action('woocommerce_before_cart_contents'); */?>

        <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :

            $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) :

                $product_permalink = 
                    apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() 
                    ? $_product->get_permalink($cart_item) 
                    : '', $cart_item, $cart_item_key);
        ?>

                <div class="cartProduct <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                    
                    <div class="cartProductThumbnails">
                        <?php $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                            echo $thumbnail; 
                        ?>
                    </div>

                    <div class="cartProductName">
                        <div class="productName" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                            <?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                            
                            do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                            // Meta data.
                            echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                            // Backorder notification.
                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                            }
                            ?>
                        </div>
                        <div class="carName"></div>
                    </div>

                    <div class="cartProductQuantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                        <div class="quantityBox">
                            <button class="bt_minus">
                                <span></span>
                            </button>
                            <!--  <input class="quantity" type="number" min="0" max="10" step="1" value="1" title="Кол-во">-->

                            <?php
                            if ($_product->is_sold_individually()) {
                                $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                            } else {
                                $product_quantity = woocommerce_quantity_input(
                                    array(
                                        'classes' => "quantity quantityInput",
                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                        'input_value'  => $cart_item['quantity'],
                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                        'min_value'    => '0',
                                        'product_name' => $_product->get_name(),
                                    ),
                                    $_product,
                                    false
                                );
                            }

                            echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                            ?>
                            <button class="bt_plus">+</button>
                        </div>
                    </div>

                    <div style="display: none;" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                        <?php
                            echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                        ?>
                    </div>

                    <div class="cartProductPrice" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                        <div>
                            <?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
                        </div>
                    </div>
                    <div class="cartProductRemove">
                    
                        <?php
                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            'woocommerce_cart_item_remove_link',
                            sprintf(
                                '<a href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s"><div class="svg-iconTrash svg-iconTrash-box" ></div></a>',
                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                esc_html__('Remove this item', 'woocommerce'),
                                esc_attr($product_id),
                                esc_attr($_product->get_sku())
                            ),
                            $cart_item_key
                        );
                        ?>
                    </div>
                    <div class="cartProductSelect">
                        <div class="selectBox selectBoxCart" data-productname="<?php echo $_product->sku;?>">
                            <div class="selectBoxContainer">
                                <div class="select Brands">
                                    <div class="select-box"></div>
                                </div>
                                <div class="select Models">
                                    <div class="select-box"> </div>
                                </div>
                                <div class="select Modification">
                                    <div class="select-box"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>



        <?php do_action('woocommerce_cart_contents'); ?>

        <div class="cartProductsFooter">
            <a class="page__btn" href="/shop/">CONTINUE SHOPPING</a>
            <?php if (wc_coupons_enabled()) : ?>
                <div class="cartProductsCode">
                    <!-- <input type="text" placeholder="EVQQ-LIJ1-DASJ-12KF">
                    <p>Apply</p> -->

                    <?php if ( false  ) { /*&& wc_coupons_enabled()*/?>
						<div class="coupon">
							<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" pattern="[a-z]{1}" placeholder="<?php esc_attr_e( 'PROMOCODE', 'woocommerce' ); ?>" /> 
                            <button type="submit" class=" page__link" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">
                                <?php esc_attr_e( 'Apply', 'woocommerce' ); ?>
                            </button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>


                </div>
            <?php endif; ?>

        </div>
        <br>
        <div class="cartProductsFooter">
            <button type="submit" class="page__btn" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

        </div>
        <?php do_action('woocommerce_cart_actions'); ?>

        <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>

        <?php do_action('woocommerce_after_cart_contents'); ?>

        <!-- </div> -->
        <?php do_action('woocommerce_after_cart_table'); ?>
    </form>

    <?php do_action('woocommerce_before_cart_collaterals'); ?>
    <?php
    /**
     * Cart collaterals hook.
     *
     * @hooked woocommerce_cross_sell_display
     * @hooked woocommerce_cart_totals - 10
     */
    do_action('woocommerce_cart_collaterals');
    ?>


</div>

<?php do_action('woocommerce_after_cart'); ?>