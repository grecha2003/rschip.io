<?php
$optimizeBlockACF = get_field('_optimize');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($optimizeBlockACF)) :
?>
    <?php if ($stepsACF["isShow"]) : ?>
        <section class="optimizeBlock">
            <div class="wrapper">
                <div class="optimizeRowFlex">
                    <div class="optimizeBlockContainer">
                        <div class="optimizeBlockText">
                            <h2 class="page__title-h2_small">optimize</h2>
                            <h3 class="page__title-h3">More power and at your fingertips</h3>
                            <div class="optimizeBlockTextDescription">Upgrade your drive right from the smartphone. Save
                                fuel or drive faster by selecting out of 3 available modes Sport Plus, SPORT or ECO.
                                Fine-tune each mode to get the most our of your car.</div>
                            <div class="tab-contents optimizeBlockChart" id="tabs">
                                <div class="tab-nav">
                                    <div class="tab-link is-active">Eco</div>
                                    <div class="tab-link">Sport</div>
                                    <div class="tab-link">Sport +</div>
                                </div>
                                <div class="tab-content is-active"><img src="assets/images/png/chip/optimizeBlockImgChart.png" alt="optimizeBlockImgChart">
                                </div>
                                <div class="tab-content"><img src="assets/images/png/chip/optimizeBlockImgChart.png" alt="optimizeBlockImgChart"></div>
                                <div class="tab-content"><img src="assets/images/png/chip/optimizeBlockImgChart.png" alt="optimizeBlockImgChart"></div>
                            </div>
                        </div>
                        <div class="optimizeBlockImg"><img src="assets/images/png/chip/imgOptimizeBlockPhone.png" alt="imgOptimizeBlockPhone"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>