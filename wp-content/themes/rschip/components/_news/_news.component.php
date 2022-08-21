<?php
$newsACF = get_field('_news');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($newsACF)) :

?>
    <?php if ($newsACF["isShow"]) : ?>
        <?php
            $newsPosts = get_field_object('news_posts')["value"];

            if (!empty($newsPosts)) : ?>

            <section class="news">
                <div class="wrapper">
                    <h2 class="page__title-h2_small">Our Blog</h2>
                    <h3 class="page__title-h3">News & Events</h3>
                    <div class="newsFlexContainer">
                        <?php foreach( $newsPosts as $post ) : 
                            setup_postdata( $post );
                            $img = get_field('news_thumbnail');?>
                            <div class="newsItem js-open-modal" data-modal="modalNews">
                                <div class="newsItemImg">
                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" title="<?php echo $img['title']; ?>">
                                </div>
                                <h4 class="newsItemTitle"><?php the_title(); ?></h4>
                                <div class="modalContent">
                                    <h3 class="modalTitle"><?php the_title(); ?></h3>
                                    <div class="modalDate"><?php the_date(); ?></div>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endforeach;  wp_reset_postdata();?>

                    </div>
                </div>
            </section>

            <?php endif; ?>
        <?php endif; ?>
<?php endif; ?>