<?php
$setpsACF = get_field('_setps_product_gtr');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($appBlockACF)) :
?>
    <?php if ($appBlockACF["isShow"]) : ?>
        <section class="setps productGTR">
            <div class="wrapper">
                <h2 class="page__title-h2_small">easy and fast</h2>
                <h3 class="page__title-h3">Easy plug&play installation in less than 5 minutes</h3>
                <div class="stepsItems">
                    <div class="stepsItemGTR">
                        <div class="stepsItemGTR__Icon">
                            <div class="svg-iconDesktop svg-iconDesktop-box"></div>
                        </div>
                        <div class="stepsItemGTR__Title">Step 1</div>
                        <div class="stepsItemGTR__Description">Upload your vehicle</div>
                    </div>
                    <div class="stepsItemGTR">
                        <div class="stepsItemGTR__Icon">
                            <div class="svg-iconKeyboard svg-iconKeyboard-box"></div>
                        </div>
                        <div class="stepsItemGTR__Title">Step 2</div>
                        <div class="stepsItemGTR__Description">Connect to OBDll</div>
                    </div>
                    <div class="stepsItemGTR">
                        <div class="stepsItemGTR__Icon">
                            <div class="svg-iconChip svg-iconChip-box"></div>
                        </div>
                        <div class="stepsItemGTR__Title">Step 3</div>
                        <div class="stepsItemGTR__Description">Enjoy your new ride</div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>