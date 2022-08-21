<?php get_header();?>
<div class="block-404">
          <div class="wrap">
            <div class="block-404__title">404</div>
            <div class="block-404__text">
              <p>The page you are looking for can't be found</p>
            </div>
          </div>
          <div class="questions">
            <div class="img-section questions__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/media/women-black.jpg')"></div>
          </div>
          <div class="wrap">
            <div class="b-contacts">
              <div class="b-contacts__icons"><a class="b-contacts__icons-item" data-remodal-target="modal-popup-callback" >
                  <svg class="b-contacts__icons-img b-contacts__icons-img_mod_cyrcled" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#telIcon"/>
                  </svg><span class="b-contacts__icons-text">Call us</span></a><a class="b-contacts__icons-item" data-remodal-target="modal-popup-feedback">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#mailIcon2"/>
                  </svg><span class="b-contacts__icons-text">Email us</span></a><a class="b-contacts__icons-item" href="https://www.facebook.com/rschipusa/" target="_blank">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#fbIcon"/>
                  </svg><span class="b-contacts__icons-text">Find us on <br>facebook</span></a></div>
              <div class="b-contacts__links">
                <p><a href="tel:+<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a></p>
                <p><a href="mailto:support@rschipus.com">support@rschipus.com</a></p>
              </div>
            </div>
            <div class="text-center">
              <div class="contacts__address">1201 East 5th Street North Little Rock, Arkansas USA, 72114</div>
            </div>
            
          </div>
        </div>
<?php get_footer();?>