<?php
	$product1 = wc_get_product(16);
	$product2 = wc_get_product(48);
?>
<div class="h-offset top-block">

	<div class="top-block__slider">

		<div class="responsive-img top-block__slide"><img alt="" data-lazy="<?php echo get_template_directory_uri(); ?>/images/nate-johnston-1362310-unsplash.jpg" data-object-fit="cover">
			<div class="wrap top-block__inner">
				<h2 class="wow fadeInDown top-block__text top-block__text_2">
					<span>Up to </span>
					<b>20%</b>
					<br><b>more power</b>
					<br>for your car
				</h2>
			</div>
		</div>

		<div class="responsive-img top-block__slide"><img alt="" data-lazy="<?php echo get_template_directory_uri(); ?>/images/media/top-img-car2.jpg" data-object-fit="cover">
			<div class="wrap top-block__inner">
				<h2 class="wow fadeInDown top-block__text"><span>Chiptuning</span> has never <br>been <span>easier</span></h2>
			</div>
		</div>

	</div>

	<div class="top-block__filter">
		<div class="wrap top-block__filter-inner">
			<div class="b-filter b-filter_pos_index">
				<div class="b-filter__title" id="select-u-car" style="color:#f99920">FIND OUT HOW MANY HORSEPOWERS YOU CAN ADD TO YOUR CAR</div>
				<div class="row b-filter__list">
					<div class="col-sm-4 b-filter__item">
						<select id="api-car" class="select-style-3 b-filter__select" name="mark" data-search="true" data-placeholder="SELECT YOUR CAR">
							<option value=""></option>
						</select>
					</div>
					<div class="col-sm-4 b-filter__item">
						<select id="api-model" class="select-style-3 b-filter__select" name="model" data-placeholder="SELECT YOUR MODEL" disabled>
							<option value=""></option>
						</select>
					</div>
					<div class="col-sm-4 b-filter__item">
						<select id="api-modi" class="select-style-3 b-filter__select" name="modif" data-placeholder="SELECT YOUR HP" disabled>
							<option value=""></option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="btn btn-lg btn-orange hidden top-block__btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff" data-wow-delay="1s">Tune your car</a>
</div>

<div class="row visible-xs" style="
    text-align: center;
    padding: 20px;
    border: 2px solid #000;">
	<div class="col-xs-4">
		<a class="side-widget__link" href="#" data-remodal-target="modal-popup-moneyback">
      <div class="side-widget__item-icon">$</div>

      <div class="side-widget__item-title">30 Days

        <br> Money Back</div>
      </a>
	</div>
	<div class="col-xs-4">
		<a class="side-widget__link" href="#" data-remodal-target="modal-popup-lifetime">
              <div class="side-widget__item-icon">
                <svg role="img">
                  <title>Icon</title>
                  <use class="svg-i" xlink:href="#si-infinity"/>
                </svg>
              </div>
              <div class="side-widget__item-title">Lifetime <br>warranty</div>
            </a>
	</div>
	<div class="col-xs-4">
		<a class="side-widget__link" href="#" data-remodal-target="modal-popup-shipping">

              <svg class="side-widget__item-svg" role="img">

                <title>Icon</title>

                <use class="svg-i" xlink:href="#package" />

              </svg>

              <div class="side-widget__item-title">Free <br> shipping <br> worldwide</div>
              </a>
	</div>
</div>

<div class="section gradient-bg goods">
	<div class="wrap">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="goods__item">
					<h2 class="goods__item-title">Performance tuning</h2>
					<div class="goods__item-descr">More power or gas saving
						<br class="visible-xs">with <b>RSCHIP</b>
					</div>
					<div class="row goods__item-row">
						<div class="col-xs-7 col-sm-8">
							<div class="goods__item-img"><img src="<?php echo get_template_directory_uri(); ?>/images/media/chip-with-reflection-1.png" alt="RSCHIP">
							</div>
						</div>
						<div class="col-xs-5 col-sm-4">
							<div class="goods__item-adv">more
								<br class="hidden-xs">power and torque<sup>1</sup>
							</div>
							<div class="goods__item-adv"> better
								<br class="hidden-xs">fuel saving</div>
							<div class="goods__item-adv">Free IOS
								<br class="hidden-xs">and Android app
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-6"><a class="goods__item-more" href="<?= get_the_permalink($product1->id);?>">More about RSCHIP</a>
						</div>
						<div class="col-xs-5 col-sm-6"><a class="btn btn-lg btn-orange-border goods__item-btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section app">
	<div class="wrap">
		<h2 class="text-center app__title">Introducing <b>RSCHIP app</b></h2>
		<div class="row app__row">
			<div class="col-sm-6">
				<div class="clearfix app__phones">
					<img class="wow fadeIn app__phones-img" src="<?php echo get_template_directory_uri(); ?>/images/png/phones.png" alt="" title="" data-wow-offset="200">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="wow fadeInRight app__info" data-wow-offset="200">
					<ul class="app__info-list">
						<li class="app__info-item">
							Use your phone to <b>download</b> vehicle-specific tuning <b>settings</b>
						</li>
						<li class="app__info-item">
							Select from 3 modes of driving: <b>Sport Plus</b>, <b>Sport</b> & <b>Eco</b>
						</li>
						<li class="app__info-item">
							Fine-tune our original tuning settings to meet your <b>driving preferences</b>
						</li>
						<li class="app__info-item">
							<b>IOS</b> and <b>Android</b> compatible
						</li>
					</ul>
					<div class="app__btns">
						<a class="app__btn" href="//itunes.apple.com/us/app/rschip-chiptuning/id1007204524?mt=8" data-ripple-color="#fff" target="_blank">App store
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/app-store.svg" alt="Download on the App Store">
						</a>
						<a class="app__btn" href="//play.google.com/store/apps/details?id=it.rschip.rschip" data-ripple-color="#fff" target="_blank">Google play
							<img src="<?php echo get_template_directory_uri(); ?>/images/png/googleplay.svg" alt="Get it on Google Play">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="app__video">
			<a class="popup-youtube app__video-link" href="https://www.youtube.com/watch?v=TEl9ixZ3CK0">
				<svg class="app__video-icon" role="img">
					<title>icon</title>
					<use class="svg-i" xlink:href="#youtube" />
				</svg>
				Watch the promo video
			</a>
			<a class="popup-youtube app__video-link" href="https://www.youtube.com/watch?v=_KqDabGIQd8">
				<svg class="app__video-icon" role="img">
					<title>icon</title>
					<use class="svg-i" xlink:href="#youtube" />
				</svg>
				Watch the installation video
			</a>
		</div>
	</div>
</div>
<div class="section compatible">
	<div class="wrap compatible__inner">
		<div class="compatible__text" style="">
			We support <b>over 5000</b>
			<br>different makes and models.
			<br>Buy once and use on any vehicle
			<br>available on our database</div>
			<a class="btn btn-lg btn-orange compatible__btn" href="<?= get_the_permalink(27);?>">
				Select your CHIP
			</a>
	</div>
</div>
<div class="wrap">
	<div class="footnote footnote_loc_index">
		<p>1. Real world gains may be less or more depending on a large number of contributing factors.</p>
	</div>
</div>
