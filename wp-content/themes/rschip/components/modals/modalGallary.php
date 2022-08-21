<?php
$gallaryItems = get_field_object('gallary_popup')["value"];
?>

<section class="modal modalGallary" data-modal="modalGallary"> <button class="modalClose icon-close js-modal-close"></button>
    <div class="modalContent">
        <div class="sliderBtn"><button class="btnSlider prev"> <i class="icon-arrow-left"></i></button><button class="btnSlider next"> <i class="icon-arrow-right"></i></button></div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($gallaryItems as $item) :
                    $url = $item->guid;
                    $alt = $item->post_title;
                    ?>
                    <div class="swiper-slide"> 
                        <img src="<?php echo $url?>" alt="<?php echo $alt?>">
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>
</section>