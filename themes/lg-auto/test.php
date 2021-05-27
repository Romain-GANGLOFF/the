<?php
/*
Template Name: Test
*/
get_header();

?>
<main id="primary" class="site-main site-main-home">

	<section id="Banniere_header" class="banniere_header">
		<?php the_title( '<h1 class="hidden-title">', '</h1>' ); ?>
		<div class="banniere">
			<?php if(!wp_is_mobile() && $movie) : ?> 
				<video poster="<?= $thumbnail ?>" muted loop autoplay  src="<?= $movie; ?>"></video> 	
			<?php else : ?>
				<div class="thumbnails" style="background-image:url('<?= $thumbnail;?>')"></div>
			<?php endif; ?>
			<?php get_template_part('template-parts/menu/menu', 'banniere'); ?>
			<button class="button-mobile">
				<a href="<?= site_url('#') ?>"><?= __('Location'); ?></a>
			</button>
		</div>
	</section>

	<section id="About" class="about thumbnails">
		<?php the_content(); ?>
	</section>

	<section id="Actuality" class="actuality">
		<h2><?= __('Nos dernières actualités'); ?></h2>
		<?= do_shortcode("[actu_lg brand=actualite]"); ?>
	</section>

	<section id="Occasion" class="occasion">
		<h2><?= __('Nos occasions du moment'); ?></h2>
		<div class="icons pneu"></div>
		<?= do_shortcode("[slider_occas]"); ?>
		<a class="button-plus" href="<?= site_url('occasion-voiture'); ?>"><?= __('Voir plus'); ?><div class="icons arrows"></div></a>
	</section>

	<section id="FAQ" class="faq">
		<h2><?= __('FAQ'); ?></h2>
		<div class="moto tumbnails"></div>
		<div class="cars tumbnails"></div>
		<?php get_template_part( 'template-parts/faq.php'); ?>
		<div class="flex">
			<h3 class="question"><?= __('Une autre question ?'); ?></h3>
			<button class="button-actu-red"><a href="<?= site_url('contact'); ?>"><?= __('Contactez-nous'); ?></a></button>
		</div>
	</section>
</main><!-- #primary -->

<?php
get_footer();
