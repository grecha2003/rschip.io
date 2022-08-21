<?php

/**
 * Header 
 */

?>

<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) & !(IE 8)]><!-->

<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PTL7636');</script>
<!-- End Google Tag Manager -->
	<script type="text/javascript">
		function setCookie (name, value, expires, path, domain, secure) {
			document.cookie = name + "=" + escape(value) +
				((expires) ? "; expires=" + expires : "") +
				((path) ? "; path=" + path : "") +
				((domain) ? "; domain=" + domain : "") +
				((secure) ? "; secure" : "");
		}

		function getCookie(name) {
			var cookie = " " + document.cookie;
			var search = " " + name + "=";
			var setStr = null;
			var offset = 0;
			var end = 0;
			if (cookie.length > 0) {
				offset = cookie.indexOf(search);
				if (offset != -1) {
					offset += search.length;
					end = cookie.indexOf(";", offset)
					if (end == -1) {
						end = cookie.length;
					}
					setStr = unescape(cookie.substring(offset, end));
				}
			}
			return(setStr);
		}
		var brand_ = "<?= get_query_var('brand'); ?>";
		var model_ = "<?= get_query_var('model'); ?>";
		var modi_ = "<?= get_query_var('modification'); ?>";
	</script>
	<?php
		$brand = str_replace('_', ' ', get_query_var('brand')); 
		if (isset($brand) && $brand != '') {
			$result = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
			$result = json_decode($result);
			$result = $result->data;
			foreach ($result as $brands) {
					if (strtolower($brands->title) == strtolower($brand)) {
							$brand_id = $brands->id;
					}
			}
			// $result = $wpdb->get_results('SELECT id FROM brand WHERE name LIKE "'.$brand.'" ');
			// $brand_id = $result[0]->id;
			echo '<script>var brand_id_ = "'.$brand_id.'";</script>';
		} else {
			echo '<script>var brand_id_ = "";</script>';
		}

		$model = str_replace('_', ' ', get_query_var('model')); 
		if (isset($model) && $model != '') {
			$res = file_get_contents('http://tuning34.ru/api/v1/catalog/models/?brand='.$brand_id);
			$result = json_decode($res);
			$result = $result->data;
			foreach ($result as $brands) {
					if (strtolower($brands->title) == strtolower($model)) {
							$model_id = $brands->id;
					}
			}
			// $result = $wpdb->get_results('SELECT id, name FROM model WHERE name LIKE "'.$model.'" AND brand_id = "'.$brand_id.'" ');
			// $model_id = $result[0]->id;
			// echo '<script>var model_ = "'.$result[0]->name.'";</script>';
			echo '<script>var model_id_ = "'.$model_id.'";</script>';
		} else {
			// echo '<script>var model_ = "'.$model.'";</script>';
			echo '<script>var model_id_ = "";</script>';
		}

		$modification = str_replace('_', ' ', get_query_var('modification')); 
		if (isset($modification) && $modification != '') {
		 //  $result = $wpdb->get_results('SELECT id, hp, nm, name FROM modification WHERE name LIKE "'.$modification.'" AND model_id = "'.$model_id.'" ');
		 // $modification_id = $result[0]->id;
			$res = file_get_contents('http://tuning34.ru/api/v1/catalog/modifications/?model='.$model_id);
			$result = json_decode($res);
			$result = $result->data;
			foreach ($result as $modi) {
					if (strtolower($modi->title) == strtolower($modification)) {
							$modification_id = $modi->id;
					}
			}
		 // echo '<script>var modi_ = "'.$modi->title.'";</script>';
			echo '<script>var modi_id_ = "'.$modification_id.'";</script>';
			echo '<script>var hp_ = "'.$modi->hp.'";</script>';
			echo '<script>var nm_ = "'.$modi->nm.'";</script>';
		} else {
			// echo '<script>var modi_ = "";</script>';
			echo '<script>var modi_id_ = "";</script>';
			echo '<script>var hp_ = "";</script>';
			echo '<script>var nm_ = "";</script>';
		}
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#262626">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="plugins/jquery/jquery-1.12.4.min.js"><\/script>')
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<?php wp_head(); ?>

