<?php
/*
	Template Name: Tpl. Mform
*/
?>
<?php get_header(); ?>
<main class="page pageCart">
    <div class="wrapper">
    <?php
if (have_posts()): while (have_posts()): the_post(); ?>

<form action="" method="post" id="OrderForm">
    <input type="hidden" name="action" value="order">
    <input type="hidden" id="sessionid" name="sessionid" value="">
    <div class="row">

        <div class="col-xl-12">
            <div class="inputContainer">
                <div class="md-form inputWrap">
                    <label class="awesomeLabel" for="Fio"><span>ФИО контактного лица</span></label>
                    <input class="form-control" type="text" id="Fio" name="Fio"
                            data-parsley-required="true"
                            data-validation-minlength="0" data-parsley-trigger="focusout"
                            data-parsley-id="10" value>
                </div>
                <div class="helperText"></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="inputContainer">
                <div class="md-form inputWrap">
                    <label class="awesomeLabel" for="ClientInn"><span>ИНН</span></label>
                    <input class="form-control" type="text" id="ClientInn" name="ClientInn"
                            data-parsley-required="true" data-validation-minlength="0"
                            data-parsley-trigger="focusout" data-parsley-id="10" value>
                </div>
                <div class="helperText"></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="inputContainer">
                <div class="md-form inputWrap">
                    <label class="awesomeLabel" for="city"><span>Город</span></label>
                    <input class="form-control" type="text" id="city" name="city"
                            data-parsley-required="true" data-validation-minlength="0"
                            data-parsley-trigger="focusout" data-parsley-id="10" value>
                </div>
                <div class="helperText"></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="inputContainer">
                <div class="md-form inputWrap">
                    <label class="awesomeLabel" for="Phone"><span>Телефон</span></label>
                    <input class="form-control" type="tel" id="Phone" name="Phone"
                            data-parsley-required="true" data-validation-minlength="0"
                            data-parsley-trigger="focusout" data-parsley-id="10" value>
                </div>
                <div class="helperText"></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="inputContainer">
                <div class="md-form inputWrap">
                    <label class="awesomeLabel" for="Email"><span>Электронный адрес</span></label>
                    <input class="form-control" type="email" id="Email" name="Email"
                            data-parsley-required="true" data-validation-minlength="0"
                            data-parsley-trigger="focusout" data-parsley-id="10" value>
                </div>
                <div class="helperText"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="hasTextarea mb-4 inputWrap">
                <div class="md-form">
                    <label class="awesomeLabel" for="Comment"><span>Описание вопроса</span></label>
                    <textarea class="form-control md-textarea" name="Comment" id="Comment" cols="30"
                                rows="10"></textarea>
                    <div class="inputWrap--outline"></div>
                </div>
            </div>
        </div>


        <div class="form-group form-check">
            <p class="of-info-paragraph">Нажимая на кнопку «Отправить», вы соглашаетесь на обработку <a
                        href=""
                        target="_blank"> персональных данных</a></p>
            <input type="hidden" name="private_policy" checked="checked" value="on">
            <!--<input type="hidden" id="ClientInn" name="ClientInn" data-parsley-required="true" data-validation-minlength="0" data-parsley-trigger="focusout" data-parsley-id="22" value="000000000000">-->
        </div>

        <div class="col-xl-5 text-center text-xl-right of-button-padding">
            <button class="of-btn-primary btn btn-lg btn-wide btn-primary w-100 w-xl-auto"
                    type="submit">
                Отправить
            </button>
        </div>
    </div>
</form>
<?php endwhile; endif; ?>
    </div>

</main>



<?php get_footer(); ?>