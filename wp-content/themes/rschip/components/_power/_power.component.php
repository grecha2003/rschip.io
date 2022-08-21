<?php
$powerACF = get_field('_power');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($powerACF)) :
?>
    <?php if ($powerACF["isShow"]) : ?>
        <section class="power">
            <div class="wrapper">
                <div class="powerRowFlex">
                    <div class="powerContainer">
                        <div class="powerText">
                            <h2 class="page__title-h2_small">Mobile App</h2>
                            <h3 class="page__title-h3">More power or fuel saving right from your smartphone</h3>
                            <div class="powerTextItems">
                                <div class="powerTextItem">
                                    <div class="powerTextItem__Perfomance">Perfomance <div>
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="powerTextItem__FuelSaving">Fuel saving<div><span></span></div>
                                    </div>
                                </div>
                                <div class="powerTextItem">
                                    <div class="powerTextItem__Perfomance">Perfomance <div><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="powerTextItem__FuelSaving">Fuel saving<div><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="powerTextItem">
                                    <div class="powerTextItem__Perfomance">Perfomance <div><span></span></div>
                                    </div>
                                    <div class="powerTextItem__FuelSaving">Fuel saving<div>
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="powerImg">
                            <picture>
                                <source type="image/png" srcset="assets/images/png/chip/imgPowerBlockChip-lg.png" media="(min-width: 992px)">
                                <source type="image/png" srcset="assets/images/png/chip/imgPowerBlockChip-sm.png" media="(min-width: 768px)">
                                <img src="assets/images/png/chip/imgPowerBlockChip-xs.png" alt="imgPowerBlockChip">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>