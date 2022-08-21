<?php

$shared_posts = get_posts( array(
	'numberposts' => 5,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'shared',
	'suppress_filters' => true, 
) );
$sharedACF;
foreach( $shared_posts as $post ){
	setup_postdata( $post );
    global $sharedACF;
    $sharedACF = get_fields();
}
wp_reset_postdata(); ?>

<?php 

$ip = file_get_contents('http://ip-api.com/json/'.$_SERVER['REMOTE_ADDR']);
$ip = json_decode($ip, true);
$country = $ip['country'];
// echo $ip ;
// var_dump($ip);

// завести поля для товара под конкретную страну
// определять страну или выбирать ее с помощью селекта 
// выводить цену
/** 
 * + Все страны 299 RS Response 349 RSCHIP 499 
*GTR
*+США. пуэрто рико, канада мексика  
*299 RS Response 299 RSCHIP 349 GTR
*/
?>
<!DOCTYPE html>
<html lang="en" data-scroll="0">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <base href="<?php echo get_template_directory_uri(); ?>/">

    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>" />

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ilia Gromov">
    <!-- <link rel="icon" type="image/png" href="assets/images/png/shared/favicon.png"> -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/images/png/shared/favicon.ico"> -->
    <!-- <title>Chiptuning for you, +20% power and torque – RSchip chiptuning</title> -->

    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/png/shared/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/png/shared/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/png/shared/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/png/shared/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/png/shared/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/png/shared/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/png/shared/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/png/shared/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/png/shared/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/png/shared/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/png/shared/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/png/shared/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/png/shared/favicon-16x16.png">
    <link rel="manifest" href="assets/images/png/shared/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/png/shared/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    
    <!-- <meta name="description" content="Get extra 20% power and torque for your car. RSCHIP provides fuel saving and better MPG numbers. Try safe chiptuning today with free delivery for US and Canada."> -->
    <link rel="stylesheet" href="css/base-styles.css" type="text/css">
    <link rel="stylesheet" href="libs/css/swiper-bundle.min.css" type="text/css">
    <meta property="fb:app_id" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="RSchip chiptuning">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <meta property="og:url" content="<?php echo get_template_directory_uri(); ?>/">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/png/imgRsChip1-xs.png">
    <meta property="vk:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/png/imgRsChip1-xs.pngg">
    <meta property="fb:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/png/imgRsChip1-xs.png">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/png/imgRsChip1-xs.png">
    <meta property="og:image:secure_url" content="<?php echo get_template_directory_uri(); ?>/assets/images/png/imgRsChip1-xs.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="300">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:site" content="<?php echo wp_get_document_title(); ?>">
    <meta property="twitter:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="twitter:description" content="<?php bloginfo('description') ?>">
    <meta property="twitter:creator" content="Ilia Gromov">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="wrapper">
            <div class="headerFlexContainer">
                <div class="headerLogo">
                    <a href="/">
                        <img src="assets/images/svg/logo.svg" alt="logo">
                    </a>
                </div>

                <div class="headerNav">
                    <nav class="headerNavLinks">

                        <?php 
                        wp_nav_custom_menu('headerNavigation', "headerLink"); ?>

                    </nav>
                    <a class="headerNavCart" href="/cart/">
                        <div class="icon-cart-png"></div>
                        <?php $cartContentsCount = WC()->cart->get_cart_contents_count();
                        if (!empty($cartContentsCount)) : ?>
                            <div class="headerNavCart__count"><?php echo $cartContentsCount; ?></div>
                        <?php endif; ?>
                    </a>
                    <div class="headerNavBtn"><a class="page__btn" href="/shop/">Shop</a></div>
                    <div class="headerNavBurgerMenu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="menu">
        <div class="menuHeader">
            <div class="menuLogo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logoBlack.svg" alt="logo">
                </a>
            </div>
           
            <div class="menuClose">
                <div class="icon-close"></div>
            </div>
        </div>
        <nav class="menuNav">
            <?php wp_nav_custom_menu('mobileNavigation', 'menuLink'); ?>
        </nav>
        <div class="menuConacts">
            <div class="menuConactsItem">
                <i class="icon icon-phone-png"></i>
                <a class="phone" href="tel:+1 800 796 16 17">+1 800 796 16 17</a>
            </div>
            <div class="menuConactsItem">
                <i class="icon icon-mail-png"> </i>
                <a class="email" href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a>
            </div>
            <div class="menuConactsItem">
                <i class="icon icon-location-png"> </i>
                <address>1201 East 5th Street North Little Rock, Arkansas USA, 72114</address>
            </div>
            <div class="menuConactsIcons">
                <div class="socialIcons">
                    <a class="icon svg-iconInstagramGray svg-iconInstagramGray-box" href="javascript:void(0)"></a>
                    <a class="icon svg-iconFacebookGray svg-iconFacebookGray-box" href="javascript:void(0)"></a>
                    <a class="icon svg-iconYoutubeGray svg-iconYoutubeGray-box" href="javascript:void(0)"></a>
                </div>
            </div>
        </div>
    </section>