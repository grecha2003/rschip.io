<?php

	define('RSCHIP_DIR_CSS', get_template_directory_uri() . '/css/');
	define('RSCHIP_DIR_JS', get_template_directory_uri() . '/js/');
	define('RSCHIP_DIR_LIBS', get_template_directory_uri() . '/libs/');
	define('RSCHIP_DIR_IMAGES', get_template_directory_uri() . '/assets/images/');


	include_once('includes/functions-modules/faq.php');
	include_once('includes/functions-modules/news.php');
	include_once('includes/functions-modules/shared.php');

	add_action('wp_enqueue_scripts', function () {
		// wp_enqueue_style('main', RS_DIR_CSS . 'styles.css');
		wp_enqueue_style('style', get_template_directory_uri()  . '/style.css');

		wp_localize_script( 'main', '_SERVER_DATA', array(
			'ajax_url'	=> admin_url( 'admin-ajax.php' )
		));

	});


	add_action('init', 'do_rewrite', 20, 0);

	//page brand id 336 || 438
	//page model id 338 || 440
	//page shop id 250 || 19

	function do_rewrite(){
		global $wp_rewrite;

		// $brandId = 336;
		// $modelId = 338;
		// $shopId = 250;

		$brandId = 438;
		$modelId = 440;
		$shopId = 19;

		add_rewrite_rule( '^shop/(.+)/(.+)/(.+)', 'index.php?page_id='.$shopId.'&brand=$matches[1]&model=$matches[2]&modification=$matches[3]', 'top' );
		add_rewrite_rule( '^shop/(.+)/(.+)', 'index.php?page_id='.$modelId.'&brand=$matches[1]&model=$matches[2]', 'top' );
		add_rewrite_rule( '^shop/(.+)', 'index.php?page_id='.$brandId.'&brand=$matches[1]', 'top' );

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


	add_action('after_setup_theme', function () {
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('post-formats', ['aside', 'video']);
		
	});

	add_filter( 'upload_mimes', 'svg_upload_allow' );

	# Добавляет SVG в список разрешенных для загрузки файлов.
	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';
	
		return $mimes;
	}
	add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

	add_action('widgets_init', function () {
		

		

		register_sidebar([
			'name'          => 'Social',
			'id'            => 'footer-social',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);

		register_sidebar([
			'name'          => 'Footer Advantages Item 1',
			'id'            => 'footer-advantages-item1',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
		register_sidebar([
			'name'          => 'Footer Advantages Item 2',
			'id'            => 'footer-advantages-item2',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
		register_sidebar([
			'name'          => 'Footer Advantages Item 3',
			'id'            => 'footer-advantages-item3',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);

		
	});

	add_action('after_setup_theme', function () {
        register_nav_menu('headerNavigation', 'Header navigation');
        register_nav_menu('mobileNavigation', 'Header menu mobile');
        register_nav_menu('footerNav', 'Footer links privacy');
        register_nav_menu('footerLinksItem1', 'Footer nav links 1');
        register_nav_menu('footerLinksItem2', 'Footer nav links 2');
    });

	function wp_nav_custom_menu($menu_name, $link_class_name) {
		// $menu_name = 'nav-primary'; // specify custom menu name $marker="icon-heart"
		if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
			$menu = wp_get_nav_menu_object($locations[$menu_name]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);
		
			$menu_list = '' ."\n";
			foreach ((array) $menu_items as $key => $menu_item) {
				
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= "\t\t\t\t\t". '<a class="'.$link_class_name.'" href="'. $url .'">'. $title .'</a>' ."\n";
				
				
			}
		} else {
			// $menu_list = '<!-- no list defined -->';
		}
		echo $menu_list;
	}



	add_action( 'after_setup_theme', 'mywoo_add_woocommerce_support' );
	function mywoo_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	function wsb_add_to_cart_button( ) {
		global $product;
	
		$classes = implode( ' ',  array(
			'button',
			'product_type_' . $product->get_type(),
			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
			$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
		)  );
	
		return apply_filters( 'woocommerce_loop_add_to_cart_link',
			sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="page__btn page__btn_notTransparent">ADD TO BAG</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				esc_attr( isset( $quantity ) ? $quantity : 1 ),
				esc_attr( isset( $classes ) ? $classes : 'button' ),
				esc_attr( $product->get_type() ),
				esc_html( $product->add_to_cart_text() )
			),
		$product );
	} 

	
/**
 * Добавляем поле на страницу оформления заказа
 */
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );

function my_custom_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h2>' . __('Write Selected car') . '</h2>';

    woocommerce_form_field( 'selected_car', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Ex: Rs:Acura CL 500 5.0i Gtr:Acura CL 500 5.0i'),
        'placeholder'   => __('Write this field'),
        ), $checkout->get_value( 'selected_car' ));

    echo '</div>';

}

/**
 * Выполнение формы заказа
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process() {
    // Проверяем, заполнено ли поле, если же нет, добавляем ошибку.
    if ( ! $_POST['selected_car'] )
        wc_add_notice( __( 'Pleace write field Selected car.' ), 'error' );
}

/**
 * Обновляем метаданные заказа со значением поля
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['selected_car'] ) ) {
        update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['selected_car'] ) );
    }
}

/**
 * Выводим значение поля на странице редактирования заказа
 */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Selectrd car').':</strong> ' . get_post_meta( $order->id, 'My Field', true ) . '</p>';
}

