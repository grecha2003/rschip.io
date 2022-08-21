<?php

add_action('init', 'do_rewrite', 20, 0);

add_filter( 'wpseo_canonical', '__return_false' );

function do_rewrite(){
	global $wp_rewrite;
    add_rewrite_rule( '^shop/(.+)/(.+)/(.+)', 'index.php?page_id=27&brand=$matches[1]&model=$matches[2]&modification=$matches[3]', 'top' );
	add_rewrite_rule( '^shop/(.+)/(.+)', 'index.php?page_id=221&brand=$matches[1]&model=$matches[2]', 'top' );
    add_rewrite_rule( '^shop/(.+)', 'index.php?page_id=218&brand=$matches[1]', 'top' );

	add_filter( 'query_vars', function( $vars ){
		$vars[] = 'brand';
		$vars[] = 'model';
		$vars[] = 'modification';
		return $vars;
	} );

	// $GLOBALS['wp_rewrite']->flush_rules();

	global $wp_rewrite;
   	$wp_rewrite->flush_rules();
}

function changeSeoTitle( $title ) {
    $brand = get_query_var('brand');
    if ($brand != '' && is_page(array(218,221,27)) ) {
        $title = str_replace('$brandname', ucwords(str_replace('_',' ', $brand)), $title);
    } else if(is_page(218)){
    	$title = 'Select your car';
    }
    $model = get_query_var('model');
    if ($model != '' && is_page(array(221,27)) ){
        $title = str_replace('$modelname', ucwords(str_replace('_',' ', $model)), $title);
    } else if(is_page(221)){
    	$title = 'Select your car';
    }
    $modification = get_query_var('modification');
    if ($modification != '' && is_page(27)) {
        $title = str_replace('$modificationname', ucwords(str_replace('_',' ', $modification)), $title);
    } else if(is_page(27)){
    	$title = 'Select your car';
    }
    return $title;
}

add_filter( 'wpseo_title', 'changeSeoTitle' );

function changeSeoDesc( $title ) {
    $brand = get_query_var('brand');
    if ($brand != '' && is_page(array(218,221,27)) ) {
        $title = str_replace('$brandname', ucwords(str_replace('_',' ', $brand)), $title);
    } else if(is_page(218)){
    	$title = '';
    }
    $model = get_query_var('model');
    if ($model != '' && is_page(array(221,27)) ) {
        $title = str_replace('$modelname', ucwords(str_replace('_',' ', $model)), $title);
    } else if(is_page(221)){
    	$title = '';
    }
    $modification = get_query_var('modification');
    if ($modification != '' && is_page(27)) {
        $title = str_replace('$modificationname', ucwords(str_replace('_',' ', $modification)), $title);
    } else if(is_page(27)){
    	$title = '';
    }
    return $title;
}

add_filter( 'wpseo_metadesc', 'changeSeoDesc' );


