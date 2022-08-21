<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;


if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
 	<div class="cartEmpty">
            <div class="cartEmptyTitle">Your Cart is 
					<span class="page_red">empty</span>
			</div>
            <div class="cartEmptyDesc">Once selected your item well appear here</div>
			<a class="page__btn" href="/shop/" >
			<?php
				/**
				 * Filter "CONTINUE SHOPPING Return To Shop" text.
				 *
				 * @since 4.6.0
				 * @param string $default_text Default text.
				 */
				echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'CONTINUE SHOPPING', 'woocommerce' ) ) );
			?>
			 </a>
        </div>
	
<?php endif; ?>
