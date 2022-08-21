<?php
$author_id = wp_get_current_user()->ID;
global $sharedACF;
$sharedFieldsACF = $sharedACF['shared_fields'];
$footerAdvantages = $sharedACF['footer_advantages'];
$footerAdvantages['footer_advantages1'];
echo '<pre>';
// var_dump($footerAdvantages);
// echo $footerAdvantages['footer_advantages1']['icon'];
echo '</pre>';

update_field($footerAdvantages['footer_advantages1']['title'], 'test', "user_".$author_id);
?>
<footer>
    <div class="footer">
        <div class="wrapper">
            <div class="footerFlexContainer">
                <div class="footerLogo">
                    <a href="/">
                        <img src="assets/images/svg/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="footerDealer">
                    <?php if ($sharedFieldsACF && $sharedFieldsACF["link-become-dealer"]['url']) : ?>
                        <a class="page__btn" href="<?php echo $sharedFieldsACF["link-become-dealer"]['url']; ?>">
                        <?php echo $sharedFieldsACF["link-become-dealer"]['title']; ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="footerContacts">
                    <div class="footerContactsItem">
                        <?php if ($sharedFieldsACF && $sharedFieldsACF["phone-number"]) : ?>
                            <i class="svg-iconPhoneGray svg-iconPhoneGray-box"></i>
                            <a href="tel:<?php echo $sharedFieldsACF["phone-number"]; ?>"><?php echo $sharedFieldsACF["phone-number"]; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="footerContactsItem">
                        <?php if ($sharedFieldsACF && $sharedFieldsACF["email-link"]) : ?>
                            <i class="svg-iconEmailGray svg-iconEmailGray-box"></i>
                            <a href="mailto:<?php echo $sharedFieldsACF["email-link"]; ?>"><?php echo $sharedFieldsACF["email-link"]; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="footerContactsItem">
                        <?php if ($sharedFieldsACF && $sharedFieldsACF["address-text"]) : ?>

                            <i class="svg-iconMarkLocationGray svg-iconMarkLocationGray-box"></i>
                            <address><?php echo $sharedFieldsACF["address-text"]; ?></address>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="footerFlexContainer footerAdvantages">
                <?php /* foreach ($footerAdvantages as $item) : 
                    if(!empty($item)):
                    ?>
                    <div class="footerAdvantagesItem">
                        <div class="footerAdvantagesItem__title">
                            <img src="<?php echo $item['icon']; ?>" alt="icon">
                            <h5><?php echo $item['title']; ?></h5>
                        </div>
                        <p class="page__text"><?php echo $item['text']; ?></p>
                        <a href="<?php echo $item['link']['url']; ?>">Read more </a>

                    </div>
                <?php endif; endforeach; */?>

                <div class="footerAdvantagesItem">

                    <div class="footerAdvantagesItem__title">
                        <i class="svg-iconShield svg-iconShield-box"></i>
                        <h5>Lifetime warranty</h5>
                    </div>
                    <p class="page__text">We are confident in longevity and reliability of our products, and happy
                        to provide you with best possible terms and guarantees!</p><a href="javascript:void(0)">Read
                        more </a>
                </div>
                <div class="footerAdvantagesItem">

                    <div class="footerAdvantagesItem__title"><i
                            class="svg-iconReturnCircle svg-iconReturnCircle-box"></i>
                        <h5>30 days return policy</h5>
                    </div>
                    <p class="page__text">Not convinced after the 30 days? Just send the produt back No questions
                        asked.</p><a href="javascript:void(0)">Read more </a>
                
                </div>
                <div class="footerAdvantagesItem">

                     <div class="footerAdvantagesItem__title"><i
                            class="svg-iconFreeShipping svg-iconFreeShipping-box"></i>
                        <h5>Free shipping worldwide</h5>
                    </div>
                    <p class="page__text">Free shipping worldwide to any location with DHL express and USPS.</p><a
                        href="javascript:void(0)">Read more </a>
                </div>
            </div>
            <div class="footerFlexContainer footerLinks">
                <h4>Tuning </h4>
                <hr>
                <?php 
                 $result = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
                 $result = json_decode($result);
                 $result = $result->data;
                 // $result = $wpdb->get_results('SELECT name, id FROM brand ORDER BY name ASC');
                 // var_dump($result);
                 $letter_array = array();
                 foreach ($result as $brand) {
                   $brand_name = $brand->title;
                   $brand_id = $brand->id;
                   $letter = mb_substr($brand_name, 0, 1);
                   $letter_array[$letter][$brand_id] = $brand_name;
                 }
                 $k=-1;
                 foreach ($letter_array as $letterkey => $brands) {
                   $k++;

                   if( ($k % 3) == 0 || $k == 0) {
                     echo '<div class="footerLinksItem">';
                   }
                   echo '<ul>';
                   foreach ($brands as $brandId => $brandname) {
                     echo '<li><a class="brand-link" data-brand="'.$brandname.'" data-brand-id="'.$brandId.'" href="/shop/'.str_replace(' ', '_', strtolower($brandname)).'">'.$brandname.'</a></li>';
                   }
                   echo '</ul>';
                 if((($k+1) % 3) == 0) {
                   echo '</div>';
                 }
                 }
               ?>
                <!-- <div class="footerLinksItem">
                    <a href="javascript:void(0)">Acura </a>
                    <a href="javascript:void(0)">Alfa Romeo </a><a href="javascript:void(0)">Alpina </a><a href="javascript:void(0)">Aston Martin</a><a href="javascript:void(0)">Audi </a><a href="javascript:void(0)">Baojun </a><a href="javascript:void(0)">Beiben </a><a href="javascript:void(0)">Beijing </a><a href="javascript:void(0)">Bentley </a><a href="javascript:void(0)">BMW </a><a href="javascript:void(0)">Borgward </a><a href="javascript:void(0)">Buick </a><a href="javascript:void(0)">BYD </a>
                </div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Cadillac </a><a href="javascript:void(0)">Changan </a><a href="javascript:void(0)">Changfeng </a><a href="javascript:void(0)">Chery </a><a href="javascript:void(0)">Chevrolet </a><a href="javascript:void(0)">Chrysler </a><a href="javascript:void(0)">Chrysler </a><a href="javascript:void(0)">Citroen </a><a href="javascript:void(0)">Cupra </a><a href="javascript:void(0)">Dacia </a><a href="javascript:void(0)">Daewoo </a><a href="javascript:void(0)">Daihatsu </a><a href="javascript:void(0)">DFSK </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Dodge </a><a href="javascript:void(0)">Dongfeng </a><a href="javascript:void(0)">FAW </a><a href="javascript:void(0)">Ferrari </a><a href="javascript:void(0)">Fiat </a><a href="javascript:void(0)">Ford </a><a href="javascript:void(0)">Foton </a><a href="javascript:void(0)">GAC </a><a href="javascript:void(0)">Geely </a><a href="javascript:void(0)">GMC </a><a href="javascript:void(0)">GMW </a><a href="javascript:void(0)">Great Wall</a><a href="javascript:void(0)">Guangqi </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Haval </a><a href="javascript:void(0)">Hino </a><a href="javascript:void(0)">Holden </a><a href="javascript:void(0)">Honda </a><a href="javascript:void(0)">Hummer </a><a href="javascript:void(0)">Hyundai </a><a href="javascript:void(0)">Infiniti </a><a href="javascript:void(0)">Isuzu </a><a href="javascript:void(0)">Iveco </a><a href="javascript:void(0)">Jac </a><a href="javascript:void(0)">Jaguar </a><a href="javascript:void(0)">Jeep </a><a href="javascript:void(0)">KIA</a></div>
                <div class="footerLinksItem"> <a href="javascript:void(0)">Kowloon </a><a href="javascript:void(0)">KTM </a><a href="javascript:void(0)">Lada </a><a href="javascript:void(0)">Lamborghini </a><a href="javascript:void(0)">Lancia </a><a href="javascript:void(0)">Land Rover</a><a href="javascript:void(0)">Landwind </a><a href="javascript:void(0)">Lexus </a><a href="javascript:void(0)">Lifan </a><a href="javascript:void(0)">Lincoln </a><a href="javascript:void(0)">Lotus </a><a href="javascript:void(0)">Luxgen </a><a href="javascript:void(0)">Lynk </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Mahindra </a><a href="javascript:void(0)">Maruti </a><a href="javascript:void(0)">Maserati </a><a href="javascript:void(0)">Maybach </a><a href="javascript:void(0)">Mazda </a><a href="javascript:void(0)">McLaren </a><a href="javascript:void(0)">Mercedes </a><a href="javascript:void(0)">MG </a><a href="javascript:void(0)">Mini </a><a href="javascript:void(0)">Mitsubishi </a><a href="javascript:void(0)">Nissan </a><a href="javascript:void(0)">Opel </a><a href="javascript:void(0)">Pagani </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Pontiac </a><a href="javascript:void(0)">Porsche </a><a href="javascript:void(0)">Proton </a><a href="javascript:void(0)">Qoros </a><a href="javascript:void(0)">Renault </a><a href="javascript:void(0)">Roewe </a><a href="javascript:void(0)">Rolls-Royce </a><a href="javascript:void(0)">Rover </a><a href="javascript:void(0)">Saab </a><a href="javascript:void(0)">Sag </a><a href="javascript:void(0)">SAIC </a><a href="javascript:void(0)">Sany </a><a href="javascript:void(0)">Saturn </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Scion </a><a href="javascript:void(0)">Seat </a><a href="javascript:void(0)">Sino Truck</a><a href="javascript:void(0)">Skoda </a><a href="javascript:void(0)">Smart </a><a href="javascript:void(0)">Soueast </a><a href="javascript:void(0)">SsangYong </a><a href="javascript:void(0)">Subaru </a><a href="javascript:void(0)">Suzuki </a><a href="javascript:void(0)">TATA </a><a href="javascript:void(0)">Toyota </a><a href="javascript:void(0)">Troller </a><a href="javascript:void(0)">UAZ </a></div>
                <div class="footerLinksItem"><a href="javascript:void(0)">Vauxhall </a><a href="javascript:void(0)">Vinfast </a><a href="javascript:void(0)">Volvo </a><a href="javascript:void(0)">Vortex </a><a href="javascript:void(0)">VW </a><a href="javascript:void(0)">Wey </a><a href="javascript:void(0)">XCMG </a><a href="javascript:void(0)">Zotye</a></div>
             -->
            </div>
        </div>
    </div>
    <section class="privacy">
        <div class="wrapper">
            <div class="footerPrivacy">
                <div class="item1">
                    <p>© Copyright 2016 - 2022 RSCHIP. All Rights Reserved.</p>
                </div>
                <div class="item2">
                    <?php include(TEMPLATEPATH . '/components/social/socialIcons.component.php'); ?>
                </div>
                <div class="item3">
                    <?php wp_nav_custom_menu('footerNav', ''); ?>
                </div>
            </div>
        </div>
    </section>
