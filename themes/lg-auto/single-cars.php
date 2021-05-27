<?php 
get_header();
$thumbnail = get_the_post_thumbnail_url($post->ID, 'full'); // URL Image mise en avant
$meta = get_post_meta($post->ID); 
$movie = (empty($meta['movie'][0])) ? false : $meta['movie'][0]; // URL Vidéo mise en avant
$special = isset($meta['special'][0]) ? $meta['special'][0] : "0"; // Si $meta n'est pas vide, on récupère, sinon, on ne l'affiche pas (0)
?>
    <main id="primary" class="site-main car-<?= $post->post_name ?>">
		<section id="Banniere_header" class="banniere_header">
			<div class="banniere">
				<div class="logocontainer">
					<div class="logobrand"></div>
					<div class="logolg"></div>
					<div class="logofuso"></div>
				</div>
				<?php if(!wp_is_mobile() && $movie) : ?> 
					<video poster="<?= $thumbnail ?>" muted loop autoplay  src="<?= $movie; ?>"></video> 	
				<?php else : ?>
					<div class="thumbnails" style="background-image:url('<?= $thumbnail;?>')"></div>
				<?php endif; ?>
			</div>
		</section>
		<?php the_content() ?>
	</main><!-- #main -->
	<?php
		if($special == "0") : ?>
		<script>
			jQuery("#Special").remove();
		</script>
	<?php 
		endif;
	get_footer();