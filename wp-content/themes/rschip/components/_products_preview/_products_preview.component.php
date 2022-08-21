<?php
$productsPreviewACF = get_field('_products_preview');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productsPreviewACF)) :

?>
    <?php if ($productsPreviewACF["isShow"]) : ?>
        <?php
            $thisProducts = $productsPreviewACF["products"];
            // echo '<pre>';
            // var_dump($thisProducts);
            // echo '</pre>';
            if (!empty($thisProducts)) : ?>
                <section class="products">
                    <h2 class="page__title-h2 page__title-h2_big">shop
                        <span class="page__title-h2_small page__title-h2_absolute">Product</span>
                    </h2>
                    <div class="wrapper">
                        <div class="productsFlexContainer">

                            <?php foreach ($thisProducts as $thisProduct) {
                                $post = get_post($thisProduct->ID);
                                setup_postdata($post);

                                $product = wc_get_product($thisProduct->ID);

                                wc_get_template_part('content', 'product-preview');

                                
                            } ?>
                        </div>
                    </div>
                </section>
        <?php endif;wp_reset_postdata(); ?>
    <?php endif; ?>
<?php endif; ?>