<?php
$mapACF = get_field('_map');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($mapACF)) :
?>
    <?php if ($mapACF["isShow"]) : ?>
        <section class="map"> 
            <img src="assets/images/png/shared/imgContactMap.png" alt="imgContactMap">
        </section>
    <?php endif; ?>
<?php endif; ?>