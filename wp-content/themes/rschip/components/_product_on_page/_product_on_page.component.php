<?php
$productOnPageACF = get_field('_product_on_page');
// echo '<pre>';
// var_dump($bannerACF);
// echo '</pre>';
// fixmee   
if (!empty($productOnPageACF)) :
?>
    <?php if ($productOnPageACF["isShow"]) : ?>

        <?php
            // $thisProduct = get_field_object('select_product')["value"][0];
            $thisProduct = $productOnPageACF['select_product'];
          
            echo '<pre>';
            // var_dump($thisProduct);
            // echo $thisProduct->ID;
            echo '</pre>';

            if (!empty($thisProduct)) :

                $post = get_post($thisProduct->ID);
                setup_postdata($post);

                $productPrice = $product->get_price_html();
                // echo $productImg; 

            ?>
            
            <section class="productOnPage">
                    <div class="wrapper">
                        <h2 class="page__title-h2_small">More Power</h2>
                        <h3 class="page__title-h3">
                            
                            <?php echo $productOnPageACF['span1']; ?>
                            <span class="page_red"> <?php echo $productOnPageACF['span2']; ?> </span>
                            <?php echo $productOnPageACF['span3']; ?></h3>
                        <div class="productOnPageFlexContainer">
                            <div class="productOnPageImg">
                                <picture>
                                    <source type="image/png" srcset="<?php echo $productOnPageACF['images']['md']; ?>" media="(min-width: 992px)">
                                    <source type="image/png" srcset="<?php echo $productOnPageACF['images']['sm']; ?>" media="(min-width: 768px)">
                                    <img src="<?php echo $productOnPageACF['images']['xs']; ?>" alt="imgRsChip">
                                 
                                </picture>
                            </div>
                            <div class="productOnPageText">
                                <h4 class="page__title-h4"><?php echo $productOnPageACF['text']; ?></h4>
                                <ul class="page__ul">
                                    <?php foreach($productOnPageACF['advantages'] as $advantage):?>
                                        <li class="page__li"> <i class="svg-iconMarker svg-iconMarker-box"></i><?php echo $advantage;?></li>
                                    <?php endforeach;?>
                                </ul>
                                <div class="productOnPagePrice"> 
                                    <div class="productsItemActionsAddToCartWoocommerce">
                                        <?php do_action('woocommerce_after_shop_loop_item'); ?>
                                        <div class="productOnPagePrice__cost"><?php echo $productPrice; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
            wp_reset_postdata();
            endif;?>
        <?php endif; ?>
<?php endif; ?>