<?php
/*
Template Name: LG-MB
*/
get_header();
$thumbnail = get_the_post_thumbnail_url($post->ID, 'full'); // URL Image mise en avant
$meta = get_post_meta($post->ID); 
$movie = (empty($meta['movie'][0])) ? false : $meta['movie'][0]; // URL Vidéo mise en avant
?>
	<main id="primary" class="site-main site-main-mb">
	<section id="Banniere_header" class="banniere_header">
			<div class="banniere">
				<?php if(!wp_is_mobile() && $movie) : ?> 
					<video poster="<?= $thumbnail ?>" muted loop autoplay  src="<?= $movie; ?>"></video> 	
				<?php else : ?>
					<div class="thumbnails" style="background-image:url('<?= $thumbnail;?>')"></div>
				<?php endif; ?>
			</div>
		</section>
		<?php the_content() ;?>
	</main><!-- #main -->

<?php
get_footer();
