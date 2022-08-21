<?php
$installationACF = get_field('_installation');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($installationACF)) :
?>
    <?php if ($installationACF["isShow"]) : ?>
        <section class="installation">
                <div class="wrapper">
                    <h2 class="page__title-h2"> <span class="page_red">Easy installation </span>in a few steps</h2>
                    <div class="installationRowFlex">
                        <div class="installationImg"><img src="assets/images/png/rs/imgGraphicChip.png" alt="imgGraphicChip">
                        </div>
                        <div class="installationText">
                            <p>Unplug the wire from the throttle at the connector. </p>
                            <p>Insert the supplied wiring harness (adapter) between the throttle pedal and the original plug
                                connection. </p>
                            <p>Connect the PedalBox to the supplied wiring harness. Done! Now – go drive and enjoy!</p>
                        </div>
                    </div>
                </div>
            </section>
    <?php endif; ?>
<?php endif; ?>