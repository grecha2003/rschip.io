<?php
/**
 * Template Name: Model page
 *
 *
 */

get_header();
          $brand = str_replace('_', ' ', get_query_var('brand'));
          $model = str_replace('_', ' ', get_query_var('model'));

          // $result = $wpdb->get_results('SELECT id, name FROM model WHERE name LIKE "'.str_replace('_',' ',$model).'" ');
          // $model = $result[0]->name;
          $result = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
          $result = json_decode($result);
          $result = $result->data;
          foreach ($result as $brands) {
              if (strtolower($brands->title) == strtolower($brand)) {
                  $brand_id = $brands->id;
                  break;
              }
          }

          $res = file_get_contents('http://tuning34.ru/api/v1/catalog/models/?brand='.$brand_id);
          $result = json_decode($res);
          $result = $result->data;
          foreach ($result as $brands) {
            // echo "xxxxxxx";
            //     var_dump($brands);
              if (strtolower($brands->title) == strtolower($model)) {
                  $model = $brands->title;
                  $model_id = $brands->id;
                  break;
              }
          }


?>
 <?php if(strlen($brand) >= 2) { $brand = strtoupper($brand); }?>
<div class="wrap">

          <h1 class="section-title-1 catalog-title">RSCHIP Chiptuning for almost<br class="hidden-xs"> all <?= ucwords(str_replace('_',' ',$brand)) ?> <?= $model; ?> modifications</h1>
        </div>
        <div class="catalog">
          <div class="img-section catalog__img-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/media/catalog-img.jpg')"></div>

        </div>
        <div class="section products">
          <div class="wrap">
            <div class="tabby-control products__tabs hidden">
              <div class="products__tab" data-tabby="1"><span>Rschip</span></div>
              <div class="products__tab" data-tabby="2"><span>Rseco</span></div>
            </div>
            <ul class="tabby-switcher products__list">
              <li class="col-sm-3 products__item"></li>
              <li class="col-sm-6 products__item" data-tabby="1">
                <!-- <div class="product-rschipg">
                  <h3 class="b-product__heading">Power or fuel economy <br>at the touch of the button</h3>
                  <div class="row">
                    <div class="col-xs-4 col-sm-5">
                      <h2 class="b-product__title">RSCHIP</h2>
                    </div>
                    <div class="col-xs-8 col-sm-7"><a class="visible-xs b-product__link" href="/product/rschip.html">Details</a><img class="b-product__img" src="<?php echo get_template_directory_uri(); ?>/images/media/rschip-w-phone.png" alt=""></div>
                  </div>
                  <div class="b-product__footer"><a class="hidden-xs b-product__link" href="/product/rschip.html">Details</a></div>
                </div> -->
                
                <img class="img-center-product" src="<?php echo get_template_directory_uri(); ?>/images/media/rschip-w-phone.png" alt="">
                <a class="visible-xs b-product__link" href="/product/rschip.html">Details</a>

              </li>
              <li class="col-sm-3 products__item"></li>
