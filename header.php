<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixoff_Resume_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<?php the_primary_color_style(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#header-navbar" data-offset="10">
<div id="page" class="site">
	<header class="site-header bg-transparent position-absolute w-100">
		<div class="site-header-inner bg-transparent">
			<nav id="header-navbar" class="navbar navbar-expand-md navbar-dark container">

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-pills mr-auto">
						<!-- .navbar-nav content added via jQuery -->
					</ul>
				</div>

				<?php if (has_custom_logo()) : ?>
					<?php the_custom_logo(); ?>
				<?php else: ?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
