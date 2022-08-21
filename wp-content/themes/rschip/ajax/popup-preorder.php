    <?php
 
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
 
?>
<div class="white-popup-block popup" id="callbackPopup">
  <div class="popup__descr">Please fill in the fields below<br>and we will call you back.</div>
  <div class="popup__form-wrap">
<?php echo do_shortcode('[contact-form-7 id="36" title="popup-preorder"]'); ?>


  </div>
</div>