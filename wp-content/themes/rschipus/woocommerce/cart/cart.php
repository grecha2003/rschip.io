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
 * @version 2.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<script type="text/javascript" src="<?= get_template_directory_uri();?>/plugins/jquery/jquery.min.js"></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '328111548047171');
  fbq('track', 'PageView');
  fbq('track', 'AddToCart');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=328111548047171&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php
wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form id='cartForm' class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
<div class="order-steps">
              <ol class="order-steps__list">
                    <li class="active order-steps__item"><a class="order-steps__link" href="cart.html">Cart</a></li>
                    <li class="order-steps__item"><a class="order-steps__link" href="cart-step-2.html">Shipping <br>information</a></li>
                    <li class="order-steps__item"><a class="order-steps__link" href="cart-step-3.html">Checkout</a></li>
              </ol>
            </div>
	
	<ul class="shop_table shop_table_responsive cart woocommerce-cart-form__contents cart-list__content">
		<div class="cart-list">
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<li class="woocommerce-cart-form__cart-item cart-list__item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<div class="product-remove">
							<?php
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
									'<a href="%s" class="cart-list__item-del" title="%s" data-product_id="%s" data-product_sku="%s">✖</a>',
									esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
									__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								), $cart_item_key );
							?>
						</div>
						<div class="cart-list__item-name product-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
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
						</div>
						<script type="text/javascript">
						jQuery(document).ready(function () {
							if (getCookie('brand') !== null) {
								bbrand = getCookie('brand').toUpperCase().replace(/_/g, ' ');
								bmodel = getCookie('model').toUpperCase().replace(/_/g, ' ');
								bmodi = getCookie('modi').toUpperCase().replace(/_/g, ' ');

								$('#brand-cart').text(bbrand);
								$('#model-cart').text(bmodel);
								$('#modi-cart').text(bmodi);
								
								if ($.cookie('hpls') && $.cookie('nmls')) {
									$('#cart_hp').text('+' + getCookie('hpls') + ' HP power');
									$('#cart_nm').text('+' + getCookie('nmls') + ' NM torque');
									$('#cart_mpg').text('+' + getCookie('mpg') + '% MPG');
								};
							}
						});
					</script>
						<div class="cart-list__item-car"><span id="brand-cart">Alfa</span> <span id="model-cart">Romeo</span> <span id="modi-cart">gtr 2.0</span></div>
					<div class="cart-list__item-row">
						<div class="cart-list__item-col product-thumbnail">
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $product_permalink ) {
									echo $thumbnail;
								} else {
									printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
								}
							?>
						</div>
						<div class="cart-list__item-col">
                            <div class="cart-list__item-info">
	                            <?php 
	                            if ( $_product->is_type( 'variation' ) ) {
	                            	echo "
	                            	<p id='cart_hp'></p>
									<p id='cart_nm'></p>
									<p id='cart_mpg'></p>
									";
									
								$prod_var_yes = new WC_Product_Variation($_product->variation_id);
                				$result = $prod_var_yes->get_variation_description();
								print_r($result);
							}
							else {

								$product_description = get_post($cart_item['product_id'])->post_content;
								echo $product_description;
							}
					

					?>
	                            <div class="cart-list__total-info hidden">202 HP 418 Nm</div>
                            </div>
                        </div>


						<div class="cart-list__item-col product-price" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

							?>
						</div>
						

						<div class="product-quantity cart-list__item-col" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>">
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
					</div><div class="cart-list__item-col">
						<div class="product-subtotal" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
							
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
							</div>
						</div>
					</li>
					<?php
				}
			}
			?>
</div>
			<?php do_action( 'woocommerce_cart_contents' ); ?>

			 <div class="cart-promo">
              <div class="row">
				<div colspan="6" class="actions">
		          <?php if ( wc_coupons_enabled() ) { ?>
		            <div class="coupon">
		              <div class="col-sm-4">
		              	<label class="cart-promo__title" for="coupon_code"><?php _e( 'Type your Promo Code here:', 'woocommerce' ); ?></label>
		              </div>
		              <div class="col-sm-8">
		              	 <div class="row">
			              	 <div class="col-xs-6 col-sm-6">
			              		<input type="text" name="coupon_code" class="input-text input-style-2 cart-promo__input" id="coupon_code" value="" /> 
			              	</div>
			              	<div class="col-xs-6 col-sm-6">
			              		<input type="submit" class="btn btn-md btn-blue cart-promo__btn" name="apply_coupon" value="<?php esc_attr_e( 'APPLY PROMO CODE', 'woocommerce' ); ?>" />
			              	</div>	
		              	</div>	
		              </div>
		              <?php do_action( 'woocommerce_cart_coupon' ); ?>
		            </div>
		          <?php } ?>

		          <input type="submit" class="button cart_update hidden" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>" />

		          <?php do_action( 'woocommerce_cart_actions' ); ?>

		          <?php wp_nonce_field( 'woocommerce-cart' ); ?>
		        </div>
	         </div>
	        </div>
		

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</ul>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<div class="cart-collaterals">
	<?php do_action( 'woocommerce_cart_collaterals' ); ?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>

<script>
var url = window.location.toString();
if (url.indexOf("?") > 0) {
    var clean_url = url.substring(0, url.indexOf("?"));
    window.history.replaceState({}, document.title, clean_url);
}

</script>
