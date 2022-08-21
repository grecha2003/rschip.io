<?php
$bannerACF = get_field('_banner');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($bannerACF)) :

?>
    <?php if ($bannerACF["isShow"]) : ?>

        <section class="banner <?php echo $bannerACF['bannerClass']; ?>">
            <div class="wrapper">
                <div class="bannerFlexContainer">
                    <div class="bannerText">
                        <?php if ($bannerACF["titleBig"]) : ?>
                            <h1 class="page__title-h1_big">
                                <?php echo $bannerACF['titleBig']; ?>
                            </h1>
                        <?php endif; ?>

                        <h1 class="page__title-h1">
                            <?php if ($bannerACF["span1"]) : ?>
                                <span class="page_red">
                                    <?php echo $bannerACF['span1']; ?>
                                </span>
                            <?php endif; ?>

                            <?php if ($bannerACF["span2"]) {
                                echo $bannerACF['span2'];
                            } ?>

                            <?php if ($bannerACF["span3"]) : ?>
                                <span class="block">
                                    <?php echo $bannerACF['span3']; ?>
                                </span>
                            <?php endif; ?>
                        </h1>

                        <?php if ($bannerACF["description"]) : ?>
                            <p class="pageText">
                                <?php echo $bannerACF['description']; ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($bannerACF["isBannerImgChipMain"]) : ?>
                        <div class="bannerImgChipMain">
                            <picture
                                class="bannerImgChipMain__img"> 
                                <img 
                                src="assets/images/png/main/imgBannerImgChipMain1.png"
                                alt="imgBannerImgChipMain">
                            </picture>
                            <a class="page__btn" href="/rs/">LEARN MORE</a>
                        </div>
                        <?php endif; ?>
                        <?php include(TEMPLATEPATH . '/components/social/socialIcons.component.php'); ?>

                    </div>

                    <?php if ($bannerACF['isAdvantages']) : ?>
                        <div class="advantages">
                            <div class="advantagesFlexContainer">

                                <?php foreach ($bannerACF['adv'] as $advantage) : ?>
                                    <?php if (!empty($advantage['icon'])) : ?>
                                        <div class="advantagesItem">
                                            <div class="advantagesItem__icon">
                                                <img src="<?php echo $advantage['icon']; ?>" alt="">
                                            </div>
                                            <div class="advantagesItem__text"><?php echo $advantage['text']; ?></div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($bannerACF['imagesBg']) : ?>
                        <div class="bannerImgBg">
                            <div class="bannerImgBg__logo"> <img src="assets/images/svg/logo-banner.svg" alt=""></div>
                            <picture>
                                <?php if (!empty($bannerACF['imagesBg']['img5'])) : ?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img5']; ?>" media="(min-width: 1441px)">
                                <?php endif; ?>
                                <?php if (!empty($bannerACF['imagesBg']['img4'])) : ?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img4']; ?>" media="(min-width: 1366px)">
                                <?php endif; ?>
                                <?php if (!empty($bannerACF['imagesBg']['img3'])) : ?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img3']; ?>" media="(min-width: 992px)">
                                <?php endif; ?>
                                <?php if (!empty($bannerACF['imagesBg']['img2'])) : ?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img2']; ?>" media="(min-width: 768px)">
                                <?php endif; ?>
                                <img src="<?php echo $bannerACF['imagesBg']['img1']; ?>" alt="imgBannerBg">
                            </picture>
                        </div>
                    <?php endif; ?>

                    <?php if ($bannerACF['isImageChip']) : ?>
                        <div class="bannerImgChip">
                            <picture>
                                <?php if (!empty($bannerACF['imagesChip']['md@1'])) : ?>
                                    <source type="image/png" srcset="
                                            <?php echo $bannerACF['imagesChip']['md@1'] . ' 1x, ' . $bannerACF['imagesChip']['md@2'] . ' 2x' ?>" media="(min-width: 992px)">
                                <?php endif; ?>

                                <?php if (!empty($bannerACF['imagesChip']['sm@1'])) : ?>
                                    <source type="image/png" srcset="
                                        <?php echo $bannerACF['imagesChip']['sm@1'] . ' 1x, ' . $bannerACF['imagesChip']['sm@2'] . ' 2x' ?>" media="(min-width: 768px)">
                                <?php endif; ?>

                                <img src="<?php echo $bannerACF['imagesChip']['xs@1']; ?>" srcset="<?php echo $bannerACF['imagesChip']['xs@2']; ?> 2x" alt="imgBannerRsChipXs">
                            </picture>
                        </div>
                    <?php endif; ?>
                    <?php if ($bannerACF['isImageChipMain']) : ?>
                    <?php endif; ?>

                    <?php if ($bannerACF['isSelectProduct']) : ?>
                        <div class="bannerSelect">
                            <?php
                            $thisProduct = get_field_object('select_product')["value"][0];

                            if (!empty($thisProduct)) :
                                // echo $thisProduct->ID;
                                $post = get_post($thisProduct->ID);
                                setup_postdata($post);

                                $productId =  $product->id;
                                $productSku = $product->sku;
                                $productPrice = $product->get_price_html();
                                $productDataName =  get_field('data_productname');
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
                                                    <?php do_action('woocommerce_after_shop_loop_item', 'replace_add_to_cart');
                                                    function replace_add_to_cart()
                                                    {
                                                        global $product;
                                                        $link = $product->get_permalink();
                                                        echo do_shortcode('<a href="' . $link . '" class="button addtocartbutton">Learn more</a>');
                                                    }
                                                    ?>
                                                </div>
                                                <!-- <a class="page__btn page__btn_notTransparent" href="cart/cart.html">To cart</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a class="selectBoxLink js-open-modal" href="javascript:void(0)" data-modal="modalCarCantfind">Can’t
                                        find my Car</a>
                                </div>
                            <?php else : ?>
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
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    <?php endif; ?>
<?php endif; ?>