<?php

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
  // header("HTTP/1.1 301 Moved Permanently");
  // header('Location: https://rschipchiptuning.com/404');

  exit;
} ?>
<?php
$brandsACF = get_field('_brands');

echo '<pre>';
// var_dump($brandsACF);
echo '</pre>';
if (!empty($brandsACF)) :
?>
    <?php if ($brandsACF["isShow"]) : ?>
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
    <?php endif; ?>
<?php endif; ?>