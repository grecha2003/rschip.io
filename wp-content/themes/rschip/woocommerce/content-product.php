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

// $attributes = $product->get_attributes();
// echo '<pre>';
// var_dump($attributes);
// echo '</pre>';
// $valuesAr = array();
// foreach ($attributes as $attribute) {

// 	$values = array();
// 	if ($attribute->is_taxonomy()) {
// 		$attribute_taxonomy = $attribute->get_taxonomy_object();
// 		$attribute_values = wc_get_product_terms($product->get_id(), $attribute->get_name(), array('fields' => 'all'));
// 		foreach ($attribute_values as $attribute_value) {
// 			$value_name = esc_html($attribute_value->name);
// 			if ($attribute_taxonomy->attribute_public) {
// 				$values[] = '<a href="' . esc_url(get_term_link($attribute_value->term_id, $attribute->get_name())) . '" rel="tag">' . $value_name . '</a>';
// 			} else {
// 				$values[] = $value_name;
// 			}
// 		}
// 	} else {
// 		$values = $attribute->get_options();
// 		foreach ($values as $value) {
// 			$value = make_clickable(esc_html($value));
// 		}
// 	}
// 	$valuesAr += $values;
// 	// var_dump($values) ;
// 	apply_filters('woocommerce_attribute', wpautop(wptexturize(implode(', ', $values))), $attribute, $values);
// }
$tags_list = get_the_terms($product->id, 'product_tag');
$productACF = get_fields();
$productPreview = $productACF['products_preview'];

$isProductCartBig = $productACF['product_cart_big'];
$productGain = $productACF['data_product_gain'];

?>
<!--content-products-->
<?php if (!$isProductCartBig) : ?>
	<div id="<?php echo $product->id; ?>" data-sku="<?php echo $product->sku; ?>" data-productgain="<?php echo $productGain; ?>" class="productsItem productsItemCart ">
		<?php if ($tags_list) :
			foreach ($tags_list as $tag) :
		?>
				<div class="productsItemCartLabel"><?php echo $tag->name ?></div>
		<?php endforeach;
		endif; ?>
		<h3 class="productsItemCartTitle"><?php echo $product->name; ?></h3>
		<p class="productsItemCartTextBefore"><?php echo $product->get_short_description(); ?></p>
		<?php if ($product->get_image_id()) {
			$url = wp_get_attachment_url($product->get_image_id());
			echo "<img class='productsItemCartImg' src=" . $url . " alt='product'>";
		} ?>
		<div class="productsItemCartGain">
			<?php /*	<div class="productsItemGain">
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
			</div>*/?>
			<?php echo $product->get_description(); ?>

		</div>
		<div class="productsItemCartActions">
			<div class="productPrice"><?php echo $product->get_price_html(); ?></div>
			<?php if($productPreview['isCommingSoon']) : ?>
				<button class="page__btn page__btn_border-gray" disabled> Comming soon</button>
			<?php else : ?>
				<div class="productsItemActionsAddToCartWoocommerce">
					<?php do_action('woocommerce_after_shop_loop_item', array('')); ?>
				</div> 
			<?php endif;?>

		</div>
	</div>
<?php else : ?>
	<div id="<?php echo $product->id; ?>" data-sku="<?php echo $product->sku; ?>" class="productsItem productsItemCart productsItemCart__Big">
		<div class="productsItemCart__text">
			<h3 class="productsItemCartTitle"><?php echo $product->name; ?></h3>
			<p class="productsItemCartTextBefore"> <span class="">
				<?php echo $productACF['productsItemGain_power'];?>
			</span>Better acceleration</p>
		</div>
		<div class="productsItemCart__img">
			<?php if ($product->get_image_id()) {
				$url = wp_get_attachment_url($product->get_image_id());
				echo "<img class='productsItemCartImg' src=" . $url . " alt='product'>";
			} ?>

		</div>
		<div class="productsCartAdvatages">
			<div class="productsCartAdvatagesItem">
				<div class="productsCartAdvatagesItem__icon">
					<div class="svg-iconSpeedometerGray svg-iconSpeedometerGray-box"> </div>
				</div>
				<div class="productsCartAdvatagesItem__text">
					<h5 class="productsCartAdvatagesItem__title">Compatiable with all modern cars</h5>
					<p>Electronic throttle controller works with ICE. BEV and hybridengines</p>
				</div>
			</div>
			<div class="productsCartAdvatagesItem">
				<div class="productsCartAdvatagesItem__icon">
					<div class="svg-iconFuelGray svg-iconFuelGray-box"> </div>
				</div>
				<div class="productsCartAdvatagesItem__text">
					<h5 class="productsCartAdvatagesItem__title">Better throttle response</h5>
					<p>Save 10-18%* More fuel on Eco mode</p>
				</div>
			</div>
			<div class="productsCartAdvatagesItem">
				<div class="productsCartAdvatagesItem__icon">
					<div class="svg-iconFuelGray svg-iconFuelGray-box"> </div>
				</div>
				<div class="productsCartAdvatagesItem__text">
					<h5 class="productsCartAdvatagesItem__title">5 driving stages</h5>
					<p>Free Companion app with an access to our tuning database</p>
				</div>
			</div>
			<div class="productsCartAdvatagesItem">
				<div class="productsCartAdvatagesItem__icon">
					<div class="svg-iconCPU svg-iconCPU-box"> </div>
				</div>
				<div class="productsCartAdvatagesItem__text">
					<h5 class="productsCartAdvatagesItem__title">Back CPU for the safest ride</h5>
					<p>Change your vehicle and tune right from the phone anytime</p>
				</div>
			</div>
		</div>
		<div class="cartShopSelect">
			<div class="selectBox selectBoxCart" data-productname="<?php echo $product->sku; ?>">
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
		<div class="productsItemCartActions">
			<div class="productPrice"><?php echo $product->get_price_html(); ?></div>
			<div class="productsItemActionsAddToCartWoocommerce">
				<?php do_action('woocommerce_after_shop_loop_item'); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<!--/content-products-->