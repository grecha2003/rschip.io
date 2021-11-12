<?php
// $faqACF = get_fields();
// echo $faqACF['faq_items'];
// echo get_field('faq_items');
$items = get_field_object('faq_items')["value"];

if (!empty($items)) : ?>
	<section class="faq">
		<div class="wrapper">
			<h2 class="page__title-h2_small">Find Answers</h2>
			<h3 class="page__title-h3">Top questions and answers about <span class="page_red">RS</span></h3>
			<div class="faqFlexContainer">
				<?php for ($num = 0; $num <= 1; $num++) : ?>
					<div class="faqCol">
						<?php for ($item = 0; $item <= count($items) - 1; $item++) :
							$post = get_post($items[$item]->ID);
						?>
							<?php if (($item % 2) == $num) : ?>
								<div class="faqItem">
									<div class="faqItemDetails">
										<div class="faqItemDetails__Summary"><?php echo $post->post_title; ?>
											<div class="icon-arrow-white-details"></div>
										</div>
										<div class="faqItemDetails__Content"><?php echo $post->post_content; ?></div>
									</div>
								</div>
							<?php endif; ?>
						<?php endfor; ?>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>
<?php endif; ?>