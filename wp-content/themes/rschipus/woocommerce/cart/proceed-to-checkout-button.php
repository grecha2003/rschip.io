<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
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
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

	
<a class="btn btn-link btn-md cart__back-btn" href="/shop">&lt; Back to shop</a>
 	<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="btn btn-blue btn-md cart__next-step has-ripple" data-ripple-color="#fff" >
	  	<div class="ripple"></div>
	  	<?php echo __( 'Next', 'woocommerce' ); ?>
	</a>
