<?php 
include "../../../../wp-load.php";
 ?>
<div class="white-popup-block page-popup">
  <div class="page-popup__inner">
    <div class="gradient-bg section product product_type_rschip">
	    <div class="wrap rel">
	      <h1 class="visible-xs product__title product__title_type_rschip">Boost your car’s <br>perfrormance <br>with <b>RSCHIP</b></h1>
	      <div class="row">
	        <div class="col-sm-8 col-md-6">
	          <div class="row">
	            <div class="col-sm-6 col-sm-push-6"><img class="product__img" src="<?= get_template_directory_uri(); ?>/images/media/product-rschip.png" alt="" title=""></div>
	            <div class="col-sm-6 col-sm-pull-6">
	              <ul class="product__adv-list">
	              	<li class="product__adv-item">More power</li>
	              	<li class="product__adv-item">More torque</li>
	              	<li class="product__adv-item">Improved fuel economy</li>
	              	<li class="product__adv-item">Free IOS/Android app</li>
	              	<li class="product__adv-item">
	              		over 5000 
	              		<br>vehicles supported
	              	</li>
	              	<li class="product__adv-item">Faster AT
	              		<br>gear shifting</li>
	              	</ul>
	            </div>
	          </div>
	        </div>
	        <div class="col-sm-4 col-md-6">
	          <div class="product__info">
	            <?php $product = wc_get_product(16); ?>
	            <h1 class="hidden-xs product__title product__title_type_rschip">
	            	Boost your car’s 
	            	<br>perfrormance 
	            	<br>with <b>RSCHIP</b>
	            </h1>
				<!-- <div class="product__price">
					<span>from $</span>
					<?php
						$prod_var_no = new WC_Product_Variation(160);
						print_r($prod_var_no->get_regular_price());
					?>
				</div> -->
	          </div>
	        </div>
	      </div>
	    </div>
	  </div><!-- .product-->
		<div class="section about-product">
			<div class="wrap">
				<h2 class="section-title-1 about-product__title">Introducing the New RSCHIP</h2>
				<div class="section-descr about-product__descr">
					<p>This Next Generation chip combines the power output of our legendary RSChip with new features and easier installation. The RSCHIP is our latest high performance Dynamic Soft-Flasher. Inside is a revolutionary new 20MHz microprocessor with on-board EEPROM to store our custom maps. Integrated Bluetooth, USB, and OBD-II Plug & Play technology makes this RSChip the easiest to use and most powerful model we’ve ever made.</p>
				</div>
			</div>
		</div><!-- .about-product -->
		<div class="advantages">
			<div class="wrap">
				<div class="row advantages__list">
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#gearIcon" />
							</svg>
							<div class="advantages__item-title">Up to +20%
								<br>more<sup>1</sup> power</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#acppIcon" />
							</svg>
							<div class="advantages__item-title">Faster AT
								<br>gear shifting</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#plugIcon" />
							</svg>
							<div class="advantages__item-title">OBD-II Plug&Play
								<br>installation</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#computer" />
							</svg>
							<div class="advantages__item-title">Self programmable
								<br>with smartphone
								<br>or computer</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .advantages -->
		<div class="section dark-section">
			<div class="wrap">
				<h2 class="section-title-1 dark-section__title">How does it work?</h2>
				<div class="section-descr">
					<p>The RSChip utilizes revolutionary new high speed IO to communicate directly with the ECU through the OBD-II port. Inside your car’s ECU, a 3-dimensional map tells your fuel injectors exactly how much fuel to deliver given current air temperature, density, engine speed, throttle position, and other variables. From the factory, this map is generic and designed to provide a sluggish, no-surprises style of driving to suit a wide range of drivers. The RSCHIP Performance Chip temporarily replaces parts of this map with parts from our highly tuned performance maps, and will safely unleash your engine's full potential, without voiding the warranty.</p>
					<p>Recommended modifications :</p>
					<p>- K&N or equivalent non-restrictive intake
						<br>- 92 octane fuel</p>
					<p>The RSCHIP is compatible with factory equipped Turbo/Superchargers, Flex-Fuel, & HHO systems.</p>
				</div>
			</div>
		</div><!-- .dark-section -->
		<div class="img-offset">
			<div class="wrap"><img class="responsive-img" src="<?= get_template_directory_uri(); ?>/images/media/how-img.jpg" alt=""></div>
		</div><!-- .how-img -->
		<div class="advantages">
			<div class="wrap">
				<div class="row advantages__list">
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#heartIcon" />
							</svg>
							<div class="advantages__item-title">Safe for
								<br>your engine</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#processor" />
							</svg>
							<div class="advantages__item-title">ECU is not
								<br>overwritten</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#transfer" />
							</svg>
							<div class="advantages__item-title">Transferable
								<br>between vehicles</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#usaIcon" />
							</svg>
							<div class="advantages__item-title">Made
								<br>in the USA</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .advantages -->
		<div class="advantages">
			<div class="wrap">
				<div class="row advantages__list">
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#racing-flags" />
							</svg>
							<div class="advantages__item-title">Two sport
								<br>modes</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#fuelIcon" />
							</svg>
							<div class="advantages__item-title">Eco
								<br>mode</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#analysis" />
							</svg>
							<div class="advantages__item-title">Dyno-proven</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 advantages__item">
						<div class="advantages__item-wrap">
							<svg class="advantages__item-icon" role="img">
								<title>Icon</title>
								<use class="svg-i" xlink:href="#controls" />
							</svg>
							<div class="advantages__item-title">Fine-tuning
								<br>feauture</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .advantages -->

		<div class="soft">
			<div class="wrap">
				<hr class="hr-gradient hidden-xs">
				<h2 class="section-title-1">RSCHIP App</h2>
				<div class="section-descr">
					<p>Use the RSChip App on your Apple or Android smartphone to connect to your chip on the go. Use the app to customize options such as engine load, fuel octane, and aftermarket modifications in order to maximize gains. You can also choose to prioritize power, fuel efficiency, or a mix of both.</p>
					<p>The RSChip App makes changing vehicles easy. Simply connect the to your chip and download maps from our database of over 4,000 supported vehicles.</p>
				</div>
				<div class="soft__phones">
   					<img src="<?= get_template_directory_uri(); ?>/images/png/3-phones.png" alt="" title="" data-wow-offset="200">
				</div>
				<h3 class="section-title-2">Installation with smartphone</h3>
				<ol class="soft__list dark-list">
					<li class="dark-list__item"><span>Connect with OBD II</span></li>
					<li class="dark-list__item"><span>Download your vehicle specific map</span></li>
					<li class="dark-list__item"><span>Select your mode from Sport +, Sport or Eco</span></li>
					<li class="dark-list__item"><span>Drive up to 120 miles</span></li>
					<li class="dark-list__item"><span>Enjoy emproved performance</span></li>
				</ol>
			</div>
		</div><!-- .soft -->
		<div class="section soft">
			<div class="wrap">
				<h2 class="section-title-1">RSCHIP desktop software</h2>
				<div class="soft__img"><img class="responsive-img" src="<?= get_template_directory_uri(); ?>/images/media/mac.jpg" alt="desktop software presetation"></div>
				<h3 class="section-title-2">RSCHIP desktop installation</h3>
				<ol class="soft__list dark-list">
					<li class="dark-list__item"><span>Start RSCHIP desktop software</span></li>
					<li class="dark-list__item"><span>Connect your RSCHIP by USB to your computer</span></li>
					<li class="dark-list__item"><span>Select your car and download a tune-File</span></li>
					<li class="dark-list__item"><span> Select from 3 modes of driving: <b>SPORT+</b>, <b>SPORT </b>or <b>ECO</b></span></li>
				</ol>
			</div>
		</div><!-- .section soft -->

		<div class="gradient-bg safety">
			<div class="wrap">
				<h2 class="section-title-1 safety__title">Is it safe?</h2>
				<div class="section-descr">RSchip replaces the factory value with one from its on-board performance tuned map. It reads the ECU and the ECU's fuel and timing values ONLY are the subjects to change. The RSchip will not affect any other electronic systems such as dashboard displays, safety features, transmission etc. It doesn’t overwrite the Electronic Control Unit in your vehicle. Thus, there is no risk of overloading individual engine components. RSchip doesn’t affect your warranty and is untraceable if it needs to be removed.</div>
				<img class="responsive-img img-offset safety__img" src="<?= get_template_directory_uri(); ?>/images/media/motor.png" alt="">
			</div>
		</div><!-- .safety -->
    <div class="btn-section"><a class="btn btn-lg btn-orange popup-modal-dismiss" href="javascript:void(0)" data-ripple-color="#FFFFFF">Back to shop</a></div>
    <div class="advantages">
      <div class="wrap">
        <div class="row advantages__list">
          <div class="col-xs-6 col-sm-3 advantages__item">
            <div class="advantages__item-wrap">
              <svg class="advantages__item-icon" role="img">
                <title>Icon</title>
                <use class="svg-i" xlink:href="#shieldIcon"/>
              </svg>
              <div class="advantages__item-title">Does not void <br>your warranty</div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 advantages__item" data-wow-delay="0.2s">
            <div class="advantages__item-wrap">
              <svg class="advantages__item-icon" role="img">
                <title>Icon</title>
                <use class="svg-i" xlink:href="#usaIcon"/>
              </svg>
              <div class="advantages__item-title">Made <br>in the USA</div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 advantages__item" data-wow-delay="0.4s">
            <div class="advantages__item-wrap">
              <svg class="advantages__item-icon" role="img">
                <title>Icon</title>
                <use class="svg-i" xlink:href="#plugIcon"/>
              </svg>
              <div class="advantages__item-title">OBD-II Plug&Play <br>installation</div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 advantages__item" data-wow-delay="0.6s">
            <div class="advantages__item-wrap">
              <svg class="advantages__item-icon" role="img">
                <title>Icon</title>
                <use class="svg-i" xlink:href="#heartIcon"/>
              </svg>
              <div class="advantages__item-title">Safe for <br>your engine</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>