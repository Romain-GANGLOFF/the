<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lgauto
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="col-1">
				<?php get_template_part('template-parts/footer/col1'); ?>
			</div>

			<div class="col-2">
				<?php get_template_part('template-parts/footer/col2'); ?>
			</div>
			
			<div class="col-3">
				<?php get_template_part('template-parts/footer/col3'); ?>
			</div>
			
			<div class="col-4">
				<?php get_template_part('template-parts/footer/col4'); ?>
			</div>
		</div><!-- .site-info -->
		<div class="copyright">
			<p>©<?= date('Y'); ?>. </p>
			<a href="https://b-now.com/" rel="nofollow noindex noopener"  target="_blank"><?= __(' Agence B-now'); ?></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
