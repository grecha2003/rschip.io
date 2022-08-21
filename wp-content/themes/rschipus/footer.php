</main>

 <?php if($post->ID !=11 && $post->ID !=12 && $post->ID !=27 && $post->ID !=221) { ?>

      <footer class="footer">

          <hr class="footer__hr">

          <div class="wrap">

            <div class="row">

              <div class="col-sm-6">

                <!-- f-socials -->

                <div class="f-socials">

                    <div class="f-socials__title">Follow</div>

                    <div class="f-socials__links">

                        <ul class="f-socials__list">


                            <li class="f-socials__item">

                                <a class="f-socials__link" href="https://www.youtube.com/channel/UCuzz1U-IdQ13DVEfhfzAVLg" target="_blank">

                                    <svg class="f-socials__item-icon" role="img">

                                        <title>Icon</title>

                                        <use class="svg-i" xlink:href="#ytSocIcon" />

                                    </svg>

                                </a>

                            </li>

                          <!-- 

                            <li class="f-socials__item">

                                <a class="f-socials__link" href="https://www.instagram.com/rschipusa/" target="_blank">

                                    <svg class="f-socials__item-icon" role="img">

                                        <title>Icon</title>

                                        <use class="svg-i" xlink:href="#instIcon" />

                                    </svg>

                                </a>

                            </li>
 -->
                        </ul>

                    </div>

                </div>

                <!-- .f-socials -->

              </div>

              <div class="col-sm-6" id='footer_subscribe'>

                <div class="subscribe subscribe_pos_footer clearfix">


          <a class="btn btn-orange-border pull-right" href="#" data-remodal-target="modal-popup-subscribe" data-ripple-color="#fff">BECOME A DEALER</a>



                </div>

              </div>

            </div>

            <!-- car-list -->

            <div class="car-list">

              <div class="car-list__title">Tuning</div>

              <div class="car-list__body">
                
                 <?php 
                  $result = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
                  $result = json_decode($result);
                  $result = $result->data;
                  // $result = $wpdb->get_results('SELECT name, id FROM brand ORDER BY name ASC');
                  // var_dump($result);
                  $letter_array = array();
                  foreach ($result as $brand) {
                    $brand_name = $brand->title;
                    $brand_id = $brand->id;
                    $letter = mb_substr($brand_name, 0, 1);
                    $letter_array[$letter][$brand_id] = $brand_name;
                  }
                  $k=-1;
                  foreach ($letter_array as $letterkey => $brands) {
                    $k++;

                    if( ($k % 3) == 0 || $k == 0) {
                      echo '<div class="car-list__col"><div class="car-list__col-inner">';
                    }
                    echo '<ul>';
                    foreach ($brands as $brandId => $brandname) {
                      echo '<li><a class="brand-link" data-brand="'.$brandname.'" data-brand-id="'.$brandId.'" href="/shop/'.str_replace(' ', '_', strtolower($brandname)).'">'.$brandname.'</a></li>';
                    }
                    echo '</ul>';
                  if((($k+1) % 3) == 0) {
                    echo '</div></div>';
                  }
                  }
                ?>
                
              </div>

            </div>

            <!-- .car-list -->

            <!-- f-contacts -->

            <div class="f-contacts">

              <div class="f-contacts__title">Contact us</div>

              <div class="f-contacts__row">

                <div class="f-contacts__col hidden-xs">

                  <a class="btn btn-orange-border callback-btn" href="#" data-remodal-target="modal-popup-callback" data-ripple-color="#fff">Request Callback

                    <svg class="callback-btn__icon" role="img">

                      <title>mobile icon</title>

                      <use class="svg-i" xlink:href="#mobileIcon"/>

                    </svg>

                  </a>

                </div>

                <div class="f-contacts__col">1201 East 5th Street

                  <br>North Little Rock,

                  <br>Arkansas USA, 72114</div>

                <div class="f-contacts__col">

                  <div class="f-contacts__tel-link"><a href="javascript:void(0)"><?php global $mytheme; echo $mytheme['phone']; ?></a></div>

                  <p>USA and Canada

                    <br>Toll Free</p>

                </div>

                <div class="f-contacts__col"><a href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a></div>

                <div class="f-contacts__col visible-xs-inline-block">

                  <a class="btn btn-orange-border callback-btn" href="#" data-remodal-target="modal-popup-callback" data-ripple-color="#fff">Request Callback

                    <svg class="callback-btn__icon" role="img">

                      <title>mobile icon</title>

                      <use class="svg-i" xlink:href="#mobileIcon"/>

                    </svg>

                  </a>

                </div>

                <div class="f-contacts__col">

                  <div class="payments">

                    <div class="payments__row">

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_pal" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#paypalIcon" />

                        </svg>

                      </div>

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_usps" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#uspsIcon" />

                        </svg>

                      </div>

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_dhl" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#dhlIcon" />

                        </svg>

                      </div>

                    </div>

                    <div class="payments__row">

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_mc" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#mastercard" />

                        </svg>

                      </div>

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_aex" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#americanExpress" />

                        </svg>

                      </div>

                      <div class="payments__col">

                        <svg class="payments__icon payments__icon_img_visa" role="img">

                          <title>icon</title>

                          <use class="svg-i" xlink:href="#visa" />

                        </svg>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <!-- .f-contacts -->

          </div>

          <hr class="footer__hr">

          <div class="wrap">

            <div class="footer__rights">© Copyright 2016 - <?= date('Y'); ?> RSCHIP. All Rights Reserved.
              <span class="pull-right"><a href="/llc-rschip-privacy-policy" target="_blank">Privacy Policy</a></span>
              <span class="pull-right" style="
    margin-right: 10px;
"><a href="/rschip-chiptuning-app-privacy-policy" target="_blank">App privacy policy</a></span>
            </div>

          </div>
        <!-- widget for subscribe, decided to hide it -->
        <div class="hidden w-subscribe">

          <?= do_shortcode('[contact-form-7 id="129" title="subscribe_bottom" html_class="footer_pop_subscribe"]'); ?>

          <button class="w-subscribe__close" type="button">✖</button>

        </div>

        <!-- side widget -->

        <div class="side-widget side-widget_pos_fixed">

          <ul class="wow fadeInLeft side-widget__list" data-wow-delay="0.5s">

            <li class="side-widget__item">
              <a class="side-widget__link" href="#" data-remodal-target="modal-popup-moneyback">
              <div class="side-widget__item-icon">$</div>

              <div class="side-widget__item-title">30 Days

                <br> Money Back</div>
              </a>
            </li>

            <li class="side-widget__item">
              <a class="side-widget__link" href="#" data-remodal-target="modal-popup-lifetime">
              <div class="side-widget__item-icon">
                <svg role="img">
                  <title>Icon</title>
                  <use class="svg-i" xlink:href="#si-infinity"/>
                </svg>
              </div>
              <div class="side-widget__item-title">Lifetime <br>warranty</div>
            </a>
            </li>

            <li class="side-widget__item">
              <a class="side-widget__link" href="#" data-remodal-target="modal-popup-shipping">

              <svg class="side-widget__item-svg" role="img">

                <title>Icon</title>

                <use class="svg-i" xlink:href="#package" />

              </svg>

              <div class="side-widget__item-title">Free <br> shipping <br> worldwide</div>
              </a>
            </li>

            <li class="side-widget__item">

              <a class="side-widget__link" href="/contactus.html">

                <svg class="side-widget__item-svg side-widget__item-svg_img_bubble" role="img">

                  <title>Icon</title>

                  <use class="svg-i" xlink:href="#speech-bubble" />

                </svg><i class="side-widget__bubble-dots"></i>

                <div class="side-widget__item-title side-widget__item-title_font_bold">Contact us</div>

              </a>

            </li>

          </ul>

        </div>

        <!-- .side widget -->

        <!-- chat-widget -->
        <?php include 'partials/chat-widget.php'; ?>
        <!-- .chat-widget -->

      </footer>

    </div>



<?php }
else if ($post->ID == 218) { ?>
<footer class="footer footer_loc_catalog">
        <div class="footer__inner">
          <hr class="footer__hr">
          <div class="wrap">
            <div class="model-range">
            <?php 
          $brand = get_query_var('brand'); 

          //$model = get_query_var('model');
          ?>
           <?php if(strlen($brand) < 4) { $brand = strtoupper($brand); }?>
              <div class="section-title-1 model-range__heading">RSCHIP optimizes your <?= ucwords(str_replace('_',' ',$brand)); ?></div>
              <?php
              $result_model = $wpdb->get_results('SELECT model.name, model.brand_id FROM model INNER JOIN brand ON model.brand_id = brand.id AND brand.name LIKE "'.get_query_var('brand').'" '); 

              foreach ($result_model as $model) {
                
                  $modelname=$model->name;
                   $result_modif = $wpdb->get_results('SELECT modification.name, modification.model_id, modification.hp, modification.nm FROM modification INNER JOIN model ON modification.model_id = model.id AND model.name LIKE "'.$modelname.'" ');
if (count($result_modif) > 0 ) {
                    echo '<div class="model-range__title"><a href="/shop/'.strtolower($brand).'/'.strtolower(str_replace(" ","_", $modelname)).'">'.$modelname.'</div>';
                    echo '<ul class="model-range__list">';
                   foreach ($result_modif as $modification) {
                    $modif=$modification->name;
                    echo '<li class="model-range__item"><a href="/shop/'.strtolower($brand).'/'.strtolower(str_replace(" ","_", $modelname)).'/'.strtolower(str_replace(" ","_", $modif)).'">'.$modelname.' ('.$modif.')</a></li>';

                   }
                   echo '</ul>';
               }
              }
               ?>
              
         
            </div>
          </div>
          <hr class="footer__hr">
        </div>
      </footer>
      <?php

}
?>




    <?php wp_footer(); ?>