function rschipus_style_scripts() {

	// wp_enqueue_style( 'rschipus-selectize', get_template_directory_uri() . '/plugins/selectize/selectize.css' );
	wp_enqueue_style( 'rschipus-styler-css', get_template_directory_uri() . '/plugins/form-styler/jquery.formstyler.css' );
	wp_enqueue_style( 'rschipus-slick', get_template_directory_uri() . '/plugins/slick/slick.css' );
	wp_enqueue_style( 'rschipus-magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'rschipus-wowjs-animate', get_template_directory_uri() . '/plugins/wowjs/animate.min.css' );
	wp_enqueue_style( 'rschipus-remodal-css', get_template_directory_uri() . '/plugins/remodal/remodal.css' );
	wp_enqueue_style( 'rschipus-remodal-default-css', get_template_directory_uri() . '/plugins/remodal/remodal-default-theme.css' );
	wp_enqueue_style( 'rschipus-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'rschipus-styles-correction', get_template_directory_uri() . '/correction.css' );
	wp_enqueue_style( 'rschipus-styles-new-shop', get_template_directory_uri() . '/assets/css/new_shop_and_offer_by_main_page.css' );



	$ver = '1.0.0';
	wp_deregister_script('jquery');
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js' , '', $ver, true);
	wp_enqueue_script( 'rschipus-cookie', get_template_directory_uri() . '/plugins/jquery.cookie.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-slick', get_template_directory_uri() . '/plugins/slick/slick.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-jquery-scrollUp', get_template_directory_uri() . '/plugins/jquery.scrollUp.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-wowjs', get_template_directory_uri() . '/plugins/wowjs/wow.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-selectize', get_template_directory_uri() . '/plugins/selectize/selectize.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-styler', get_template_directory_uri() . '/plugins/form-styler/jquery.formstyler.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-validate', get_template_directory_uri() . '/plugins/validate.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-jquery-api', get_template_directory_uri() . '/ajax/api.js?sd10698' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/jquery.magnific-popup.min.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-modernizr-custom', get_template_directory_uri() . '/plugins/modernizr-custom.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-icons', get_template_directory_uri() . '/scripts/icons.js' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-main', get_template_directory_uri() . '/scripts/main.js?1' ,'', $ver, true );
	wp_enqueue_script( 'rschipus-remodal', get_template_directory_uri() . '/plugins/remodal/remodal.js' ,'', $ver, true );
	//wp_enqueue_script( 'rs_recaptcha', 'https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit&ver=2.0' ,'', $ver, true );
	if (is_page_template('page-dealers.php')) {
			wp_enqueue_script( 'rschipus-dealers', get_template_directory_uri() . '/scripts/dealers.js' ,'', $ver, true );
	}

}

add_action( 'wp_enqueue_scripts', 'rschipus_style_scripts' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_theme_support( 'menus' );
// Menu walker
class rschipus_walker_nav_menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth ) {
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' );
		$display_depth = ( $depth + 1);
		$classes = array(
			'main-nav__sub-list',
			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth
			);
		$class_names = implode( ' ', $classes );

		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	function start_el( &$output, $item, $depth, $args ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );
		$depth_classes = array(
			( $depth == 0 ? 'main-nav__item' : 'main-nav__sub-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),

			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		if ($args->has_children) {
			$child_y = 'has-submenu'; }
			else { $child_y = ''; }
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . ' ' . $child_y .'">';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'main-nav__sub-link' : 'main-nav__link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
	    $id_field = $this->db_fields['id'];
	    if ( is_object( $args[0] ) ) {
	        $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
	    }
	    return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
}

// add_action('wp_ajax_api', 'api_callback');
// add_action('wp_ajax_nopriv_api', 'api_callback');
// function api_callback() {

// 	$curl = curl_init();

// 	curl_setopt_array($curl, array(
// 	  CURLOPT_URL => $_POST['url'],
// 	  CURLOPT_RETURNTRANSFER => true,
// 	  CURLOPT_ENCODING => "",
// 	  CURLOPT_MAXREDIRS => 1,
// 	  CURLOPT_TIMEOUT => 10,
// 	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	  CURLOPT_CUSTOMREQUEST => "GET",
// 	  // CURLOPT_POSTFIELDS => "blakey=blaval",
// 	  // CURLOPT_HTTPHEADER => array(
// 	  //   "action: Hello_ajax",
// 	  //   "cache-control: no-cache",
// 	  //   "content-type: application/x-www-form-urlencoded",
// 	  //   "postman-token: fd5bcc0b-f46d-0cf8-a5cf-dc83bfe7dbec",
// 	  //   "zpm_hello: 1"
// 	  // ),
// 	));

// 	$response = curl_exec($curl);
// 	$err = curl_error($curl);

// 	curl_close($curl);

// 	if ($err) {
// 	  echo "cURL Error #:" . $err;
// 	} else {
// 	  echo $response;
// 	}

//   	wp_die();
// }

add_action('wp_ajax_api', 'api_callback');
add_action('wp_ajax_nopriv_api', 'api_callback');
function api_callback() {
	global $wpdb;

	if ($_POST['url'] == 'getbrands') {
		// $result = $wpdb->get_results("SELECT id, name as title FROM brand");
		// $res['data'] = $result;
		// $res = file_get_contents('http://tuning34.ru/api/v1/catalog/brands/');
		$url = 'https://tuning34.ru/api/v1/catalog/brands/';
        $curl = curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));

		curl_setopt($ch, CURLOPT_PROXY, '196.19.243.233:8000');
		curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'AbQpFJ:RoSXxW');


		curl_setopt($curl, CURLOPT_ENCODING,"gzip,deflate");
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($curl, CURLOPT_TIMEOUT, 5);

		$res = curl_exec($curl);

		curl_close($curl);

		echo $res;
	} else {
		$url = explode('=', $_POST['url']);
		$method = $url[0];
		$this_id = $url[1];

		switch ($method) {
			case 'brand':
				// $result = $wpdb->get_results("SELECT id, name as title FROM model WHERE brand_id='".$this_id."'");
				// $res['data'] = $result;
				// echo json_encode($res);
				// $res = file_get_contents('http://tuning34.ru/api/v1/catalog/models/?brand='.$this_id);
				$url = 'https://tuning34.ru/api/v1/catalog/models/?brand='.$this_id;
				$curl = curl_init($url);
				curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

				curl_setopt($ch, CURLOPT_PROXY, '196.19.243.233:8000');
				curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'AbQpFJ:RoSXxW');

				curl_setopt($curl, CURLOPT_ENCODING,"gzip,deflate");
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
				curl_setopt($curl, CURLOPT_TIMEOUT, 5);

				$res = curl_exec($curl);

				curl_close($curl);


				echo $res;

				break;
			case 'model':
				// $result = $wpdb->get_results("SELECT id, name as title, hp, nm FROM modification WHERE model_id = '".$this_id."'");
				// $res['data'] = $result;

				// echo json_encode($res);

				// $res = file_get_contents('http://tuning34.ru/api/v1/catalog/modifications/?model='.$this_id);
				$url = 'https://tuning34.ru/api/v1/catalog/modifications/?model='.$this_id;
				$curl = curl_init($url);
				curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_PROXY, '196.19.243.233:8000');
				curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'AbQpFJ:RoSXxW');

				curl_setopt($curl, CURLOPT_ENCODING,"gzip,deflate");
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
				curl_setopt($curl, CURLOPT_TIMEOUT, 5);

				$res = curl_exec($curl);

				curl_close($curl);

				echo $res;
				break;
		}

	}

  	wp_die();
}

