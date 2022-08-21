<?php
    global $sharedACF;
    $sharedFieldsACF = $sharedACF['shared_fields'];
?>
<section class="modal modalCarCantfind" data-modal="modalCarCantfind"> <button class="modalClose icon-close js-modal-close"></button>
    <div class="modalContent">
        <h2 class="modalTitle">Can’t find <span class="page_red">my car</span></h2>
        <p>Please fill in the fields below and we will call you back</p>
        <?php echo $sharedFieldsACF["_popup_find_car"]; ?>
        <?php /*
        echo do_shortcode('[contact-form-7 id="662" title="popup-find-car"]'); */
        ?>
        <?php /*
        echo do_shortcode('[contact-form-7 id="475" title="popup-find-car"]')
        */?>
    </div>
</section>