<!-- modals -->

<div class="remodal" data-remodal-id="modal-popup-subscribe"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="subscribePopup">

      <div class="popup__descr">BECOME A DEALER</div>

      <div class="popup__form-wrap">

    <?php echo do_shortcode('[contact-form-7 id="94" title="dealer"]'); ?>

      </div>

    </div>

</div>

<div class="remodal" data-remodal-id="modal-popup-moneyback"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="moneybackPopup">

      <div class="popup__form-wrap">

    If for any reason you aren't happy with your RSCHIP, just send it back. We'll refund the full purchase price. No questions asked.

      </div>

    </div>

</div>

<div class="remodal" data-remodal-id="modal-popup-lifetime"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="lifetimePopup">

      <div class="popup__form-wrap">

    If you experience any issues with one of our products at any time, let us know and we'll replace it with a new one for free.

      </div>

    </div>

</div>

<div class="remodal" data-remodal-id="modal-popup-shipping"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="shippingPopup">

      <div class="popup__form-wrap">

    Free shipping to any location with DHL or USPS.

      </div>

    </div>

</div>

<div class="remodal" data-remodal-id="modal-popup-callback"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="callbackPopup">

      <div class="popup__descr">Please fill in the fields below<br>and we will call you back.</div>

      <div class="popup__form-wrap">

    <?php echo do_shortcode('[contact-form-7 id="43" title="popup-callback"]'); ?>

      </div>

    </div>

