<style>
.quantity {
  display: none;  
}
</style>
<?php $mytheme = get_option('theme_admin'); ?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php //post_class(); ?>>
  
 
        

  
        <div class="gradient-bg section product product_type_rseco">
          <div class="wrap rel">
            <h1 class="visible-xs product__title product__title_type_rseco"><span>RS</span>ECO</h1>
            <div class="row">
              <div class="col-sm-8 col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-sm-push-6">
                    <img class="product__img" src="<?php  the_post_thumbnail_url(); ?>" alt="" title=""></div>
                  <div class="col-sm-6 col-sm-pull-6">
                    <ul class="product__adv-list">
                      <li class="product__adv-item">Up to +15% MPG<sup>1</sup></li>
                      <li class="product__adv-item">1 tune <br>File</li>
                      <li class="product__adv-item">2 Years <br>warranty</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-6">
                <div class="product__info">
 <?php $product = wc_get_product(48); ?>
                  <h1 class="hidden-xs product__title product__title_type_rseco" style='text-transform: uppercase;'><?= $product->post->post_title ?></h1>
                  <div class="product__price"><?= '<span>'.get_woocommerce_currency_symbol(get_option('woocommerce_currency')).'</span>'.$product->get_price(); ?></div>
                              <a class="btn btn-orange-border btn-md product__btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop Now</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="steps steps_type_rseco">
          <div class="wrap steps__inner">
            <h2 class="section-title-1 steps__title">Just 3 installation steps</h2>
            <div class="steps__row">
                            <div class="steps__col">
                              <div class="steps__num">1</div>
                              <div class="steps__text"><span>Connect with <br>OBD II</span></div>
                            </div>
                            <div class="steps__col">
                              <div class="steps__num">2</div>
                              <div class="steps__text"><span>Drive up to <br>120 miles</span></div>
                            </div>
                            <div class="steps__col">
                              <div class="steps__num">3</div>
                              <div class="steps__text"><span>Start saving <br>your gas money</span></div>
                            </div>
            </div>
          </div>
        </div>
        <div class="advantages">
          <div class="wrap">
            <div class="row advantages__list">
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#moneyIcon"/>
                  </svg>
                  <div class="advantages__item-title">30 Days <br> Money Back</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#2yIcon"/>
                  </svg>
                  <div class="advantages__item-title">Years<br>Warranty</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#deliveryIcon"/>
                  </svg>
                  <div class="advantages__item-title">Free <br> shipping <br> worldwide</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#usaIcon"/>
                  </svg>
                  <div class="advantages__item-title">Over 100 000<br>units sold</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-section"><a class="btn btn-lg btn-orange" href="#calculate-header" data-ripple-color="#FFFFFF">Calculate your saving</a></div>
        <section>
          <div class="wrap hr-fix">
            <h2 class="section-title-1">How does it work?</h2>
            <div class="section-descr">
              <p>RSECO has been designed to tune your ECU to produce serious gains in fuel efficiency with no loss of power.</p>
              <p>RSECO is dynamic - which means the it will consider oxygen levels in the exhaust, along with engine speed and load, intake air temperature and volume, and many other variables to determine the most efficient fuel delivery rate and timing at up to 256 separate load points.</p>
              <p>RSECO is a vehicle specific, custom programmed 20MHz Microcontroller. It utilizes its high speed serial input/output to communicate directly with the ECU through the OBD-II port.</p>
              <p>Recommended modifications :<br>- K&N or equivalent non-restrictive intake</p>
              <p>RSECO is compatible with factory equipped Turbo/Superchargers, Flex-Fuel, & HHO supplement systems.</p>
            </div>
          </div>
          <hr class="hr-gradient">
          <div class="wrap"><img class="responsive-img" src="<?= get_template_directory_uri(); ?>/images/media/how-img-2.jpg" alt=""></div>
          <hr class="hr-gradient">
        </section>
        <section>
          <div class="wrap">
            <h2 id="calculate-header" class="section-title-1">Calculate your saving</h2>
            <div class="eco-calc">
              <form action="">
                <div class="row">
                  <div class="col-sm-4">
                    <label class="label-style eco-calc__label" for="">Enter Average Mileage</label>
                    <input id="eco-calc-1" class="input-style-1 eco-calc__input" type="text">
                  </div>
                  <div class="col-sm-4">
                    <label class="label-style eco-calc__label" for="">Enter Average MPG</label>
                    <input id="eco-calc-2" class="input-style-1 eco-calc__input" type="text">
                  </div>
                  <div class="col-sm-4">
                    <label class="label-style eco-calc__label" for="">Enter Average Fuel Cost</label>
                    <input id="eco-calc-3" class="input-style-1 eco-calc__input" type="text">
                  </div>
                </div>
              </form>
              <div class="eco-calc__result">
                <div class="eco-calc__result-title">Annual saving of</div>
                <div class="eco-calc__result-text">$0</div>
              </div>
            </div>
          </div>
        </section>
        <div class="btn-section"><a class="btn btn-lg btn-orange" href="/shop" data-ripple-color="#FFFFFF">Preorder</a></div>
        <div class="wrap tips">
          <h2 class="section-title-1">Fuel saving tips</h2>
          <div class="section-descr">
            <p>People all around the world are constantly trying to reduce fuel consumption of their cars. We have even created hybrid engines and e-cars, which don’t need fuel at all. But what should others do? Here’re some tips for beginning fuel-savers, which can help you make the car consume less:</p>
            <ul class="tips__list">
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#motorIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Check your engine</h3>
                              <div class="tips__text">
                                <p>Regular maintenance of the car is a must for all drivers. Make sure you use the proper oil for your engine – different car manufacturers recommend different types of oil. Accurate choice can help your car work more efficiently and reduce fuel-consumption.</p>
                              </div>
                            </li>
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#wheelIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Wheel-service</h3>
                              <div class="tips__text">
                                <p>Don’t forget to check the wheels regularly! Different tires pressure can lead to higher fuel consumption & even accidents on the road.</p>
                              </div>
                            </li>
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#weightIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Don’t exceed weight</h3>
                              <div class="tips__text">
                                <p>Driving with fully loaded back seats, trunk and roof-rack isn’t good for any vehicle. Especially, when you exceed the weight-limit for your car. Such a habit might come in handy in long journeys, but the more you carry, the more fuel your car needs.</p>
                              </div>
                            </li>
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#wayIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Make a trip plan</h3>
                              <div class="tips__text">
                                <p>Do you often get into rush-hours? Try avoiding that by driving in different time periods or using less crowded roads. Traffic jams are no good for your car, especially when we speak of fuel consumption (unless your vehicle is equipped with Start-Stop function).</p>
                              </div>
                            </li>
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#taxiIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Be like a taxi-driver</h3>
                              <div class="tips__text">
                                <p>Taxi-drivers all around the world use the following trick – they drive with the highest gear possible. Try going 60 kph on the 4th or 5th gear – you’ll feel the car wants higher rpm, but if you drive stable, fuel consumption will go down.</p>
                              </div>
                            </li>
                            <li class="tips__item">
                              <div class="tips__icon-place">
                                <svg class="tips__icon" role="img">
                                  <title>icon</title>
                                  <use class="svg-i" xlink:href="#carIcon"/>
                                </svg>
                              </div>
                              <h3 class="tips__title">Avoid aggressive driving</h3>
                              <div class="tips__text">
                                <p>Are you fond of drag racing? Than forget about low fuel-consumption – the harder you accelerate, the more fuel your engine needs. Try driving slow & steady – the mpg number will reduce.</p>
                              </div>
                            </li>
            </ul>
          </div>
        </div>
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
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#usaIcon"/>
                  </svg>
                  <div class="advantages__item-title">Made <br>in the USA</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#plugIcon"/>
                  </svg>
                  <div class="advantages__item-title">OBD-II Plug&Play <br>installation</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
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
        <div class="questions">
          <div class="img-section questions__img" style="background-image: url('<?= get_template_directory_uri(); ?>/images/media/women.jpg')"></div>
          <div class="wrap">
            <h2 class="questions__title">Still have questions?</h2>
            <div class="b-contacts">
              <div class="b-contacts__icons"><a class="b-contacts__icons-item" href="#" data-remodal-target="modal-popup-callback">
                  <svg class="b-contacts__icons-img b-contacts__icons-img_mod_cyrcled" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#telIcon"/>
                  </svg><span class="b-contacts__icons-text">Call us</span></a><a class="b-contacts__icons-item" href="#" data-remodal-target="modal-popup-feedback">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#mailIcon2"/>
                  </svg><span class="b-contacts__icons-text">Email us</span></a><a class="b-contacts__icons-item" href="https://www.facebook.com/rschipusa/" target="_blank">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#fbIcon"/>
                  </svg><span class="b-contacts__icons-text">Find us on <br>facebook</span></a></div>
              <div class="b-contacts__links">
                <p><a href="tel:+<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a></p>
                <p><a href="mailto:support@rschipus.com">support@rschipus.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="wrap">
          <div class="footnote"><sup>1</sup>Real world gains may be less or more depending on a large number of contributing factors.</div>
        </div> 
      