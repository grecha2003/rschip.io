<?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

?>

<?php
function generateCoupon($length) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charsLength - 1)];
    }
    return $randomString;
	}

$coupon = generateCoupon(7);
print_r($_POST);
echo $coupon;
if(isset($_POST['subscribe_mail'])) {

$to = htmlspecialchars($_POST['subscribe_mail']);
$subject = 'Coupon for subscribe';
$message = '<html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Youre coupone is: '.$coupon.'</p>
                                         
                    </body>
                </html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From:  <not-reply@rschipus.com>\r\n";
//mail($to, $subject, $message, $headers);

$post_data = array(
  'post_title'    =>  $coupon,
  'post_content'  => $to,
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'shop_coupon'
);

// Вставляем запись в базу данных
//$post_id = wp_insert_post( $post_data );
}
else die;
?>