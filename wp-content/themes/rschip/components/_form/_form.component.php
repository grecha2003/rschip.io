<?php
$formACF = get_field('_form');

if (!empty($formACF)) :
?>
    <?php if ($formACF["isShow"]) : ?>
        <section class="form">
            <div class="wrapper">
                <div class="formFlexContaier">
                    <div class="formAction">
                        <h2 class="page__title-h2">Get in touch. 
                            <span class="page_red">Let’s Say Hi!</span>
                        </h2>
                        
                        <?php echo $formACF['formCode']; ?>

                        <!-- <form class="page__from" action="javascript:void(0)">
                            <input class="page__input" type="text" placeholder="First Name">
                            <input class="page__input" type="text" placeholder="Last Name">
                            <input class="page__input" type="email" placeholder="Email">
                            <textarea class="page__textarea" name="message" placeholder="Message"></textarea>
                            <button class="page__btn">send Message</button>
                        </form> -->
                    </div>
                    <div class="formImg">
                        <img src="assets/images/png/shared/imgForm.png" alt="imgForm">
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>