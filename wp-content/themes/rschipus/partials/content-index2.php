<?php
	$product1 = wc_get_product(16);
	$product2 = wc_get_product(48);
?>
<style type="text/css">
	.select-your-car {
	    margin-top: 4px;
	}
	.header-list li {
		margin-bottom: 20px;
	}
	.goods__item-adv {
		text-align: right;
		margin-right: 30px;
	}
	@media screen and (max-width: 768px) {
		.goods__item-adv {
			text-align: left;
			margin-right: 0;
		}
	}
</style>
<!-- <div class="h-offset top-block">

	<div class="top-block__slider">

		<div class="responsive-img top-block__slide"><img alt="" data-lazy="<?php echo get_template_directory_uri(); ?>/images/media/top_header_000.jpg" data-object-fit="cover">
			<div class="wrap top-block__inner">
				<h2 class="wow fadeInDown top-block__text top-block__text_2" style="border-bottom: 2px solid #fff;padding-bottom: 30px;    display: inline-block;">
					<span>INTRODUCING </span>
					<b>NEW</b>
					<br><b>RSCHIP</b>
					PLUS
				</h2>

				<ul class="header-list">
					<li>ENHANCED PERFORMANCE</li>
					<li>IMPROVED RELIABILITY</li>
					<li>MORE FUN TO DRIVE</li>
				</ul>
			</div>
		</div> -->

		<!-- <div class="responsive-img top-block__slide"><img alt="" data-lazy="<?php echo get_template_directory_uri(); ?>/images/media/top-img-car2.jpg" data-object-fit="cover">
			<div class="wrap top-block__inner">
				<h2 class="wow fadeInDown top-block__text"><span>Chiptuning</span> has never <br>been <span>easier</span></h2>
			</div>
		</div> -->

	<!-- </div> -->
	<div class="main-offer h-offset top-block">
		<div class="wrap">
			<h1 class="main-offer__title">
				Increase power, <br>save fuel, <br>create dyno charts<br> and more
			</h1>
			<div class="main-offer__list">
				<div class="main-offer__item">
					<div class="main-offer__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/lightning.svg" alt="Icon">
					</div>
					<p class="main-offer__text">
						Up to +25 HP* +25NM*
					</p>
				</div>
				<div class="main-offer__item">
					<div class="main-offer__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/canister.svg" alt="Icon">
					</div>
					<p class="main-offer__text">
						+18% fuel saving1
					</p>
				</div>
				<div class="main-offer__item">
					<div class="main-offer__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/engine.svg" alt="Icon">
					</div>
					<p class="main-offer__text">
						Error code reader
					</p>
				</div>
				<div class="main-offer__item">
					<div class="main-offer__wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/speedometer.svg" alt="Icon">
					</div>
					<p class="main-offer__text">
						Real time gauges
					</p>
				</div>
			</div>
			<div class="main-offer__wrapper">
				<div class="top-block__filter" style="position: static;">
					<div class="top-block__filter-inner">
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
				<a href="<?php echo get_page_link( 916); ?>" class="main-offer__link">
					Learn more
				</a>
			</div>
		</div>
	</div>
	<!-- <div class="top-block__filter">
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
	</div> -->

	<!-- <a class="btn btn-lg btn-orange hidden top-block__btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff" data-wow-delay="1s">Tune your car</a> -->
<!-- </div> -->

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

<div class="section gradient-bg goods" style="background: #000">
	<div class="wrap">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="goods__item">
					<!-- <h2 class="goods__item-title">Performance tuning</h2>
					<div class="goods__item-descr">More power or gas saving
						<br class="visible-xs">with <b>RSCHIP</b>
					</div> -->
					<div class="row " style="color:#fff">
						 <!-- goods__item-row -->
						<div class="col-md-5 col-md-offset-7 col-xs-12 ">
							<div class="goods__item-adv f-text">
	    						more power,<br>more torque,<br>more fun,
							</div>
							<!-- <div class="goods__item-adv"> better
								<br class="hidden-xs">fuel saving</div> -->
						</div>
						<div class="col-md-7 col-xs-12 ">
							<div class="goods__item-img"><img src="<?php echo get_template_directory_uri(); ?>/images/media/Rschip_000.png" alt="RSCHIP">
							</div>
						</div>
						<div class="col-md-5 col-md-offset-7 col-xs-12 ">
							<div class="goods__item-adv s-text" >
								<p>New powerful TUNING ALGORITHM optimised to your car and works straight out of the box. </p>

