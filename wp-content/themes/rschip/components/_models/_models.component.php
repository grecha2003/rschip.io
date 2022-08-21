<?php

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

$res = file_get_contents('http://tuning34.ru/api/v1/catalog/models/?brand=' . $brand_id);
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
<?php if (strlen($brand) >= 2) {
  $brand = strtoupper($brand);
} ?>

<?php
$modelsACF = get_field('_models');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($modelsACF)) :
?>
    <?php if ($modelsACF["isShow"]) : ?>
        
<div class="catalog">
  <div class="wrapper">
    <?php
    $res = file_get_contents('http://tuning34.ru/api/v1/catalog/modifications/?model=' . $model_id);
    $result = json_decode($res);
    $result = $result->data;

    // $result = $wpdb->get_results('SELECT modification.name, modification.model_id, modification.hp, modification.nm FROM modification INNER JOIN model ON modification.model_id = model.id AND model.name LIKE "'.$model.'" ');
    if (count($result) == 0) {
      header("HTTP/1.0 404 Not Found");
      header("HTTP/1.1 404 Not Found");
      header("Status: 404 Not Found");
      header('Location: http://rschipus.com/404');

      die();
    }
    echo '<ul class="catalog__list ' . $model_id . '---' . count($result) . '">';
    foreach ($result as $modification) {
      // break;


      echo '<li class="catalog__list-item"><a class="catalog__list-link modi-link" 
              data-hp="' . $modification->hp . '" data-nm="' . $modification->nm . '" 
              data-modi="' . $modification->title . '" data-modi-id="' . $modification->model . '"  
              title="' . ucwords(str_replace("_", " ", $brand)) . ' ' . ucwords(str_replace("_", " ", $model)) . ' ' . ucwords(str_replace("_", " ", $modification->title)) . '" 
              href="/shop/' . strtolower(str_replace(' ', '_', $brand)) . '/' . strtolower(str_replace(" ", "_", $model)) . '/' . strtolower(str_replace(" ", "_", $modification->title)) . '">' . ucwords(str_replace('_', ' ', $brand)) . ' ' . ucwords(str_replace('_', ' ', $model)) . ' ' . $modification->title . '</a></li>';
    }
    echo '</ul>';
    ?>

  </div>
</div>
<?php endif; ?>

<?php endif; ?>