<?php
$productRsSafestACF = get_field('_product_rs_safest');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productRsSafestACF)) :
?>
    <?php if ($productRsSafestACF["isShow"]) : ?>
        <section class="productRsSafest">
            <div class="wrapper">
                <div class="productRsSafestRowFlex">
                    <div class="productRsSafestImg">
                        <picture>
                            <source type="image/png" srcset="assets/images/png/rs/imgProductRsSafest-lg.png"
                                media="(min-width: 992px)">
                            <source type="image/png" srcset="assets/images/png/rs/imgProductRsSafest-md.png"
                                media="(min-width: 768px)"><img src="assets/images/png/rs/imgProductRsSafest-xs.png"
                                alt="imgProductRsControls">
                        </picture>
                    </div>
                    <div class="productRsSafestText">
                        <h4 class="page__title-h4">The safest throttle tuning <span class="page_red"> in the
                                market</span></h4>
                        <p class="page__text">The most important feature for your safety. Our engineers have developed
                            an ingenious control mechanism, the logic of which ensures mutual control of both
                            processors. This reduces the risk of default by 1.000 times.</p>
                        <div class="productRsSafestIcons">
                            <div class="productRsSafestIconsItem">
                                <div class="svg-iconChipWhite svg-iconChipWhite-box"></div>
                                <div class="productRsSafestIconsText">Buck up CPU</div>
                            </div>
                            <div class="productRsSafestIconsItem">
                                <div class="svg-iconPatent svg-iconPatent-box"></div>
                                <div class="productRsSafestIconsText">Patented system</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>