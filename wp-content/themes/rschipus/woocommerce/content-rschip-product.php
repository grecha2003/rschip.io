<style>
  .quantity {
    display: none;
  }
  .dark-section {
    margin: 0;
    padding-top: 30px;
  }
  .section-descr {
    font-size: 15px;
    text-align: center;
        margin-top: -20px;
    padding: 0px 0px 0px 15px;
  }
  .img-chip {
    text-align: center;
  }
  .price-chip {
        text-align: right;
    padding: 3px;
    font-size: 22px;
  }
  .chip222 {
      margin-top: 0px;
    }
  .text-chip2 {
    font-size: 18px;
    padding-top: 80px;
        line-height: 2em;
  }
  .price-chip2 {
    margin-top: 120px;
  }




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
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
        margin-bottom: -80px;
  }
  .s-text {
    line-height: 2em;    
    padding-bottom: 60px;
        margin-top: -340px!important;
  }
  .btn-ttt {
    margin: 0;
  }
  .select-your-car {
      margin-top: 4px;
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
      padding-top: 90px;
      text-align: justify;
      font-size: 14px;
      margin-top: 0px!important;
    }

    .section-descr {
      margin-top: 20px;
    }
    .price-chip {
      text-align: center;
          margin-top: 7px;
    }
    .btn-ttt {
      margin-top: 10px;
    }
    .text-chip2 {
      font-size: 15px;
      padding-top: 30px;
    }
    .price-chip2 {
      margin-top: 30px;
    }
    .chip222 {
      margin-top: -5px;
    }
  }

  .top-block__text_2 {
      font-weight: 600;
      margin: 30px 0 0;
  }
</style>
<?php $mytheme = get_option('theme_admin'); ?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php //post_class(); ?>>
<?php 
// $ip = file_get_contents('http://ip-api.com/json/'.$_SERVER['REMOTE_ADDR']);
// $ip = json_decode($ip, true);
// $country = $ip['country'];

// if ($country != 'Russia') {
  ?>
    <div class="section dark-section">
    <div class="wrap">
      <h2 class="section-title-1 dark-section__title" id="how-work">PERFORMANCE <b>REINVENTED</b></h2>
      <div class="section-descr">
        <div class="col-md-4">
          UP TO 30HP MORE POWER
        </div>
        <div class="col-md-4">
          UP TO 40HP MORE TORQUE
        </div>
        <div class="col-md-4">
          UNLIMITTED TUNINGS
        </div>
        <div class="row img-chip">
          <img src="<?php echo get_template_directory_uri(); ?>/images/media/monte-3-4.3284.png" width="100%">
        </div>
        <div class="row">
          <?php $product = wc_get_product(16); ?>
          <div class="col-md-3 col-xs-1"></div>
          <div class="col-md-6 col-xs-10">
              <div class="col-md-6 col-xs-6 price-chip">
                <?= get_woocommerce_currency_symbol(get_option('woocommerce_currency')).'<b>'.$product->get_price() . '</b>'; ?>
              </div>
              <div class="col-md-6 col-xs-6">
                <a class="btn btn-orange-border btn-md product__btn btn-ttt" style="    " href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop Now</a>
              </div>
          </div>
          <div class="col-md-3 col-xs-1"></div>
            
        </div>
      </div>
    </div>
  </div><!-- .dark-section -->
  <div class="gradient-bg section product product_type_rschip">
    <div class="wrap rel">
      <h2 class="section-title-1">INTRODUCING <b>NEW RSCHIP PLUS. <br> BETTER</b> IN EVERY WAY</h2>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/images/media/Rschip_000.png" width="100%">
            </div>
            <div class="col-md-6 col-xs-12 text-chip2">
                UP TO +30HP AND +40 MORE NM OF TORQUE <br>
                NEW POWERFUL TUNING ALGORYTHM AND HARDWARE <br>
                UNLIMITED TUNINGS AND REPROGRAMMINGS <br>
                3 DRIVING MODES AND FINE-TUNING <br>
                SIMPLE PLUG&PLAY INSTALLATION <br>
                DOES NOT VOID CAR'S WARRANTY <br>
                APP CONTROLLABLE AND ADJUSTABLE

                <div class="price-chip2">
                  <div class="col-md-3 col-xs-6 price-chip chip222">
                    <?= get_woocommerce_currency_symbol(get_option('woocommerce_currency')).'<b>'.$product->get_price() . '</b>'; ?>
                  </div>
                  <div class="col-md-9 col-xs-6">
                    <a class="btn btn-orange-border btn-md product__btn" style="    margin: 0;" href="<?= get_the_permalink(27);?>" data-ripple-color="#fff">Shop Now</a>
                  </div>
                </div>
            </div>
          </div>
    </div>
  </div><!-- .product-->
  
  <div class="row dark-section" style="padding-bottom: 10px">

    <div class="col-sm-6 col-xs-12">
      <p class="p_text_app">DOWNLOAD NEW RSCHIP PLUS APP ON APPLE STORE OR GOOGLE PLAY</p>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="app__btns">
        <a class="app__btn has-ripple" href="https://apps.apple.com/us/app/rschip-plus/id1482772220?l=ru&ls=1" data-ripple-color="#fff" target="_blank"><div class="ripple"></div>App store
          <img src="https://rschipchiptuning.com/wp-content/themes/rschipus/images/png/app-store.svg" alt="Download on the App Store">
        </a>
        <a class="app__btn has-ripple" href="https://play.google.com/store/apps/details?id=ru.tachos.rschipplus" data-ripple-color="#fff" target="_blank"><div class="ripple"></div>Google play
          <img src="https://rschipchiptuning.com/wp-content/themes/rschipus/images/png/googleplay.svg" alt="Get it on Google Play">
        </a>
      </div>
    </div>
  </div>
