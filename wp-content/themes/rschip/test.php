<?php header('Content-Type: text/html; charset=utf-8'); require("wp-blog-header.php"); ?>

<?php $author_id = wp_get_current_user()->ID;
 update_field('footer_advantages_3', '10000', "user_".$author_id); ?> 

<?php /*update_field("footer_advantages_3","Value update", "user_2378"); */?>
