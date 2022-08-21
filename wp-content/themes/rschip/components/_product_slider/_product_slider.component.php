<?php
$productSliderACF = get_field('_product_slider');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productSliderACF)) :
?>
    <?php if ($productSliderACF["isShow"]) : ?>
        <?php
            // $thisProduct = get_field_object('select_product')["value"][0];
            $thisProduct = $productSliderACF['select_product'];
            // echo '<pre>';
            // var_dump($thisProduct);
            // echo '</pre>';

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
        <?php endif; ?>
<?php endif; ?>