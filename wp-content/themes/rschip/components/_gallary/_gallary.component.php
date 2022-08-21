<?php
$gallaryACF = get_field('_gallary');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($gallaryACF)) :
?>
<?php if ($gallaryACF["isShow"]) : ?>
    <?php
        $gallaryItems = get_field_object('gallary_items')["value"];
        ?>
        <section class="gallary">
            <div class="wrapper">
                <div class="gallaryFlexContainer">
                    <?php for ($num = 0; $num <= 2; $num++) : ?>
                        <div class="gallaryCol">
                            <?php for ($item = 0; $item <= count($gallaryItems) - 1; $item++) :
                                $url = $gallaryItems[$item]->guid;
                                $alt = $gallaryItems[$item]->post_title;

                            ?>
                                <?php if (($item % 3) == $num) : ?>
                                    <div class="gallaryItem js-open-modal" data-modal="modalGallary">
                                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                                    </div>
                                <?php endif; ?>
                            <?php endfor;  ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>