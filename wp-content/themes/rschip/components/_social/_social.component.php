<?php
$socialACF = get_field('_social');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($socialACF)) :

?>
    <?php if ($socialACF["isShow"]) : ?>
        <section class="social">
            <div class="socialBg">
                <picture>
                    <source type="image/png" srcset="assets/images/png/shared/imgBgSocial-Md.png" media="(min-width: 992px)">
                    <source type="image/png" srcset="assets/images/png/shared/imgBgSocial-Sm.png" media="(min-width: 768px)">
                    <img src="assets/images/png/shared/imgBgSocial.png" alt="imgBgSocial">
                </picture>
            </div>
            <div class="socialText">
                <h2 class="page__title-h2 page__title-h2_big">Social <span class="page__title-h2_small page__title-h2_absolute">Connect</span></h2>
                <p class="page__text"> <span class="page__text_underline">Follow us </span>on social media</p>
            </div>
            <div class="socialBlockIcons">
                <?php include(TEMPLATEPATH . '/components/social/socialIcons.component.php'); ?>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>