// ajax form subscribe


function generateCoupon($length = 7) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charsLength - 1)];
    }
    return $randomString;
	}



add_action('wp_ajax_subscribe', 'subscribe_footer');
add_action('wp_ajax_nopriv_subscribe', 'subscribe_footer');
function subscribe_footer() {
	if(isset($_POST['subscribe_mail'])) {
	$coupon = generateCoupon();

	$to = htmlspecialchars($_POST['subscribe_mail']);
	$subject = 'Newsletter Subscription and coupon for 10% off';
	$message = '<html>
	                    <head>
	                        <title>'.$subject.'</title>
	                    </head>
	                    <body>
	                        <p>Congratulations!</p>

							<p>You\'ve successfully subscribed to rschipus.com newsletter. We\'ll be sending useful information on car tuning and maintenance not more often than once a week.
							</p>

							<p>Use this coupon '.$coupon.' to get your 10% RSCHIP discount.</p>

							<p>
							<a href=\'http://rschipus.com/?utm_source=email\'>http://rschipus.com</a></br>
							501-613-0396</br>
							1201 East 5th Street North Little Rock, Arkansas USA, 72114
							</p>

	                    </body>
	                </html>';
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From:  RSChip <support@rschipus.com>\r\n";
	mail($to, $subject, $message, $headers);

	$post_data = array(
	  'post_title'    =>  $coupon,
	  'post_excerpt'  => $to,
	  'post_status'   => 'publish',
	  'post_author'   => 1,
	  'post_type' => 'shop_coupon',
	);
	// Вставляем запись в базу данных
	$postid = wp_insert_post( $post_data );

	 add_post_meta($postid, 'discount_type', 'percent');
	 add_post_meta($postid, 'coupon_amount', '10');
	}
	wp_die();
}


// add html
function wpse_178112_permastruct_html( $post_type, $args ) {
    if ( $post_type === 'product' )
        add_permastruct( $post_type, "{$args->rewrite['slug']}/%$post_type%.html", $args->rewrite );
}

