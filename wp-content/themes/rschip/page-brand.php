<?php

/**
 * Template Name: Brand page
 *
 *
 */
get_header();

$backgrounds = [
  'ISUZU' => 'ISUZU',
  'CHEVROLET' => 'CHEVROLET',
  'AUDI' => 'AUDI',
  'LAMBORGHINI' => 'LAMBORGHINI',
  'BMW' => 'BMW',
  'KIA' => 'KIA',
  'JEEP' => 'JEEP',
  'BENTLEY' => 'BENTLEY',
  'LEXUS' => 'LEXUS',
  'DODGE' => 'DODGE',
  'GMC' => 'GMC',
  'BMW' => 'BMW',
];

$result = [];

$brand = str_replace('_', ' ', get_query_var('brand'));

if (strlen($brand) >= 2) {
  $brand = strtoupper($brand);
} else {
  $brand = '';
}

$brands = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
$brands = json_decode($brands);
$brands = $brands->data;

if (!empty($brand)) {
  foreach ($brands as $brand_) {
    if (strtolower($brand_->title) == strtolower($brand)) {
      $brand_id = $brand_->id;
    }
  }

  if (!empty($brand_id)) {
    $res = file_get_contents('http://tuning34.ru/api/v1/catalog/models/?brand=' . $brand_id);
    $result = json_decode($res);
    $result = $result->data;
  }
}

// $result = $wpdb->get_results('SELECT model.name, model.brand_id FROM model INNER JOIN brand ON model.brand_id = brand.id AND brand.name LIKE "'.get_query_var('brand').'" '); 
if (count($result) == 0) {
  // header("HTTP/1.0 404 Not Found");
  // header("HTTP/1.1 404 Not Found");
  // header("Status: 404 Not Found");
  header("HTTP/1.1 301 Moved Permanently");
  header('Location: https://rschipchiptuning.com/404');

  exit;
} ?>
<?php
$product1 = wc_get_product(16);
$product2 = wc_get_product(48);
?>
<main class="page">
  <!-- <div class="h-offset top-block">

    <div class="top-block__slider">

      <div class="responsive-img top-block__slide"><img alt="" data-lazy="<?php echo get_template_directory_uri(); ?>/images/backgrounds/<?= (!empty($backgrounds[$brand])) ? $backgrounds[$brand] : 'main1'; ?>.jpg" data-object-fit="cover">
        <div class="wrap top-block__inner">
          <h2 class="wow fadeInDown top-block__text top-block__text_2">
            <span>Up to </span>
            <b>20%</b>
            <br><b>more power</b>
            <br>for your car
          </h2>
        </div>
      </div>


    </div>

  </div> -->
  <?php include(TEMPLATEPATH . '/components/banner/bannerMain.component.php'); ?>
  <?php include(TEMPLATEPATH . '/components/products/products.component.php'); ?>

  <div class="wrapper">
    <div class="footnote footnote_loc_index catalog">
      <?php echo '<ul class="catalog__list">';
      foreach ($result as $model) {

        echo '<li class="catalog__list-item"><a class="catalog__list-link model-link" data-model="' . $model->title . '" data-model-id="' . $model->brand . '" href="/shop/' . strtolower(str_replace(' ', '_', $brand)) . '/' . strtolower(str_replace(" ", "_", $model->title)) . '">' . $model->title . '</a></li>';
      }
      echo '</ul>';
      ?>
    </div>
  </div>
</main>

<?php /*
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
              <div class="goods__item-img"><img src="<?php echo get_template_directory_uri(); ?>/images/media/monte-3-4.3283_2.png" alt="RSCHIP">
              </div>
            </div>
            <div class="col-xs-5 col-sm-4">
              <div class="goods__item-adv">more
                <br class="hidden-xs">power and torque<sup>1</sup>
              </div>
              <div class="goods__item-adv"> better
                <br class="hidden-xs">fuel saving
              </div>
              <div class="goods__item-adv">Free IOS
                <br class="hidden-xs">and Android app
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-xs-7 col-sm-6"><a class="goods__item-more" href="<?= get_the_permalink($product1->id); ?>">More about RSCHIP</a> -->
          </div>
          <div class="col-xs-5 col-sm-6"><a class="btn btn-lg btn-orange-border goods__item-btn" href="<?= get_the_permalink(27); ?>" data-ripple-color="#fff">Shop now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="section app">
  <div class="wrap">
    <h2 class="text-center app__title">Introducing <b>RSCHIP app</b></h2>
    <div class="row app__row">
      <div class="col-sm-6">
        <div class="clearfix app__phones">
          <img class="wow fadeIn app__phones-img" src="<?php echo get_template_directory_uri(); ?>/images/media/Rschip_000.png" alt="" title="" data-wow-offset="200">
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
            <a class="app__btn" href="https://apps.apple.com/us/app/rschip-plus/id1482772220?l=ru&ls=1" data-ripple-color="#fff" target="_blank">App store
              <img src="<?php echo get_template_directory_uri(); ?>/images/png/app-store.svg" alt="Download on the App Store">
            </a>
            <a class="app__btn" href="https://play.google.com/store/apps/details?id=ru.tachos.rschipplus" data-ripple-color="#fff" target="_blank">Google play
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
</div> -->

<!-- <div class="section compatible">
  <div class="wrap compatible__inner">
    <div class="compatible__text">
      We support <b>over 5000</b>
      <br>different makes and models.
      <br>Buy once and use on any vehicle
      <br>available on our database
    </div>
    <a class="btn btn-lg btn-orange compatible__btn" href="<?= get_the_permalink(27); ?>">
      Select your CHIP
    </a>
  </div>
</div> -->
*/?>




<?php get_footer(); ?>