</footer>
<section class="chat">
        <div class="btnChat">
            <div class="iconChat svg-iconChat svg-iconChat-box"></div>
        </div>
        <div class="chatContainer">
            <div class="chatBtnClose"> </div>
            <h3 class="chatTitle"> <span class="page_red">Chat </span>with us</h3>
            <div class="chatItems">
                <div class="chatItem"><i class="icon svg-iconEmailGray svg-iconEmailGray-box"></i><a class="email"
                        href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a></div>
                <div class="chatItem"><i class="icon svg-iconPhoneGray svg-iconPhoneGray-box"></i><a class="phone"
                        href="tel:+1 800 796 16 17">+1 800 796 16 17</a></div>
                <div class="chatItem"><i class="icon svg-iconMarkLocationGray svg-iconMarkLocationGray-box"></i>
                    <address>Monte Little Rock, AR USA 72114 Monday-Friday 9AM - 4PM CST </address>
                </div>
                <div class="chatItem"><i class="icon svg-iconChatGray svg-iconChatGray-box"></i>
                    <p>Online chat support 24/7</p>
                </div>
            </div><a class="chatBtn page__btn page__btn_notTransparent"
                href="https://www.facebook.com/rschipchiptuningusa/" target="_blank">CHAT VIA FACEBOOK</a>
        </div>
    </section>


