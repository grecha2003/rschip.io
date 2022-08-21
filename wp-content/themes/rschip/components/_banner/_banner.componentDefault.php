<?php
$bannerACF = get_field('_banner');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($bannerACF)) :

?>
    <?php if ($bannerACF["isShow"]) : ?>
        
        <section class="banner">
            <div class="wrapper">
                <div class="bannerFlexContainer">
                    <div class="bannerText">
                        <h1 class="page__title-h1_big">POWER</h1>
                        <h1 class="page__title-h1"><span class="page_red">More power </span>for <span class="block">your
                                car with RSCHIP </span></h1>
                        <p class="pageText">Increase power, save fuel, create dyno charts, Measure acceleration and more
                        </p>
                        <?php include(TEMPLATEPATH . '/components/social/socialIcons.component.php'); ?>

                    </div>
                    <div class="bannerImgBg">
                        <picture>
                            <source type="image/png" srcset="assets/images/png/main/imgBannerBg_1920.png"
                                media="(min-width: 1441px)">
                            <source type="image/png" srcset="assets/images/png/main/imgBannerBg_1440.png"
                                media="(min-width: 1440px)">
                            <source type="image/png" srcset="assets/images/png/main/imgBannerBg_992.png"
                                media="(min-width: 992px)">
                            <source type="image/png" srcset="assets/images/png/main/imgBannerBg_768.png"
                                media="(min-width: 768px)"><img src="assets/images/png/main/imgBannerBg_320.png"
                                alt="imgBannerBg">
                        </picture>
                    </div>
                    <div class="bannerSelect">
                        <?php include(TEMPLATEPATH . '/components/selectBox/selectBox.component.php'); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>