add_action( 'registered_post_type', 'wpse_178112_permastruct_html', 10, 2 );

// order checkout

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_true' );
 //disable shipping address checkbox
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            //$field['class'][] = 'form-group';

            // add form-control to the actual input
            $field['input_class'][] = 'input-style-2 cart-shipment__input';
        }
    }
    return $fields;
}





/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['shipping_first_name'] ) ) {
        update_post_meta( $order_id, 'order E-mail', sanitize_text_field( $_POST['shipping_first_name'] ) );
    }

        if ( ! empty( $_POST['shipping_state'] ) ) {
        update_post_meta( $order_id, 'order State / County', sanitize_text_field( $_POST['shipping_state'] ) );
    }

        if ( ! empty( $_POST['shipping_postcode'] ) ) {
        update_post_meta( $order_id, 'order Postcode', sanitize_text_field( $_POST['shipping_postcode'] ) );
    }

        if ( ! empty( $_POST['shipping_custom_country'] ) ) {
        update_post_meta( $order_id, 'order country', sanitize_text_field( $_POST['shipping_custom_country'] ) );
    }

    if ( ! empty( $_POST['cart_cart'] ) ) {
        update_post_meta( $order_id, 'order car', sanitize_text_field( $_POST['cart_cart'] ) );
    }

}



// get rschip price with app
add_action('wp_ajax_price_yes', 'price_yes');
add_action('wp_ajax_nopriv_price_yes', 'price_yes');
function price_yes() {
	 		// 	$prod_var_yes = new WC_Product_Variation(159);
    //             $result = $prod_var_yes->get_regular_price();
				// echo $result;
				$product1 = wc_get_product(16);
                echo $product1->get_price();
				wp_die();
}
// get rschip price with NO app
add_action('wp_ajax_price_no', 'price_no');
add_action('wp_ajax_nopriv_price_no', 'price_no');
function price_no() {
                // $prod_var_no = new WC_Product_Variation(160);
                // $result = $prod_var_no->get_regular_price();
				$product1 = wc_get_product(16);
                echo $product1->get_price();
				// echo $result;
				wp_die();
}

// get rseco price
add_action('wp_ajax_rseco_price', 'rseco_price');
add_action('wp_ajax_nopriv_rseco_price', 'rseco_price');
function rseco_price() {

 				$product_rseco = wc_get_product(926);
 				$result = $product_rseco->get_regular_price();
				echo $result;
				wp_die();
}

// get rseco +rschipus price with app
add_action('wp_ajax_rseco_rschip_app_price', 'rseco_rschip_app_price');
add_action('wp_ajax_nopriv_rseco_rschip_app_price', 'rseco_rschip_app_price');
function rseco_rschip_app_price() {
 				$product_rseco = wc_get_product(926);
 				$prod_rseco_price = $product_rseco->get_regular_price();
 			    $prod_var_yes = new WC_Product_Variation(159);
 			    $prod_var_yes_price = $prod_var_yes->get_regular_price();
                $result = $prod_rseco_price + $prod_var_yes_price;
				echo $result;
				wp_die();
}

// get rseco +rschipus price with  NO app
add_action('wp_ajax_rseco_rschip_no_app_price', 'rseco_rschip_no_app_price');
add_action('wp_ajax_nopriv_rseco_rschip_no_app_price', 'rseco_rschip_no_app_price');
function rseco_rschip_no_app_price() {
 				$product_rseco = wc_get_product(926);
 				$prod_rseco_price = $product_rseco->get_regular_price();
 			    $prod_var_yes = new WC_Product_Variation(160);
 			    $prod_var_yes_price = $prod_var_yes->get_regular_price();
                $result = $prod_rseco_price + $prod_var_yes_price;
				echo $result;
				wp_die();
}

add_action('wp_ajax_rseco_add_to_cart', 'rseco_add_to_cart');
add_action('wp_ajax_nopriv_rseco_add_to_cart', 'rseco_add_to_cart');
function rseco_add_to_cart() {
				global $woocommerce;
				$product_id = '926';
				$woocommerce->cart->add_to_cart($product_id);
				wp_die();
}

