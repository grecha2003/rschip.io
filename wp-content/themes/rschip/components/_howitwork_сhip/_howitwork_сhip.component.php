<?php
$howitworkChipACF = get_field('_howitwork_сhip');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($howitworkChipACF)) :
?>
    <?php if ($howitworkChipACF["isShow"]) : ?>
        <section class="howitworkChip">
            <div class="wrapper">
                <div class="howitworkChipRowFlex">
                    <div class="howitworkChipCol">
                        <h2 class="page__title-h2_small">The RSCHIP</h2>
                        <h3 class="page__title-h3">How does it work?</h3>
                        <div class="howitworkChipText">The RSChip utilizes new high speed IO to communicate directly
                            with the ECU through the OBD-II port. Inside your car’s ECU, a 3-dimensional map tells your
                            fuel injectors exactly how much fuel to deliver given current air temperature, density,
                            engine speed, throttle position, and other variables. </div>
                        <div class="howitworkChipText">From the factory, this map is generic and designed to provide a
                            sluggish, no-surprises style of driving to suit a wide range of drivers.</div>
                    </div>
                    <div class="howitworkChipCol">
                        <div class="howitworkChipText">The RSCHIP performance tuner temporarily replaces parts of this
                            map with parts from our highly tuned performance maps, and will safely unleash your engine's
                            full potential, without voiding the warranty.</div>
                        <div class="howitworkChipImg"> <img src="assets/images/png/chip/imgHowitworkChip.png" alt="imgHowitworkChip"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>