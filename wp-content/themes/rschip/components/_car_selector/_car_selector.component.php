<?php
$carSelectorACF = get_field('_car_selector');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($carSelectorACF)) :
?>
    <?php if ($carSelectorACF["isShow"]) : ?>
    <section class="carSelector">
            <div class="wrapper">
                <div class="carSelectorRowFlex">
                    <div class="carSelectorContainer">
                        <div class="carSelectorImg"> <img src="assets/images/png/chip/imgCarSelectors.png" alt="imgCarSelectors"></div>
                        <div class="carSelectorIcons">
                            <div class="carSelectorIconsItem">
                                <div class="carSelectorIconsItem__Icon">
                                    <div class="iconUnlimitGray"></div>
                                </div>
                                <div class="carSelectorIconsItem__Text">Unlimited use. Buy once use on any out of over
                                    8000 supported cars</div>
                            </div>
                            <div class="carSelectorIconsItem">
                                <div class="carSelectorIconsItem__Icon">
                                    <div class="svg-iconCloud svg-iconCloud-box"></div>
                                </div>
                                <div class="carSelectorIconsItem__Text">Lifetime updates and new features gauranteed
                                </div>
                            </div>
                            <div class="carSelectorIconsItem">
                                <div class="carSelectorIconsItem__Icon">
                                    <div class="svg-iconCar svg-iconCar-box"></div>
                                </div>
                                <div class="carSelectorIconsItem__Text">Unrestricted access to all tuning database
                                </div>
                            </div><button class="page__btn">DOWNLOAD GTR PROGRAMMER NOW</button>
                            <div class="carSelectorTextAfter">Requirements: Windows 10</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>