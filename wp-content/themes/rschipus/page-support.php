<?php
/**
 * Template Name: Support page
 *
 *
 */

get_header();
?>


<div class="section support">
  <div class="wrap">
    <h1 class="section-title-1 support__title">Here you will find answers to the most frequently asked questions</h1>
    <div class="faq-links">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4"><a class="scroll-to faq-links__item" href="#faqShipment">
          <div class="faq-links__item-title"><span>Ordering &amp; Shipment</span></div>
          <div class="hidden-xs faq-links__item-body"><img class="faq-links__img faq-links__img_type_1" src="<?php echo get_template_directory_uri(); ?>/images/media/delivery-man.jpg" alt=""></div></a>
        </div>
          <div class="col-sm-4"><a class="scroll-to faq-links__item" href="#faqRSCHIP">
            <div class="faq-links__item-title"><span>RSCHIP</span></div>
            <div class="hidden-xs faq-links__item-body"><img class="faq-links__img faq-links__img_type_2" src="<?php echo get_template_directory_uri(); ?>/images/media/Rschip_000.png" alt=""></div></a>
          </div>
            <!-- <div class="col-sm-4"><a class="scroll-to faq-links__item" href="#faqRSECO">
              <div class="faq-links__item-title"><span>RSECO</span></div>
              <div class="hidden-xs faq-links__item-body"><img class="faq-links__img faq-links__img_type_3" src="<?php //echo get_template_directory_uri(); ?>/images/media/rseco-small.png" alt=""></div></a>
            </div> -->
            <div class="col-sm-2"></div>
            </div>
          </div>
        </div>
        <div class="wrap">
         <?php $post = get_post($post_id = 4);
         echo $post->post_content; 
         ?>

         <div class="support-form">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="support-form__title">Haven't found an answer<br>to your question?</h2>
                    <?=do_shortcode('[contact-form-7 id="197" title="form-support"]'); ?>
                </div>
            </div>
        </div>
         <!-- Здесь будет динамический вывод вопросов с ответами разбитый на 3 подрубрики (создаем кастомный тип поста FAQ и к нему 3 таксы - Ordering & Shipment. RSCHIP , RSECO) -->
         <!-- Здесь будет форма обратной связи через шорткод от  contact form 7 -->
       </div>
     </div>

     <?php get_footer();