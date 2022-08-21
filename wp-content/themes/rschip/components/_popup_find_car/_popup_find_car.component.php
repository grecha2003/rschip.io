<?php
$modalCarCantfindACF = get_field('_popup_find_car');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($modalCarCantfindACF)) :
?>
    <?php if ($modalCarCantfindACF["isShow"]) : ?>
        <section class="modal modalCarCantfind" data-modal="modalCarCantfind"> <button class="modalClose icon-close js-modal-close"></button>
            <div class="modalContent">
                <h2 class="modalTitle">Can’t find <span class="page_red">my car</span></h2>
                <p>Please fill in the fields below and we will call you back</p>
                <?php echo $modalCarCantfindACF['form']; ?>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>