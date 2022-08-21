<?php
/**
 * Template Name: Shop page
 *
 *
 */

get_header(); ?>

<script type="text/javascript">
jQuery(document).ready(function() {
var hasCookie = getCookie('brand_id') != '' && getCookie('brand_id') != undefined;

console.log(hasCookie);
});
</script>

<div class="cart">
	<div class="wrap shop__inner">
		<h2 class="shop__title">
			<div class="shop__title-num"><span>1</span></div>
			<?php
				$brand = get_query_var('brand');
				$model = get_query_var('model');
				$modification = get_query_var('modification');
				if ($brand != '') {
					echo "You car is ".ucwords(str_replace('_',' ',$brand))." ".ucwords(str_replace('_',' ',$model))." ".ucwords(str_replace('_',' ',$modification)).""; }
					else {
						echo 'Select your car';
					}
			?>
		</h2>
		<div class="shop__car-selects">
			<form class="row" action="">
				<div class="col-sm-4">
					<select id="api-car" class="select-style-1 shop__select" name="mark" data-placeholder="Car">
						<option value=""></option>
					</select>
				</div>
				<div class="col-sm-4">
					<select id="api-model" class="select-style-1 shop__select" name="model" data-placeholder="Model">
						<option value=""></option>
					</select>
				</div>
				<div class="col-sm-4">
					<select id="api-modi" class="select-style-1 shop__select" name="modif" data-placeholder="Modification">
						<option value=""></option>
					</select>
				</div>
			</form>
			<div class="shop__find-link"><a data-remodal-target='modal-popup-findCar' href="#">Can't find my car</a></div>
		</div>
		<?php $product1 = wc_get_product(16);
		$product2 = wc_get_product(926);
		?>
				<input class="shop-product__hidden-checkbox visuallyhidden" id="cartProduct1" type="checkbox" name="product-rschip">
				<input class="shop-product__hidden-checkbox visuallyhidden" id="cartProduct2" type="checkbox" name="product-rschip2">
				<!-- <input class="shop-product__app-checkbox withapp_check visuallyhidden" id="emailNotification" type="checkbox" name="checkbox_app"> -->
				<div class="row hidden">
					<div class="col-md-4">
						<div class="shop-product__title"><?= str_replace('RS', '<span>RS</span>', $product1->post->post_title); ?></div>
						<div class="shop-product__img-wrap"><img src="<?php echo get_template_directory_uri();?>/images/media/shop-product-rschip.png" alt=""></div>

						<div class="visuallyhidden" id='rschip_price'><span class="woocommerce-Price-currencySymbol">$</span>
							<?php
								$prod_var_no = new WC_Product_Variation(160);
								echo $product1->get_price();
							?>
						</div>

					</div>
					<div class="col-md-8">
						<div class="shop-product__subtitle">
							<b><span class="brand"></span> <span class="model"></span> <span class="modi"></span></b> | <span id="result-hp"></span> | <span id="result-nm"></span>

							<!-- old calculated data -->
							<div class="hidden">
								<div class="info-hp"></div>
								<div id="hp-car"><b>+20 </b>Hp power</div>
								<div id="nm-car"><b>+79 </b>Nm torque</div>
								<div id="mpg-car"><b>+15% </b>MPG</div>
							</div>
              <!-- <div class="text-plus" style="padding-top:5px; font-weight: bolder;">
                <div>with RSCHIP <span id="result-hp-plus"></span> <span id="result-nm-plus"></span></div>
              </div> -->
							<!-- .old calculated data -->

						</div>
						<div class="shop-product__advantages">
							<dl class="shop-product__dl">
								<dt class="shop-product__dt">Buy once use on any vehicle on our database.</dt>
								<dd class="shop-product__dd">
									Buy purchasing RSCHIP you can reprogram it
									an infinite number of times and install on any
									car available on our database.
								</dd>
							</dl>
							<dl class="shop-product__dl">
								<dt class="shop-product__dt">Satisfaction Guaranteed.</dt>
								<dd class="shop-product__dd">
									If for any reason you aren't happy with your
									RSCHIP, just send it back. We'll refund the full
									purchase price. No questions asked.
								</dd>
							</dl>
							<dl class="shop-product__dl">
								<dt class="shop-product__dt">Lifetime warranty.</dt>
								<dd class="shop-product__dd">
									If you experience any issues with one of our
									products at any time, let us know and we'll
									replace it with a new one for free.
								</dd>
							</dl>
							<dl class="shop-product__dl">
								<dt class="shop-product__dt">Free RSCHIP app for Android and IOS.</dt>
								<dd class="shop-product__dd">
									Use your smartphone to download
									vehicle-specific tuning setting, changes modes
									from Sport Plus to Eco and much more.
								</dd>
							</dl>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- shop-content new block -->
	<div class="shop-content wrap">
		<div class="shop-content__main">
			<div class="shop-content__wrapper">
				<h3 class="shop-content__title">
					RS
				</h3>
				<p class="shop-content__text">
					Engine tuning on your smartphone with free IOS/Android apps <br>USD 399
				</p>
				<div class="shop-content__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/shop-content1.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-content1.png" alt="Chip">
					</picture>
				</div>
				<div class="shop-content__gain">
					<div class="shop-content__wrap hp1">
						<span>
							+&nbsp;20%&nbsp;HP*
						</span>
						<p>
							Power gain
						</p>
					</div>
					<div class="shop-content__wrap np1">
						<span>
							+&nbsp;20%&nbsp;NM*
						</span>
						<p>
							Torque gain
						</p>
					</div>
				</div>
				<div class="shop-content__list">
					<div class="shop-content__item hpnm1">
						Up to +20%* HP +20%* NM
					</div>
					<div class="shop-content__item">
						+15%* fuel saving
					</div>
					<div class="shop-content__item">
						3 driving modes
					</div>
					<div class="shop-content__item">
						iOS, Android apps
					</div>
				</div>
				<a href="#" class="shop-content__btn btn-orange-border btn" id="rs-select">
					Select
				</a>
			</div>
			<div class="shop-content__wrapper shop-content__wrapper_monte">
				<h3 class="shop-content__title">
					GTR
				</h3>
				<p class="shop-content__text shop-content__text_large">
					Tune your engine and dispaly car readings on 3.5 inch touch screen dispaly. USD 499
				</p>
				<div class="shop-content__img shop-content__img_large">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/shop-content2.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop-content2.png" alt="Chip">
					</picture>
				</div>
				<div class="shop-content__gain">
					<div class="shop-content__wrap hp2">
						<span>
							+&nbsp;25%&nbsp;HP*
						</span>
						<p>
							Power gain
						</p>
					</div>
					<div class="shop-content__wrap np2">
						<span>
							+&nbsp;25%&nbsp;NM*
						</span>
						<p>
							Torque gain
						</p>
					</div>
				</div>
				<div class="shop-content__list">
					<div class="shop-content__item hpnp2">
						Up to +25%* HP +25%* NM
					</div>
					<div class="shop-content__item">
						+18% fuel saving
					</div>
					<div class="shop-content__item">
						6 driving modes
					</div>
					<div class="shop-content__item">
						PC programmer
					</div>
					<div class="shop-content__item">
						Toach screen display
					</div>
					<div class="shop-content__item">
						Error code reader
				</div>
					<div class="shop-content__item">
						Real time gauges
					</div>
					<div class="shop-content__item">
						Acceleration meter
					</div>
					<div class="shop-content__item">
						Dyno meter
					</div>
				</div>
				<a href="#" class="shop-content__btn btn-orange-border btn" id="gtr-select" disabled>
					Out of stock
				</a>
			</div>
		</div>
		<p>
			*Real world gains may be less or more depending on a large number of contributing factors.
		</p>
	</div>
	<div class="shop__footer">
		<div class="wrap cart__inner">
			<div class="cart__footer">
				<a class="btn btn-link btn-md cart__back-btn" href="javascript:history.back()">< Back</a>
				<?php
				$product_id = 16;
				$url = esc_url_raw( add_query_arg( 'add-to-cart', $product_id, wc_get_cart_url() ) );
				?>
				<!-- <button class="btn btn-blue btn-md cart__to-cart" data-ripple-color="#fff" type="">To cart</button> -->
				<?php //print_r(WC()->cart->get_cart()); ?>

				<div class="w-product">
					<div class="wrap">
						<div class="row">
							<div class="col-xs-6 col-sm-9">
								<div class="row">
									<div class="col-sm-4">
										<div class="w-product__text">Free shipping</div>
									</div>
									<div class="col-sm-4">
										<div class="w-product__text">30 days trial</div>
									</div>
									<div class="col-sm-4">
										<div class="w-product__text" >
											<b id='footer_app_price'>$ <?php print_r($prod_var_no->get_regular_price()); ?></b>
											<b id='footer_app_price_line' style="text-decoration: line-through;    padding-left: 20px;">$ <?php print_r($prod_var_no->get_regular_price()); ?></b>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<button class="btn btn-blue btn-md w-product__btn" data-ripple-color="#fff" type="">To cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    if (hp_ !== null && hp_ != '') {
      var bhp = hp_;
    } else if (getCookie('hp') !== null) {
      var bhp = getCookie('hp');
    } else {
      var bhp = '';
    }
    if (nm_ !== null && nm_ != '') {
      var bnm = nm_;
    } else if (getCookie('nm') !== null) {
      var bnm = getCookie('nm');
    } else {
      var bnm = '';
    }

    $('.info-hp').html(bhp + ' hp | ' + bnm + ' Nm');

    var hp = bhp;
    var nm = bnm;

    var per11 = Math.round(parseInt(hp) * 11 / 100);
    var all11 = per11 + parseInt(hp);
    console.log(hp);
    console.log(per11);
    console.log(all11);

    var perNm11 = Math.round(parseInt(nm) * 11 / 100);
    var allNm11 = perNm11 + parseInt(nm);

    $('#hp-car').find('b').html('+' + per11 + ' ');
    $('#nm-car').find('b').html('+' + perNm11 + ' ');
    $('#mpg-car').find('b').html('+11% ');
    $('#result-hp').html(hp + ' Hp');
    $('#result-nm').html(nm + ' Nm');

    $('#result-hp-plus').html(all11 + 'Hp (+' + per11 + ')');
    $('#result-nm-plus').html(allNm11 + 'Nm (+' + perNm11 + ')');
  });
  </script>


	<?php get_footer(); ?>
