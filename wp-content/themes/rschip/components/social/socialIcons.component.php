<!-- <div class="socialIcons">
    <a class="icon" href="javascript:void(0)">
        <img src="assets/images/svg/iconInstagramWhite.svg" alt="iconInstagramWhite">
    </a>
    <a class="icon" href="javascript:void(0)">
        <img src="assets/images/svg/iconFacebookWhite.svg" alt="iconFacebookWhite">
    </a>
    <a class="icon" href="javascript:void(0)">
        <img src="assets/images/svg/iconYoutubeWhite.svg" alt="iconYoutubeWhite">
    </a>
</div> -->
<?php if (is_active_sidebar('footer-social')) : ?>
    <?php dynamic_sidebar('footer-social') ?>
<?php endif; ?>