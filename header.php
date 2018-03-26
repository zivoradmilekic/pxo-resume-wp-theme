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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="site-header bg-transparent position-absolute w-100"><!-- bg-primary -->
		<nav class="navbar navbar-expand-sm navbar-dark container">

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php if (has_nav_menu('menu-1')): ?>
					<?php wp_nav_menu(['theme_location' => 'menu-1',
						'menu_id'           => 'primary-menu',
						'menu_class'        => 'nav',
						'depth'             => 2,
						'container'         => '',
						'menu_class'        => 'nav navbar-nav mr-auto',
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