<p>NEW CPU that allows faster data processing. </p>

<p>REDESIGNED HARDWARE. Now your RSCHIP can withstand extreme heat and unexpected electric spikes. </p>

<p>NEW ENCLOSURE with magnetic mount solution, that allows you to position the chips anywhere you want and remove it easily.</p>

<p>NEW lighting-fast smarthpne  APP</p>
							</div>
						</div>

					</div>
					<div class="row" style="padding-bottom: 30px;">
						<div class="col-xs-7 col-sm-6"></div>
						<div class="col-xs-5 col-sm-6" style="    text-align: right;
    padding-right: 40px;"><a class="goods__item-more" style="color:#f99920" href="<?= get_the_permalink($product1->id);?>">MORE ABOUT RSCHIP PLUS</a>
						</div>
						<!-- <div class="col-xs-5 col-sm-6"><a class="btn btn-lg btn-orange-border goods__item-btn" href="<?//= get_the_permalink(27);?>" data-ripple-color="#fff">Shop now</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.p_text_app {
		font-weight: bold;
	    width: 50%;
	    float: right;
	    padding: 20px;
	}
	.header-list {
		color: #fff;
	    padding: 30px 15px;
	    font-size: 22px;
	}
	.f-text {
		font-size: 24px;
		text-transform: uppercase;
		font-weight: bold;
		    margin-bottom: -100px;
	}
	.s-text {
		line-height: 2em;
		/*padding-bottom: 60px;*/
		    margin-top: -300px!important;
	}

	.s-text p{
		padding-bottom: 10px;
	}
	@media screen and (max-width: 768px) {
		.p_text_app {
			font-weight: bold;
		    width: 100%;
			padding: 20px 20px 0px 20px;
			margin-bottom: -20px;
			text-align: center;
		}

		.header-list {
			font-size: 18px
		}

		.f-text {
			text-align: center;
			font-size: 24px;
		    margin-bottom: 20px;
		}
		.s-text {
			padding-top: 120px;
			text-align: justify;
			font-size: 14px;
			margin-top: 0px!important;
		}
	}

	.top-block__text_2 {
	    font-weight: 600;
	    margin: 30px 0 0;
	}

	@media screen and (min-width: 992px) {
		.top-block__text_2 {
		    margin: 80px 0 0;
		}


	}
</style>

<div class="row" style="padding-bottom: 10px">

	<div class="col-sm-6 col-xs-12">
		<p class="p_text_app">DOWNLOAD NEW RSCHIP PLUS APP ON APPLE STORE OR GOOGLE PLAY</p>
	</div>
	<div class="col-sm-6 col-xs-12">
		<div class="app__btns">
			<a class="app__btn" href="https://apps.apple.com/us/app/rschip-plus/id1482772220?l=ru&ls=1" data-ripple-color="#fff" target="_blank">App store
				<img src="<?php echo get_template_directory_uri(); ?>/images/png/app-store.svg" alt="Download on the App Store">
			</a>
			<a class="app__btn" href="https://play.google.com/store/apps/details?id=ru.tachos.rschipplus" data-ripple-color="#fff" target="_blank">Google play
				<img src="<?php echo get_template_directory_uri(); ?>/images/png/googleplay.svg" alt="Get it on Google Play">
			</a>
		</div>
	</div>
</div>

<!-- <div class="section app">
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
							<img src="<?php //echo get_template_directory_uri(); ?>/images/png/app-store.svg" alt="Download on the App Store">
						</a>
						<a class="app__btn" href="//play.google.com/store/apps/details?id=it.rschip.rschip" data-ripple-color="#fff" target="_blank">Google play
							<img src="<?php //echo get_template_directory_uri(); ?>/images/png/googleplay.svg" alt="Get it on Google Play">
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
</div> -->
<!-- <div class="section compatible">
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
</div> -->
<!-- <div class="wrap">
	<div class="footnote footnote_loc_index">
		<p>1. Real world gains may be less or more depending on a large number of contributing factors.</p>
	</div>
</div> -->
