<?php
/**
 * Template Name: Dealers page
 *
 * 
 */

get_header();?>
<div class="dealers">
          <div class="wrap">
            <h1 class="dealers__title">FInd your RSCHIP reseller</h1>
          </div>
          <div class="map">
            <div class="map__canvas" id="map-init"></div>
            <input class="hidden" id="map-trigger" type="checkbox">
            <div class="map__cover">
              <label class="btn btn-orange map__btn" for="map-trigger">See the map</label>
            </div>
          </div>
          <div class="wrap">
            <div class="btn-section"><a class="btn btn-lg btn-orange scroll-to" href="#wpcf7-f94-o1" data-ripple-color="#FFFFFF">Become a dealer</a></div>
            <ul class="dealers-list">
              <li class="dealers-list__item"></li>
            </ul>
            <div class="contacts-form">
              <h2 class="section-title-1 contacts-form__title">Become a dealer</h2>
              <p>If you are looking for an easy way to increase revenue for your business, join the RSChip reseller family now! You'll receive marketing materials, technical support, and sales assistance from our dedicated B2B managers.</p>
              <p>Join RSChip now and become our trusted partner: <a href="mailto:support@rschipus.com">support@rschipus.com</a></p>
              <?= do_shortcode('[contact-form-7 id="94" title="dealer"]')?>
            </div>
          </div>
        </div>
        <div class="advantages">
          <div class="wrap">
            <div class="row advantages__list">
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#shieldIcon"/>
                  </svg>
                  <div class="advantages__item-title">Does not void <br>your warranty</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#usaIcon"/>
                  </svg>
                  <div class="advantages__item-title">Made <br>in the USA</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#plugIcon"/>
                  </svg>
                  <div class="advantages__item-title">OBD-II Plug&Play <br>installation</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 advantages__item">
                <div class="advantages__item-wrap">
                  <svg class="advantages__item-icon" role="img">
                    <title>Icon</title>
                    <use class="svg-i" xlink:href="#heartIcon"/>
                  </svg>
                  <div class="advantages__item-title">Safe for <br>your engine</div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php get_footer();