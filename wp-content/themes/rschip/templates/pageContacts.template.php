<?php
/*
	Template Name: Tpl. Contacts
*/
?>
<?php get_header(); ?>
<main class="page ">
	<section class="pageTitle">
		<div class="wrapper">
			<h2 class="page__title-h2 page__title-h2_big">WELLCOME <span class="page__title-h2_small page__title-h2_absolute">Get in touch </span></h2>
			<h2>Contact Us</h2>
		</div>
	</section>
	
	
	<?php include(TEMPLATEPATH . '/components/_contact_cards/_contact_cards.component.php'); ?>
	
	<?php include(TEMPLATEPATH . '/components/_form/_form.component.php'); ?>
	
	<?php include(TEMPLATEPATH . '/components/_social/_social.component.php'); ?>
	<?php include(TEMPLATEPATH . '/components/_map/_map.component.php'); ?>

</main>
<?php get_footer(); ?>