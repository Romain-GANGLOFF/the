<?php
/**
 * The template for displaying archive cars pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lgauto
 */

get_header();
?>

	<main id="primary" class="site-main site-main-contact">

		<h1>Contact</h1>
		<?php $loop = new WP_Query( array( 'post_type' => 'concessions') );
 			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<h1><?php the_title() ?></h1>
				<?php the_content() ?>
		<?php endwhile; wp_reset_query(); ?>
	</main><!-- #main -->
	
<?php
get_footer();
