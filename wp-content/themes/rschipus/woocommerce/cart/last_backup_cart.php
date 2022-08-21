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
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<script type="text/javascript" src="<?= get_template_directory_uri();?>/plugins/jquery/jquery.min.js"></script>
<?php
wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form id='cartForm' action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>
<table class="shop_table shop_table_responsive cart" cellspacing="0">
 <div class="order-steps">
              <ol class="order-steps__list">
                    <li class="active order-steps__item"><a class="order-steps__link" href="cart.html">Cart</a></li>
                    <li class="order-steps__item"><a class="order-steps__link" href="cart-step-2.html">Shipping <br>information</a></li>
                    <li class="order-steps__item"><a class="order-steps__link" href="cart-step-3.html">Checkout</a></li>
              </ol>
            </div>
	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
				<tr class="cart-list__item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

	<td class="product-remove">
						<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
								'<a href="%s" class="cart-list__item-del" title="%s" data-product_id="%s" data-product_sku="%s">✖</a>',
								esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
								__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							), $cart_item_key );
						?>
					</td>
					<td class="product-name cart-list__item-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
						<?php
							if ( ! $product_permalink ) {
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							} else {
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
							}

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

							// Backorder notification
							if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
								echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
							}
						?>
					</td>
					
					<td class="cart-list__item-car"><span id="brand-cart">Alfa</span> <span id="model-cart">Romeo</span> <span id="modi-cart">gtr 2.0</span></td>
					<td class="product-thumbnail cart-list__item-col">
						<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo $thumbnail;
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
							}
						?>
					</td>
					<td class="product_content cart-list__item-col">
					<div class='cart-list__item-info'><?php 
					$product_description = get_post($cart_item['product_id'])->post_content;
					echo $product_description;
					?></div>
					</td>

					

					<td class="product-price cart-list__item-col" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?>
					</td>

					<td class="product-quantity cart-list__item-col" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
						?>
					</td>

					<td class="product-subtotal cart-list__item-col" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
						<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
						?>
					</td>

				
				</tr>
				<tr class="separator" />
				<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>
		<tr>
			<td colspan="6" class="actions cart-promo">
				<div class="col-sm-6">
	                <label class="cart-promo__title" for="prIn">Promo code</label>
			    </div>
				<?php if ( wc_coupons_enabled() ) { ?>
				<div class="col-sm-6">
					<div class="coupon cart-promo__form">
						<div class='row'>
							<label for="coupon_code"><?php _e( 'Coupon:', 'woocommerce' ); ?></label> 
							<div class="col-xs-6 col-sm-8">
								<input type="text" name="coupon_code" class="input-style-2 cart-promo__input" id="coupon_code" value=""/>
							</div>
							<div class="col-xs-6 col-sm-4">
								<input type="submit" class="button btn btn-md btn-blue cart-promo__btn" data-ripple-color="#fff" name="apply_coupon" value="<?php esc_attr_e( 'Apply', 'woocommerce' ); ?>" />								
							</div>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					</div>
				</div>
				<?php } ?>

				<input type="submit" class="button cart_update hidden" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" />

				<?php do_action( 'woocommerce_cart_actions' ); ?>

				<?php wp_nonce_field( 'woocommerce-cart' ); ?>
			</td>
		</tr>

		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</tbody>
</table>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

</div>
<script type="text/javascript">
						jQuery(document).ready(function () {
							if (getCookie('brand') !== null) {
								$('#brand-cart').text(getCookie('brand'));
								$('#model-cart').text(getCookie('model'));
								$('#modi-cart').text(getCookie('modi'));
								
								if ($.cookie('hpls') && $.cookie('nmls')) {
									$('#cart_hp').text('+' + getCookie('hpls') + ' HP power');
									$('#cart_nm').text('+' + getCookie('nmls') + ' NM torque');
									$('#cart_mpg').text('+' + getCookie('mpg') + '% MPG');
								};
							}
						});
					</script>
<?php do_action( 'woocommerce_after_cart' ); ?>
