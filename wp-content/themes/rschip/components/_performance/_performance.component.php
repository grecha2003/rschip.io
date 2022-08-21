<?php
$performanceACF = get_field('_performance');
$thisProduct = $performanceACF['select_product'];
if($thisProduct ){
    $post = get_post($thisProduct->ID);
    setup_postdata($post);
    
    $productId =  $product->id;
    $productSku = $product->sku;
    $productPrice = $product->get_price_html();
}


// echo '<pre>';
// var_dump($bannerACF);
// echo '</pre>';
if (!empty($performanceACF)) :
    
?>
    <?php if ($performanceACF["isShow"]) : ?>
        <section class="performance" data-productname="<?php echo $productSku; ?>">
            <div class="wrapper">
                <h2 class="page__title-h2_small">Сomparison</h2>
                <h3 class="page__title-h3">Performance figures</h3>
                <div class="performanceTable">
                    <div class="performanceTable__Header">
                        <div class="performanceTableItemTd">State</div>
                        <div class="performanceTableItemTd">Power</div>
                        <div class="performanceTableItemTd">Torque</div>
                        <div class="performanceTableItemTd">0-60 mph</div>
                    </div>
                    <div class="performanceTable__Body">
                        <div class="performanceTableItem default">
                            <div class="performanceTableItemTd">
                                <div class="stock">Stock</div>
                                <div class="carName">Porsche 911 Carrera</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">Power</div>
                                <div class="number"><span class="hp">385 </span>HP</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">Torque</div>
                                <div class="number"> <span class="nm">450 </span>NM</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">0-60 mph</div>
                                <div class="number"><span class="sec">4.2 </span>sec</div>
                            </div>
                        </div>
                        <div class="performanceTableItem withRs">
                            <div class="performanceTableItemTd">
                                <div class="stock">With RS</div>
                                <div class="carName">Porsche 911 Carrera</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">Power</div>
                                <div class="number"> <span class="hp">410* </span>HP</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">Torque</div>
                                <div class="number"> <span class="nm">475* </span>NM</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div class="title">0-60 mph</div>
                                <div class="number"><span class="sec">-0.39* </span>sec</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="performanceImg"><img src="assets/images/png/shared/imgPerformance.png" alt="imgPerformance">
                </div>
            </div>
           
            
                <?php

                    if(!empty($thisProduct)) :
                    ?>
                    <div class="selectBox" data-productname="<?php echo $productSku; ?>">
                        <div class="selectBoxText">Find out how many Horsepowers you can add to your Car</div>
                        <div class="selectBoxContainer">
                            <?php include(TEMPLATEPATH . '/components/select/select.component.php'); ?>

                            <div class="selectBoxAction">
                                <div class="selectBoxSearch">
                                    <div class="svg-iconSearch svg-iconSearch-box"></div>
                                </div>
                                <div class="selectBoxActionSelected">
                                    <div class="selectBoxActionPrice"><?php echo $productPrice; ?></div>
                                    <div class="selectBoxActionSelectedAddToCartWoocommerce">
                                        <?php do_action('woocommerce_after_shop_loop_item'); ?>
                                    </div>
                                    <!-- <a class="page__btn page__btn_notTransparent" href="cart/cart.html">To cart</a> -->
                                </div>
                            </div>
                        </div>
                        <a class="selectBoxLink js-open-modal" href="javascript:void(0)" data-modal="modalCarCantfind">Can’t
                            find my Car</a>
                    </div>
                    <?php else: ?>
                        <div class="selectBox" data-productname="">
                        <div class="selectBoxText">Find out how many Horsepowers you can add to your Car</div>
                        <div class="selectBoxContainer">
                            <?php include(TEMPLATEPATH . '/components/select/select.component.php'); ?>

                            <div class="selectBoxAction">
                                <div class="selectBoxSearch">
                                    <div class="svg-iconSearch svg-iconSearch-box"></div>
                                </div>
                                <div class="selectBoxActionSelected">
                                    <div class="selectBoxActionPrice"></div>
                                    <div>
                                        
                                    </div>
                                    <a class="page__btn page__btn_notTransparent" href="/shop/">To shop</a>
                                </div>
                            </div>
                        </div>
                        <a class="selectBoxLink js-open-modal" href="javascript:void(0)" data-modal="modalCarCantfind">Can’t
                            find my Car</a>
                    </div>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>

        </section>
    <?php endif; ?>
<?php endif; ?>