<!--               <li class="col-sm-6 products__item" data-tabby="2">
                <div class="product-rseco b-product gradient-bg">
                  <h3 class="b-product__heading">Improve fuel mileage <br>and save money</h3>
                  <div class="row">
                    <div class="col-xs-4 col-sm-5">
                      <h2 class="b-product__title">RSECO</h2>
                    </div>
                    <div class="col-xs-8 col-sm-7"><a class="visible-xs b-product__link" href="/product/rseco.html">Details</a><img class="b-product__img" src="<?php //echo get_template_directory_uri(); ?>/images/media/rseco-small.png" alt=""></div>
                  </div>
                  <div class="b-product__footer"><a class="hidden-xs b-product__link" href="/product/rseco.html">Details</a></div>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="catalog">
          <div class="wrap">
          <?php 
            $res = file_get_contents('http://tuning34.ru/api/v1/catalog/modifications/?model='.$model_id);
            $result = json_decode($res);
            $result = $result->data;

            // $result = $wpdb->get_results('SELECT modification.name, modification.model_id, modification.hp, modification.nm FROM modification INNER JOIN model ON modification.model_id = model.id AND model.name LIKE "'.$model.'" ');
            if (count($result) == 0 ) {
              header("HTTP/1.0 404 Not Found");
              header("HTTP/1.1 404 Not Found");
              header("Status: 404 Not Found");
              header('Location: http://rschipus.com/404');

              die();
            }
            echo '<ul class="catalog__list '.$model_id.'---'.count($result).'">';
            foreach ($result as $modification){
              // break;
              
              
              echo '<li class="catalog__list-item"><a class="catalog__list-link modi-link" 
              data-hp="'.$modification->hp.'" data-nm="'.$modification->nm.'" 
              data-modi="'.$modification->title.'" data-modi-id="'.$modification->model.'"  
              title="'.ucwords(str_replace("_"," ", $brand)).' '.ucwords(str_replace("_"," ", $model)).' '.ucwords(str_replace("_"," ", $modification->title)).'" 
              href="/shop/'.strtolower(str_replace(' ', '_', $brand)).'/'.strtolower(str_replace(" ","_", $model)).'/'.strtolower(str_replace(" ","_", $modification->title)).'">'.ucwords(str_replace('_',' ',$brand)).' '.ucwords(str_replace('_',' ',$model)).' '.$modification->title.'</a></li>';

            }
            echo '</ul>';
          ?>
            
          </div>
        </div>
        <div class="advantages hidden">
          <div class="wrap">
            <div class="row advantages__list">
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#gearIcon"/>
                  </svg>
                  <div class="advantages__item-title">Up to +20%<br>more<sup>1</sup> power</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.2s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#chartIcon"/>
                  </svg>
                  <div class="advantages__item-title">Dyno<br>proven</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.4s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#acppIcon"/>
                  </svg>
                  <div class="advantages__item-title">Faster AT<br>gear shifting</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.6s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#plugIcon"/>
                  </svg>
                  <div class="advantages__item-title">OBD-II Plug&Play <br>installation</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="catalog">
          <div class="wrap text-center">
            <h1 class="section-title-1 catalog__text-title">Which <?= ucwords(str_replace('_',' ',$brand)) ?> <?= ucwords(str_replace('_',' ',$model)) ?><br>would you like to optimize?</h1>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="catalog__text-1">Check out the power your <?= ucwords(str_replace('_',' ',$brand)) ?> <?= ucwords(str_replace('_',' ',$model)) ?> could produce.</div>
                <div class="catalog__text-2">Your <?= ucwords(str_replace('_',' ',$brand)) ?> <?= ucwords(str_replace('_',' ',$model)) ?> can perform much better than you think.<br>Enjoy more power & torque and an all new driving experience.<br>You will love it. Untap your car’s true performance potential.</div>
                 <div class="catalog__car-selects">
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
     
    		 <div class="col-sm-4 col-sm-offset-4">
                      <button class="btn btn-orange btn-md catalog__btn-select" data-ripple-color="#fff">Select</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="advantages hidden">
          <div class="wrap">
            <div class="row advantages__list">
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#deliveryIcon"/>
                  </svg>
                  <div class="advantages__item-title">Free delivery<br>for US & Canada</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.2s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#2yIcon"/>
                  </svg>
                  <div class="advantages__item-title">Years<br>Warranty</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.4s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#moneyIcon"/>
                  </svg>
                  <div class="advantages__item-title">30 Days<br>Money Back </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 wow fadeInLeft advantages__item" data-wow-duration="0.5s" data-wow-offset="100" data-wow-delay="0.6s">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#usaIcon"/>
                  </svg>
                  <div class="advantages__item-title">Made<br>in the USA</div>
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
              <div class="b-contacts__icons"><a class="b-contacts__icons-item" data-remodal-target="modal-popup-callback">
                  <svg class="b-contacts__icons-img b-contacts__icons-img_mod_cyrcled" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#telIcon"/>
                  </svg><span class="b-contacts__icons-text">Call us</span></a><a class="b-contacts__icons-item" data-remodal-target="modal-popup-feedback">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#mailIcon2"/>
                  </svg><span class="b-contacts__icons-text">Email us</span></a><a class="b-contacts__icons-item" href="https://www.facebook.com/rschipchiptuningusa" target="_blank">
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
<?php get_footer(); ?>