<div class="overlay js-overlay-modal"></div>

<link rel="stylesheet" href="css/styles-sprites.css" type="text/css">
<link rel="stylesheet" href="css/styles-calc.css" type="text/css">
<link rel="stylesheet" href="libs/css/swiper-bundle.min.css" type="text/css">
<script src="js/api.js"></script>
<script src="js/data-brands.js"></script>
<script src="libs/js/swiper-bundle.min.js"></script>
<script src="libs/js/store-scroll.js"></script>
<script src="libs/js/tabs.js"></script>
<script src="libs/js/modal.js"></script>
<script src="js/menu/menu.component.js"></script>
<script src="js/chat/chat.component.js"></script>
<script src="js/debuggrid/debuggrid.component.js"></script>
<script src="js/main.js"></script>
<script src="js/ajax-add-to-cart.js"></script>
<script src="js/faq/faq.component.js"></script>
<script src="js/modals/modalGallary.component.js"></script>
<script src="js/modals/modalNews.component.js"></script>
<script src="js/select/select.component.js"></script>
<script src="js/productSlider/productSlider.component.js"></script>
<script src="js/cartProducts/cartProducts.component.js"></script>
<script src="js/performance/performance.component.js"></script>
<script src="js/products/productsCart.component.js"></script>
<script src="js/productRsControls/productRsControls.component.js"></script>
<?php wp_footer(); ?>
</body>

</html>