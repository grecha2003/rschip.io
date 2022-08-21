<?php
$contactCardsACF = get_field('_contact_cards');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($contactCardsACF)) :
?>
    <?php if ($contactCardsACF["isShow"]) : ?>
        <section class="contactCards">
            <div class="wrapper">
                <div class="contactCardsFlexContainer">
                    <div class="contactCard">
                        <div class="contactCardIcon">
                            <div class="svg-iconMarkLocationPurple svg-iconMarkLocationPurple-box"></div>
                        </div>
                        <div class="contactCardTitle">Our office and warehouse</div>
                        <div class="contactCardDescriptin">1201 East 5th Street North Little Rock, Arkansas USA, 72114
                        </div>
                    </div>
                    <div class="contactCard">
                        <div class="contactCardIcon">
                            <div class="svg-iconPhonePurple svg-iconPhonePurple-box"></div>
                        </div>
                        <div class="contactCardTitle">Our Phone Number</div>
                        <div class="contactCardDescriptin">+1 800 796 16 17 -USA Toll Free</div>
                    </div>
                    <div class="contactCard">
                        <div class="contactCardIcon">
                            <div class="svg-iconEmalPurple svg-iconEmalPurple-box"></div>
                        </div>
                        <div class="contactCardTitle">Email Address</div>
                        <div class="contactCardDescriptin">rschiphelp@gmail.com</div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php endif; ?>