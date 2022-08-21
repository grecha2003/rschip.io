<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
// echo '<pre>';
// var_dump($product);
// echo '</pre>';

$tags_list = get_the_terms($product->id, 'product_tag');
$productACF = get_fields();
$productPreview = $productACF['products_preview'];
$productGain = $productACF['data_product_gain'];
// echo $productGain;
?>
<!--content-products-preview-->
<div class="productsItem" id="<?php echo $product->id; ?>" data-sku="<?php echo $product->sku; ?>" data-productgain="<?php echo $productGain; ?>">
	<h3 class="productsItemTitle"><?php echo $productPreview['title']; ?></h3>
	<p class="productsItemTextBefore"><?php echo $product->get_short_description(); ?></p>
	<?php if ($product->get_image_id()) {
			$url = wp_get_attachment_url($product->get_image_id());
			echo "<img class='productsItemImg' src=" . $url . " alt='product'>";
		} ?>
	<!-- <img class="productsItemImg" src="assets/images/png/products/product1.png" alt="product"> -->
	<?php /* <div class="productsItemGain">
		<div class="productsItemGain__text">
			<div class="text">up to</div>
			<div class="number hp"><?php echo $productACF['productsItemGain_power'];?></div>
			<div class="text">Power</div>
		</div>
		<div class="productsItemGain__text">
			<div class="text">up to</div>
			<div class="number nm"><?php echo $productACF['productsItemGain_torque'];?></div>
			<div class="text">Torque</div>
		</div>
	</div> */?>
	<h3 class="page__title-h3"> <?php echo $productPreview['text_before']; ?> </h3>
	<p class="productsItemTextAfter"><?php echo $productPreview['text_after']; ?></p>
	<div class="productsItemActions"> 
		<a class="page__btn" href="<?php echo $productPreview['link']; ?>">LEARN MORE</a>
		<?php if($productPreview['isCommingSoon']) : ?>
			<button class="page__btn page__btn_border-gray" disabled> Comming soon</button>
		<?php else : ?>
			<div class="productsItemActionsAddToCartWoocommerce">
				<?php do_action('woocommerce_after_shop_loop_item', array('')); ?>
			</div> 
		<?php endif;?>
		
		
	</div>
</div>

<!--/content-products-preview-->