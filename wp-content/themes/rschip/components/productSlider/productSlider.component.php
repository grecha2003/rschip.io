<?php
$thisProduct = get_field_object('select_product')["value"][0];
if (!empty($thisProduct)) {

    $post = get_post($thisProduct->ID);
    setup_postdata($post);

    $productPrice = $product->get_price_html();
    $attachment_ids = $product->get_gallery_image_ids();
    $productImg = $product->get_image_id();

  
    $product = wc_get_product($thisProduct->ID);
                   
    wc_get_template_part('content', 'single-product');
    wp_reset_postdata(); 
}
?>