<?php if ($post->ID == 27){ ?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '328111548047171');
  fbq('track', 'PageView');
  fbq('track', 'InitiateCheckout');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=328111548047171&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php } else { ?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '328111548047171');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=328111548047171&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#place_order').click(function() {
			fbq('track', 'Purchase', {
			    value: 399,
			    currency: 'USD',
			  });
		});
	});
</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTL7636"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-103567262-1', 'auto');
		ga('send', 'pageview');
	</script>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52222072, "init", {
        id:52222072,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52222072" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php 
/**
* определение страны по IP
*/
$is_bot = preg_match(
						"~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i",
						$_SERVER['HTTP_USER_AGENT']
				);
$geo = !$is_bot ? json_decode(file_get_contents('http://ru.sxgeo.city/json/'.$_SERVER['REMOTE_ADDR']), true) : [];
$singapore = ($geo['country']['iso'] == 'SGP');
$hongkong = ($geo['country']['iso'] == 'HKG');
$viewmessage = false;
$textmessage = '';
if (($singapore || $hongkong) && (is_shop() || is_page() || is_post()) ) {
	$viewmessage = true;
}

if ($singapore) {
	$textmessage = 'Please click <a href="http://www.monster-tune.com/online-shop/" target="_blank">here</a> to purchase your rschip online from our exclusive reseller for Singapore.';
}

if ($hongkong) {
	$textmessage = 'Please click <a href="http://rschip.com.hk" target="_blank">here</a> to purchase your rschip online from our exclusive reseller for Hong Kong.';
}

?>

<?php if ($viewmessage) { ?>
	<div class="alert alert-success to_top_mes">
		<?= $textmessage; ?>
	</div>
<?php } ?> 

	<?php if($post->ID !=11 && $post->ID !=12) { ?>

		<div id="preloader">
			<div class="loader-ring" id="status">
				<div class="loader-ring-light"></div>
				<div class="loader-ring-track"></div>
			</div>
		</div>

		<div id="svgIcons"></div>
		<div class="wrap-site wow-on">
			<a id="top"></a>
			<header class="header">
				<div class="wrap header__row">
					<div class="menu-trigger">
						<div class="menu-trigger__icon"></div>
					</div>
					<div class="logo"><a class="logo__link" href="/">
							<svg class="logo__icon" role="img">
								<title>logotype</title>
								<use class="svg-i" xlink:href="#logoIcon"/>
							</svg></a>
					</div>
					<?php $llink = (is_home()) ? '#select-u-car' : '/shop'; ?>
					<div class="select-your-car hidden-xs"><a href="<?= $llink; ?>">Select your car <i class="fa fa-search" aria-hidden="true"></i></a></div>
							<?php 
						$args=array(
								'theme_location'  => '',
								'menu'            => 'Header menu', 
								'container'       => 'nav', 
								'container_class' => 'main-nav', 
								'container_id'    => '',
								'menu_class'      => 'main-nav__list', 
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => new rschipus_walker_nav_menu,
							);

						wp_nav_menu( $args ); ?>


					<a class="<?php  if(WC()->cart->get_cart_contents_count() == 0) echo 'empty'?> cart-widget cart-widget_pos_header" href="/shop/cart1.html" title="Сart">
						<svg class="cart-widget__icon" role="img">
							<title>Cart icon</title>
							<use class="svg-i" xlink:href="#cartIcon"/>
						</svg>
						<span class="cart-widget__count"><?= WC()->cart->get_cart_contents_count() ?></span>
					</a>



				</div>

			</header>



			<main class="main">

			 <?php }

			else { ?>

					<div id="svgIcons"></div>

		<div class="wrap-site wow-on">

			<main class="main">

			<div class='cart'>

				<div class="wrap cart__inner">

					<div class="cart__header">

									<div class="logo logo_loc_cart"><a class="logo__link" href="/">

										<svg class="logo__icon" role="img">

											<title>logotype</title>

											<use class="svg-i" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logoIcon"></use>

										</svg></a>

									</div>

					</div>

			<?php } ?>