add_action('wp_ajax_both_add_to_cart_with_app', 'both_add_to_cart_with_app');
add_action('wp_ajax_nopriv_both_add_to_cart_with_app', 'both_add_to_cart_with_app');
function both_add_to_cart_with_app() {
				global $woocommerce;
				$product_id_1 = '926';
				$product_id_2 = '16';
				$var_id_2 = '159';
				$woocommerce->cart->add_to_cart($product_id_1);
				$woocommerce->cart->add_to_cart($product_id_2,'1',$var_id_2);
				wp_die();
}

add_action('wp_ajax_both_add_to_cart_no_app', 'both_add_to_cart_no_app');
add_action('wp_ajax_nopriv_both_add_to_cart_no_app', 'both_add_to_cart_no_app');
function both_add_to_cart_no_app() {
				global $woocommerce;
				$product_id_1 = '926';
				$product_id_2 = '16';
				$var_id_2 = '160';
				$woocommerce->cart->add_to_cart($product_id_1);
				$woocommerce->cart->add_to_cart($product_id_2,'1',$var_id_2);
				wp_die();
}

class ControlPanel {
var $default_settings = array(
 'phone' => '501-613-0396'
 );
 var $options;

 function ControlPanel() {
 add_action('admin_menu', array(&$this, 'add_menu'));
 if (!is_array(get_option('theme_admin')))
 add_option('theme_admin', $this->default_settings);
 $this->options = get_option('theme_admin');
 }

 function add_menu() {
 add_theme_page('WP Theme Options', 'Theme options', 8, "theme_admin", array(&$this, 'optionsmenu'));
 }

 function optionsmenu() {
 if ($_POST['ss_action'] == 'save') {
 $this->options["phone"] = $_POST['cp_phone'];
 update_option('theme_admin', $this->options);
 echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 400px; margin-left: 17px; margin-top: 17px;"><p>Settins <strong>saved</strong>.</p></div>';
 }
 echo '<form action="" method="post" class="themeform">';
 echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';

 print '<div class="cptab"><br />
 <b>Settings</b>
 <br />
 <h3>Contacts</h3>
 <p><input placeholder="Телефон" style="width:300px;" name="cp_phone" id="cp_phone" value="'.$this->options["phone"].'"><label> - phone</label></p>
 </div><br />';
 echo '<input type="submit" value="Update" name="cp_save" class="dochanges" />';
 echo '</form>';
 }
}
$cpanel = new ControlPanel();
$mytheme = get_option('theme_admin');