function woocommerce_ajax_add_to_cart_js() {
    if (function_exists('is_product') && is_product()) {
        wp_enqueue_script('woocommerce-ajax-add-to-cart', plugin_dir_url(__FILE__) . 'assets/ajax-add-to-cart.js', array('jquery'), '', true);
    }
}
add_action('wp_enqueue_scripts', 'woocommerce_ajax_add_to_cart_js', 99);


add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
        
function woocommerce_ajax_add_to_cart() {

	$product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
	$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
	$variation_id = absint($_POST['variation_id']);
	$passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
	$product_status = get_post_status($product_id);

	if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

		do_action('woocommerce_ajax_added_to_cart', $product_id);

		if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
			wc_add_to_cart_message(array($product_id => $quantity), true);
		}

		WC_AJAX :: get_refreshed_fragments();
	} else {

		$data = array(
			'error' => true,
			'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

		echo wp_send_json($data);
	}

	wp_die();
}
//https://quadlayers.com/woocommerce-ajax-add-to-cart/


function selectBox($productName){
	echo "<div class='selectBox' data-productname='$productName'>
				<div class='selectBoxText'>Find out how many Horsepowers you can add to your Car</div>
				<div class='selectBoxContainer'>
					<div class='select Brands'>
						<div class='select-box'></div>
					</div>
					<div class='select Models'>
						<div class='select-box'> </div>
					</div>
					<div class='select Modification'>
						<div class='select-box'> </div>
					</div>
					<div class='selectBoxAction'>
						<div class='selectBoxSearch'>
							<div class='svg-iconSearch svg-iconSearch-box'></div>
						</div>
						<div class='selectBoxActionSelected'>
							<div class='selectBoxActionPrice'>$369</div><a class='page__btn page__btn_notTransparent'
								href='cart/cart.html'>To cart</a>
						</div>
					</div>
				</div>
				<a class='selectBoxLink js-open-modal' href='javascript:void(0)'
					data-modal='modalCarCantfind'>Can’t find my Car</a>
		</div>";
}

// Поля должны заводиться через админку
// Ajax-отправка формы обратной связи
add_action('wp_ajax_order', 'orderFormHandler');
add_action('wp_ajax_nopriv_order', 'orderFormHandler');

function orderFormHandler() {
    if(!wp_verify_nonce($_POST['_wpnonce'], THEME_NONCE)){
		die('Stop hacker!');
	}

    if ($_POST['_url'] == "https://rschipperformance.com/mform/") {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['comment']);

        $to = 'ilia.workproffile@gmail.com';
        $subject = 'Test request Rschip';
        $body = 'Name: '.$name.' <br> Phone: '.$phone.' <br> Email: '.$email.' <br> Comment: '.$message.'';
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail( $to, $subject, $body, $headers );

        wp_send_json_success([
            'message' => 'Thanks!',
        ]);
    } 
}
