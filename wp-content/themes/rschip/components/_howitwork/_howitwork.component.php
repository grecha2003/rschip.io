<?php
$productRsSafestACF = get_field('_howitwork');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productRsSafestACF)) :
?>
    <?php if ($productRsSafestACF["isShow"]) : ?>
        <section class="howitwork">
            <div class="wrapper">
                <div class="howitworkRowFlex">
                    <div class="howitworkContainer">
                        <h2 class="page__titel-h2">How does it <span class="page_red">work?</span></h2>
                        <div class="howitworkImg">
                            <picture>
                                <source type="image/png" srcset="assets/images/png/rs/imgHowitwork-lg.png"
                                    media="(min-width: 992px)">
                                <source type="image/png" srcset="assets/images/png/rs/imgHowitwork-sm.png"
                                    media="(min-width: 768px)"><img src="assets/images/png/rs/imgHowitwork-xs.png"
                                    alt="imgProductRsControls">
                            </picture>
                        </div>
                        <div class="howitworkText">
                            <p>Unplug the wire from the throttle at the connector. </p>
                            <p>Insert the supplied wiring harness (adapter) between the throttle pedal and the original
                                plug connection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>