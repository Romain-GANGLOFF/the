<?php
/*
Template Name: LG-Occasion
*/
get_header();
?>
	<main id="primary" class="site-main site-main-occasion">
		<?php the_title( '<h1>', '</h1>' ); ?>

		<?php echo do_shortcode("[vehicules]"); ?>
	</main><!-- #main -->
<?php
get_footer();
