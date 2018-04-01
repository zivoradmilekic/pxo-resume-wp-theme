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

<body <?php body_class(); ?> data-spy="scroll" data-target="#header-navbar" data-offset="0">
<div id="page" class="site">
	<header class="site-header bg-transparent position-absolute w-100">
		<nav id="header-navbar" class="navbar navbar-expand-md navbar-dark container">

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-pills mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#experiences">Experiences</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skills">Skills</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact me</a>
					</li>
				</ul>
				<?php if (has_nav_menu('menu-1') && false): ?>
					<?php wp_nav_menu(['theme_location' => 'menu-1',
						'menu_id'           => 'primary-menu',
						'menu_class'        => 'nav',
						'depth'             => 2,
						'container'         => '',
						'menu_class'        => 'nav navbar-nav mr-auto d-none',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker()])
					?>
				<?php endif; ?>
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
	</header>

	<div id="content" class="site-content">
