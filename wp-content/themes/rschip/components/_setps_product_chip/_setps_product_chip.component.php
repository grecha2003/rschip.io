<?php
$stepsACF = get_field('_setps_product_chip');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($stepsACF)) :
?>
    <?php if ($stepsACF["isShow"]) : ?>
        <section class="setps">
            <div class="wrapper">
                <h2 class="page__title-h2_small">easy and fast</h2>
                <h3 class="page__title-h3">Easy plug&play installation in less than 5 minutes</h3>
                <div class="stepsItems">
                    <div class="stepsItem">
                        <div class="stepsItem__Img"><img src="assets/images/png/shared/imgSetps1.png" alt="imgSetps"></div>
                        <div class="stepsItem__Title">Step 1</div>
                        <div class="stepsItem__Description">Locate your OBDll port &amp; connect OBDll cable</div>
                    </div>
                    <div class="stepsItem">
                        <div class="stepsItem__Img"><img src="assets/images/png/shared/imgSetps2.png" alt="imgSetps"></div>
                        <div class="stepsItem__Title">Step 2</div>
                        <div class="stepsItem__Description">Start and warm up your engine</div>
                    </div>
                    <div class="stepsItem">
                        <div class="stepsItem__Img"><img src="assets/images/png/shared/imgSetps3.png" alt="imgSetps"></div>
                        <div class="stepsItem__Title">Step 3</div>
                        <div class="stepsItem__Description">Pair with RSCHIP &amp; follow in-app guide</div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>