function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'Home',
		'paged'      => 'Page %d',
		'_404'       => 'Error 404',
		'search'     => 'Search results - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Media: %s',
		'tag'        => 'Posts by tag: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,  // выводить крошки на главной странице
		'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
										   // или можно указать свой массив разметки:
										   // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
									  // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
									  // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
									  // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow' => false, // добавлять rel=nofollow к ссылкам?

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

		// упростим
		$sep = & $arg->sep;
		$this->arg = & $arg;

		// микроразметка ---
		if(1){
			$mark = & $arg->markup;

			// Разметка по умолчанию
			if( ! $mark ) $mark = array(
				'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
				'linkpatt'  => '<a href="%s">%s</a>',
				'sep_after' => '',
			);
			// rdf
			elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
				'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
				'sep_after'  => '</span>', // закрываем span после разделителя!
			);
			// schema.org
			elseif( $mark === 'schema.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
				'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
				'sep_after'  => '',
			);

			elseif( ! is_array($mark) )
				die( __CLASS__ .': "markup" parameter must be array...');

			$wrappatt  = $mark['wrappatt'];
			$arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after']."\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if( empty($post) ){
			if( isset($q_obj->taxonomy) )
				$ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
		}
		else $ptype = & $wp_post_types[ $post->post_type ];


		// paged
		$arg->pg_end = '';
		if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if( is_front_page() ){
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
		}
		elseif( is_404() ){
			$out = $loc->_404;
		}
		elseif( is_search() ){
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		}
		elseif( is_author() ){
			$tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		}
		elseif( is_year() || is_month() || is_day() ){
			$y_url  = get_year_link( $year = get_the_time('Y') );

			if( is_year() ){
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
			}
			// month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year);
				$m_url  = get_month_link( $year, get_the_time('m') );

				if( is_month() ){
					$tit = sprintf( $loc->month, get_the_time('F') );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				}
				elseif( is_day() ){
					$m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
					$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
				}
			}
		}
		// Древовидные записи
		elseif( is_singular() && $ptype->hierarchical ){
			$out = $this->_add_title( $this->_page_crumbs($post), $post );
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if( is_singular() ){

				// изменим $post, чтобы определить термин родителя вложения
				if( is_attachment() && $post->post_parent ){
					$save_post = $post; // сохраним
					$post = get_post($post->post_parent);
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				// $taxonomies = get_object_taxonomies( $post->post_type );
				// // оставим только древовидные и публичные, мало ли...
				// $taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

				// if( $taxonomies ){
				// 	// сортируем по приоритету
				// 	if( ! empty($arg->priority_tax) ){
				// 		usort( $taxonomies, function($a,$b)use($arg){
				// 			$a_index = array_search($a, $arg->priority_tax);
				// 			if( $a_index === false ) $a_index = 9999999;

				// 			$b_index = array_search($b, $arg->priority_tax);
				// 			if( $b_index === false ) $b_index = 9999999;

				// 			return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
				// 		} );
				// 	}

				// 	// пробуем получить термины, в порядке приоритета такс
				// 	foreach( $taxonomies as $taxname ){
				// 		if( $terms = get_the_terms( $post->ID, $taxname ) ){
				// 			// проверим приоритетные термины для таксы
				// 			$prior_terms = & $arg->priority_terms[ $taxname ];
				// 			if( $prior_terms && count($terms) > 2 ){
				// 				foreach( (array) $prior_terms as $term_id ){
				// 					$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
				// 					$_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

				// 					if( $_terms ){
				// 						$term = array_shift( $_terms );
				// 						break;
				// 					}
				// 				}
				// 			}
				// 			else
				// 				$term = array_shift( $terms );

				// 			break;
				// 		}
				// 	}
				// }

				if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if( $term && isset($term->term_id) ){
				$term = apply_filters('kama_breadcrumbs_term', $term );

				// attachment
				if( is_attachment() ){
					if( ! $post->post_parent )
						$out = sprintf( $loc->attachment, esc_html($post->post_title) );
					else {
						if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
							$_out = implode( $sep, array($_crumbs, $parent_tit) );
							$out = $this->_add_title( $_out, $post );
						}
					}
				}
				// single
				elseif( is_single() ){
					if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out = $this->_add_title( $_crumbs, $post );
					}
				}
				// не древовидная такса (метки)
				elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
					// метка
					if( is_tag() )
						$out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
					// такса
					elseif( is_tax() ){
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
					}
				}
				// древовидная такса (рибрики)
				else {
					if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'parent' );
						$out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
					}
				}
			}
			// влоежния от записи без терминов
			elseif( is_attachment() ){
				$parent = get_post($post->post_parent);
				$parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if( is_post_type_hierarchical($parent->post_type) ){
					$parent_crumbs = $this->_page_crumbs($parent);
					$_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
				}

				$out = $this->_add_title( $_out, $post );
			}
			// записи без терминов
			elseif( is_singular() ){
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if( '' === $home_after ){
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
				&& ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
			){
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if( is_post_type_archive() && ! $paged_num )
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				// singular, paged post_type_archive, tax
				else{
					/*
ЭТО КАСТЫЛЬ
					*/
					$link = get_post_type_archive_link($ptype->name);
					if (strripos($link, '/shop2') !== false) {
						$link = str_replace('/shop2', '/products', $link);
					}

					$home_after = sprintf( $linkpatt, $link, $pt_title );

					$home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

		$out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ){
		$parent = $post->post_parent;

		$crumbs = array();
		while( $parent ){
			$page = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
			$parent = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse($crumbs) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ){
		$termlinks = array();
		$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
		while( $term_id ){
			$term       = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
			$term_id    = $term->parent;
		}

		if( $termlinks )
			return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ){
		$arg = & $this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title )
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			elseif( $arg->last_sep )
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif( $show_title )
			$add_to = sprintf( $arg->title_patt, $title );

		return $add_to;
	}

}
