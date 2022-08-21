<?php
$appBlockACF = get_field('_app_block');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($appBlockACF)) :
?>
    <?php if ($appBlockACF["isShow"]) : ?>
        <section class="appBlock">
            <div class="wrapper">
                <div class="appBlockRowFlex">
                    <div class="appBlockContainer">
                        <div class="appBlockText">
                            <h2 class="page__title-h2_small">App</h2>
                            <h3 class="page__title-h3">Your pocket-sized <span class="page_red">dyno machine</span></h3>
                            <div class="appBlockDescription">With GTR on-board dyno you can measure your real engine
                                horsepower and torque within 2% by performing a simple acceleration with your car.</div>
                            <div class="appBlockIcons">
                                <div class="appBlockIconsItem">
                                    <div class="appBlockIcon">
                                        <div class="svg-iconCompareChart svg-iconCompareChart-box"></div>
                                    </div>
                                    <div>Create and compare unlimited dyno charts</div>
                                </div>
                                <div class="appBlockIconsItem">
                                    <div class="appBlockIcon">
                                        <div class="svg-iconDynoChart svg-iconDynoChart-box"></div>
                                    </div>
                                    <div>Transfer and share dyno charts with your PC</div>
                                </div>
                            </div>
                        </div>
                        <div class="appBlockImg"> 
                            <img src="assets/images/png/chip/imgAppBlock.png" alt="imgAppBlock">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>