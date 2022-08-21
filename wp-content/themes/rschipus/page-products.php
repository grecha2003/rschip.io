<?php
/**
 * Template Name: Products page
 *
 * 
 */
get_header();
?>
<?php $product1 = wc_get_product(16);
// var_dump($product1);exit;
$product2 = wc_get_product(48);
?>
<div class="section products">
  <div class="wrap">
    <h1 class="section-title-1 products__title">PERFORMANCE TUNING</h1>
    <ul class="products__list">
      <li class="col-sm-6 col-sm-offset-3 products__item">
        <div class="gradient-bg product-rschip b-product">
          <h3 class="b-product__heading">Power or fuel economy <br>at the touch of the button</h3>
          <div class="row">
            <div class="col-xs-7 col-sm-push-5">
              <!-- rschip-w-phone.png -->
              <img class="b-product__img" style="    margin-top: 90px; margin-left: -50px;" src="<?php echo get_template_directory_uri(); ?>/images/media/Rschip_000.png" alt="">
            </div>
            <div class="col-xs-5 col-sm-pull-7">
              <h2 class="b-product__title"><?= str_replace('RS', '<span>RS</span>', $product1->post->post_title); ?></h2>
              <div class="hidden-xs b-product__price">$<?= $product1->get_price('view'); ?></div>
              <div class="b-product__advantages">
                <p>+20% power<sup>1</sup></p>
                <p>+20% torque<sup>1</sup></p>
                <p>+15% MPG<sup>1</sup></p>
                <!-- <p>Smartphone-<br>controlled<sup>2</sup> (optional)</p> -->
               
                <p>Unlimitted  <br>tune Files</p>
                <p>Lifetime warranty</p>
              </div>
            </div>
          </div>
          <div class="b-product__footer">
            <div class="row">
              <div class="col-xs-3 col-sm-6 col-sm-push-6"><a class="b-product__link" href="<?= get_the_permalink($product1->id);?>">Details</a></div>
              <div class="visible-xs col-xs-4 text-right">
                <div class="b-product__price">$<?= $product1->get_price('view'); ?></div>
              </div>
              <div class="col-xs-5 col-sm-6 col-sm-pull-6"><a class="btn btn-orange-border btn-md b-product__btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop now</a></div>
            </div>
        </div>
      </li>
      <!-- <li class="col-sm-6 products__item">
        <div class="gradient-bg product-rseco b-product">
          <h3 class="b-product__heading">Improve fuel mileage <br>and save money</h3>
          <div class="row">
            <div class="col-xs-7 col-sm-push-5">
              <img class="b-product__img" src="<?php echo get_template_directory_uri(); ?>/images/media/rseco-small.png" alt="">
            </div>
            <div class="col-xs-5 col-sm-pull-7">
              <h2 class="b-product__title"><?= str_replace('RS', '<span>RS</span>', $product2->post->post_title); ?></h2>
              <div class="hidden-xs b-product__price"><span class="woocommerce-Price-currencySymbol">$</span><?= $product2->get_price('view'); ?></div>
              <div class="b-product__advantages">
                <p>+15% MPG<sup>1</sup></p>
                <p>1 tune File</p>
                <p>2 years warranty</p>
              </div>
            </div>
          </div>
          <div class="b-product__footer">
            <div class="row">
              <div class="col-xs-3 col-sm-6 col-sm-push-6"><a class="b-product__link" href="<?= get_the_permalink($product2->id);?>">Details</a></div>
              <div class="visible-xs col-xs-4 text-right">
                <div class="b-product__price">$<?= $product2->get_price('view'); ?></div>
              </div>
              <div class="col-xs-5 col-sm-6 col-sm-pull-6"><a class="btn btn-orange-border btn-md b-product__btn" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop now</a></div>
            </div>
        </div>
      </li> -->
    </ul>
  </div>
  <div class="hidden-xs advantages">
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
            <div class="advantages__item-title">Made<br>in the usa</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="questions">
  <div class="img-section questions__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/media/women.jpg')"></div>
  <div class="wrap">
    <h2 class="questions__title">Still have questions?</h2>
    <div class="b-contacts">
      <div class="b-contacts__icons">
        <a class="b-contacts__icons-item" data-remodal-target="modal-popup-callback">
          <svg class="b-contacts__icons-img b-contacts__icons-img_mod_cyrcled" role="img">
            <title>Icon</title>
            <use class="svg-i" xlink:href="#telIcon"/>
          </svg>
          <span class="b-contacts__icons-text">Call us</span>
        </a>
        <a class="b-contacts__icons-item" data-remodal-target="modal-popup-feedback">
          <svg class="b-contacts__icons-img" role="img">
            <title>Icon</title>
            <use class="svg-i" xlink:href="#mailIcon2"/>
          </svg>
          <span class="b-contacts__icons-text">Email us</span>
        </a>
        <a class="b-contacts__icons-item" href="https://www.facebook.com/rschipchiptuningusa" target="_blank">
          <svg class="b-contacts__icons-img" role="img">
            <title>Icon</title>
            <use class="svg-i" xlink:href="#fbIcon"/>
          </svg>
          <span class="b-contacts__icons-text">Find us on <br>facebook</span>
        </a>
      </div>
      <div class="b-contacts__links">
        <p><a href="tel:+<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a></p>
        <p><a href="mailto:support@rschipus.com">support@rschipus.com</a></p>
      </div>
    </div>
  </div>
</div>
<div class="wrap">
  <div class="footnote">
    <p><sup>1</sup>Real-world gains may be less or more depending on a large number of contributing factors.</p>
    <p><sup>2</sup>Smartphone App is compatible only with RSCHIP. Not available for RSECO</p>
  </div>
</div>
<?php


get_footer();