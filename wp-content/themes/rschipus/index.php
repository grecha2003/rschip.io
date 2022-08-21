<?php
// this is a new rschipus theme
$ip = file_get_contents('http://ip-api.com/json/'.$_SERVER['REMOTE_ADDR']);
$ip = json_decode($ip, true);
$country = $ip['country'];

if ($country == 'Taiwan') {
	header("Location: http://www.rschip.tw/");
	exit;
}

	get_header();

	get_template_part('partials/content', 'index2' );

	get_footer();

// if ($country != 'Russia') {
// 	get_header();

// 	get_template_part('partials/content', 'index2' );

// 	get_footer();
// } else {
// 	header("HTTP/1.0 404 Not Found");
// }