</div>



<div class="remodal" data-remodal-id="modal-popup-feedback"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="feedbackPopup">

      <div class="popup__descr">Please fill in the fields below<br>and we will call you back.</div>

      <div class="popup__form-wrap">

    <?php echo do_shortcode('[contact-form-7 id="44" title="popup-feedback"]'); ?>

      </div>

    </div>

</div>



<div class="remodal" data-remodal-id="modal-popup-findCar"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup popup_width_wide" id="findCar">

      <div class="popup__descr">Please fill in the fields below<br>and we will call you back.</div>

      <div class="popup__form-wrap">

    <?php echo do_shortcode('[contact-form-7 id="45" title="popup-find-car"]'); ?>

      </div>

    </div>

</div>



<div class="remodal" data-remodal-id="modal-popup-preorder"><button data-remodal-action="close" class="remodal-close"></button>

    <div class="white-popup-block popup" id="preorderPopup">

      <div class="popup__descr">Please fill in the fields below<br>and we will call you back.</div>

      <div class="popup__form-wrap">

    <?php echo do_shortcode('[contact-form-7 id="46" title="popup-preorder"]'); ?>

      </div>

    </div>

</div>

<script>
  jQuery(document).ready(function(){
    $('.page-popup .product__price').find('span').html('999')
  });
</script>

<!-- ======= -->

  </body>

</html>