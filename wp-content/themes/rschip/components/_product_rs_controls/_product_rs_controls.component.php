<?php
$productRsControlsACF = get_field('_product_rs_controls');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productRsControlsACF)) :
?>
    <?php if ($productRsControlsACF["isShow"]) : ?>

        <section class="productRsControls">
            <div class="wrapper">
                <div class="productRsControlsRowFlex">
                    <div class="productRsControlsContainer">
                        <div class="productRsControlsTitle">
                            <h4 class="page__title-h4"> <span class="page_red">Control your driving </span>dynamic on the go</h4>
                        </div>
                        <div class="productRsControlsImg productRsControlsImgGallary">
                        <?php /*<div class="swiper-wrapper">
                               
                                if ($productRsControlsACF['slides']) :
                                    foreach ($productRsControlsACF['slides'] as $slide) : ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $slide->guid ?>" alt="imgProductRsControls">
                                        </div>
                                <?php endforeach;
                                endif; 
                              
                            </div>  */?>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="assets/images/png/products/imgProductRsControls-lg.png"
                                    alt="imgProductRsControls"></div>
                                <div class="swiper-slide"><img src="assets/images/png/products/imgProductRsControls-lg.png"
                                    alt="imgProductRsControls"></div>
                                <div class="swiper-slide"><img src="assets/images/png/products/imgProductRsControls-lg.png"
                                    alt="imgProductRsControls"></div>
                                <div class="swiper-slide"><img src="assets/images/png/products/imgProductRsControls-lg.png"
                                    alt="imgProductRsControls"></div>
                                <div class="swiper-slide"><img src="assets/images/png/products/imgProductRsControls-lg.png"
                                    alt="imgProductRsControls"></div>
                            </div>
                        </div>
                        <div class="productRsControlsToggles productRsControlsImgGallary-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide productRsControlsToggelsItem page_bgRed">Sport plus</div>
                                <div class="swiper-slide productRsControlsToggelsItem page_bgYellow">Sport</div>
                                <div class="swiper-slide productRsControlsToggelsItem page_bgGray">Factory</div>
                                <div class="swiper-slide productRsControlsToggelsItem page_bgBlue">Eco</div>
                                <div class="swiper-slide productRsControlsToggelsItem page_bgGreen">Eco plus</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>