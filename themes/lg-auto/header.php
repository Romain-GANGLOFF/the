<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lgauto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site <?= is_user_logged_in() ? 'logged' : ''; ?>"> <!-- Ajouter une classe si on est connecté a l'admin -->
	<header id="masthead" class="site-header">

		<div class="container-top">
			<?php get_template_part('template-parts/header/top'); ?>
		</div>

		<div class="container-bottom">
			<?php get_template_part('template-parts/header/bottom'); ?>
		</div>

		<div id="coverBurger">
			<div id="Burger" class="burger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

	</header><!-- #masthead -->
	<?php get_template_part('template-parts/header/toolbar'); ?>