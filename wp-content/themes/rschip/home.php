<?php get_header(); ?>
<!-- home -->
<main class="page mainPage">
    <?php include(TEMPLATEPATH . '/components/banner/bannerMain.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/products/products.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/faq/faq.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/news/news.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/social/social.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/gallary/gallary.component.php'); ?>

   
</main>
<?php include(TEMPLATEPATH . '/components/modals/modalCarCantfind.php'); ?>
<?php include(TEMPLATEPATH . '/components/modals/modalNews.php'); ?>
<?php include(TEMPLATEPATH . '/components/modals/modalGallary.php'); ?>
<!-- /home -->
<?php get_footer(); ?>