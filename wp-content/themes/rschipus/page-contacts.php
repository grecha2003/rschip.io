<?php
/**
 * Template Name: Contact page
 *
 * 
 */

get_header();?>

<div class="contacts">
          <div class="wrap">
            <h1 class="contacts__title">Contact us</h1>
          </div>
          <div class="map map_size_small">
            <div class="map__canvas" id="mapit"></div>
            <input class="hidden" id="map-trigger" type="checkbox">
            <div class="map__cover">
              <label class="btn btn-orange map__btn" for="map-trigger">See the map</label>
            </div>
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
                  </svg><span class="b-contacts__icons-text">Email us</span></a><a class="b-contacts__icons-item" href="https://www.facebook.com/rschipchiptuningusa/" target="_blank">
                  <svg class="b-contacts__icons-img" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#fbIcon"/>
                  </svg><span class="b-contacts__icons-text">Find us on <br>facebook</span></a></div>
              <div class="b-contacts__links">
                <p><a href="tel:+<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a></p>
                <p><a href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a></p>
              </div>
            </div>
            <div class="text-center">
              <div class="contacts__address">1201 East 5th Street North Little Rock, Arkansas USA, 72114</div>
            </div>
            <div class="contacts-form">
              <?php 
              echo do_shortcode('[contact-form-7 id="52" html_id="dealers-form" title="form-contacts"]'); ?>
            </div>
            <script>
	            document.getElementById('user_country').value ='<?= $woocommerce->customer->get_country(); ?>';
            </script>
          </div>
        </div>
<?php get_footer();