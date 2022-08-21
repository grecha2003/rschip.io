<?php
/**
* Template Name: Trade In page
*
*
*/

get_header();?>

<div class="upgrade-banner">
  <picture class="responsive-img upgrade-banner__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-xl.jpg, <?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-xl@2x.jpg 2x" media="(min-width: 1200px)">
    <source srcset="<?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-md.jpg, <?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-md@2x.jpg 2x" media="(min-width: 768px)">
    <source srcset="<?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-xs.jpg, <?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-xs@2x.jpg 2x">
    <img src="<?php echo get_template_directory_uri(); ?>/images/media/upgrade-banner-xl.jpg" alt data-object-fit="cover">
      </picture>
    <div class="wrap upgrade-banner__container">
      <h2 class="upgrade-banner__title">upgrade your RSCHIP</h2>
    </div>
</div>
<div class="tradein-section">
  <div class="wrap">
    <h2 class="tradein-section__title tradein-section__title_mb-3">
            <p>RSCHIP PLUS upgrade program.</p>
            <p>Get up to 40% discount with free worldwide delivery</p>
            <p>toward your new RSCHIP plus.</p>
          </h2>
    <h2 class="tradein-section__title tradein-section__title_mb-2">How does the upgrade program work?</h2>
    <div class="tradein-steps tradein-steps_mb-1">
      <ol class="tradein-steps__list">
        <li class="tradein-steps__item">
          <div class="tradein-step-item"><span class="tradein-step-item__num"></span>
            <div class="tradein-step-item__text">Fill-out the form and submit it for review. After we confirm your ownership we will proceed with your request.</div>
          </div>
        </li>
        <li class="tradein-steps__item">
          <div class="tradein-step-item"><span class="tradein-step-item__num"></span>
            <div class="tradein-step-item__text">You will receive a promo code to your email. Please apply the promo code at the checkout.</div>
          </div>
        </li>
        <li class="tradein-steps__item">
          <div class="tradein-step-item"><span class="tradein-step-item__num"></span>
            <div class="tradein-step-item__text">Enjoy your new chip and feel free to keep your old one. No need to send it back :)</div>
          </div>
        </li>
      </ol>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-10 col-lg-offset-1">
        <?//=do_shortcode('[contact-form-7 id="810" title="trade-in"]'); ?>
        <form class="tradein-form tradein-form_mb-1" id="tradein-form" novalidate="novalidate">
          <div class="tradein-form__required-label">Required field *</div>
          <div class="row tradein-form__row">
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_email">E-mail address *</label>
                <input class="input-box__input" type="email" id="input_email" placeholder="my answer" name="email">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_tel">Phone number *</label>
                <input class="input-box__input" type="tel" id="input_tel" placeholder="my answer" name="phone">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_serial_number">RSCHIP serial number *</label>
                <input class="input-box__input" type="text" id="input_serial_number" placeholder="my answer" name="serial-number">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="tradein-form__field-descr">
                <p><b>RSCHIP serial number</b> (engraved on the backside of the enclosure) If your version does not have a serial number, please contact our support at <b><a href="mailto:rschiphelp@gmail.com">rschiphelp@gmail.com</a></b>
                </p>
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_fname">First name *</label>
                <input class="input-box__input" type="text" id="input_fname" placeholder="my answer" name="fname">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_lname">Last name *</label>
                <input class="input-box__input" type="text" id="input_lname" placeholder="my answer" name="lname">
              </div>
            </div>
            <div class="col-lg-12 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_adress">Address (city, street, house, apartment number) *</label>
                <input class="input-box__input" type="text" id="input_adress" placeholder="my answer" name="adress">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_zip">Zip Code</label>
                <input class="input-box__input" type="text" id="input_zip" placeholder="my answer" name="zip">
              </div>
            </div>
            <div class="col-lg-6 tradein-form__control tradein-form__col">
              <div class="input-box">
                <label class="input-box__label" for="input_country">Country *</label>
                <input class="input-box__input" type="text" id="input_country" placeholder="my answer" name="country">
              </div>
            </div>
          </div>
          <div class="tradein-form__submit-wrap">
            <button class="tradein-form__button" type="submit">SUBMIT APPLICATION</button>
          </div>
          <div class="tradein-form__info">Copies of the replies will be sent to your address</div>
        </form> 
        <script>
        // used plugin docs is here - https://github.com/ansman/validate.js
        document.addEventListener("DOMContentLoaded", function() {
          var options = {
            formSelector: '#tradein-form',
            onSubmit: function(form) {
              // jQuery("#tradein-form").ajaxForm({url: 'send.php', type: 'post'})
              $.post('send.php', $('#tradein-form').serialize());

              form.reset();

              $.magnificPopup.open({
                items: {
                  src: $('#sucess-submit'),
                  type: 'inline'
                }
              });
            },
            constraints: {
              phone: {
                presence: true,
                format: {
                  pattern: "^[0-9 ()+-]+$",
                  flags: "i",
                  message: "can only contain +- and 0-9"
                },
                length: {
                  minimum: 3,
                  maximum: 20
                }
              },
              email: {
                presence: true,
                email: true,
              },
              'serial-number': {
                presence: true,
              },
              fname: {
                presence: true,
              },
              lname: {
                presence: true,
              },
              adress: {
                presence: true,
              },
              country: {
                presence: true,
              }
            }
          }

          var formWithValidation = new WithValidation(options)
        });

        </script>
        <h2 class="tradein-section__title tradein-section__title_mb-1">FREQUENTLY ASKED QUESTIONS</h2>
      </div>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <div class="tradein-faq">
          <ul class="tradein-faq__list">
            <li class="tradein-faq__item">
              <dl class="tradein-faq-item">
                <dt class="tradein-faq-item__head">
                  <div class="tradein-faq-item__title">Who is eligible?</div><i class="tradein-faq-item__icon"></i>
                </dt>
                <dd class="tradein-faq-item__body">
                  <div class="tradein-faq-item__content">All Rschip owners with RSCHIP 1st and RSCHIP 2nd generation are eligible for the trade-in.</div>
                </dd>
              </dl>
            </li>
            <li class="tradein-faq__item">
              <dl class="tradein-faq-item">
                <dt class="tradein-faq-item__head">
                  <div class="tradein-faq-item__title">Why upgrade?</div><i class="tradein-faq-item__icon"></i>
                </dt>
                <dd class="tradein-faq-item__body">
                  <div class="tradein-faq-item__content">We worked hard on perfecting the RSCHIP. New RSCHIP plus introduces:
                    <br>- new patent hardware and firmware core to make the gains more consistent
                    <br>- new heat mitigation system, preventing your chip from overheating
                    <br>- new redesigned app
                    <br>- new enclosure with magnet mount
                    <br>Leran more about <a href="/product/rschip.html">RSCHIP plus</a></div>
                </dd>
              </dl>
            </li>
            <li class="tradein-faq__item">
              <dl class="tradein-faq-item">
                <dt class="tradein-faq-item__head">
                  <div class="tradein-faq-item__title">How much does the shipping cost?</div><i class="tradein-faq-item__icon"></i>
                </dt>
                <dd class="tradein-faq-item__body">
                  <div class="tradein-faq-item__content">Free delivery worldwide to any location with DHL.</div>
                </dd>
              </dl>
            </li>
            <li class="tradein-faq__item">
              <dl class="tradein-faq-item">
                <dt class="tradein-faq-item__head">
                  <div class="tradein-faq-item__title">Should I send the old chip back?</div><i class="tradein-faq-item__icon"></i>
                </dt>
                <dd class="tradein-faq-item__body">
                  <div class="tradein-faq-item__content">No</div>
                </dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="sucess-submit" class="white-popup-block mfp-hide text-center">
  <h2>The application was successfully submitted. We will contact you shortly.</h2>
  <br>
  <button type="button" class="btn btn-orange-border" onclick="$.magnificPopup.close();">Ok</button>
</div>

<?php get_footer();