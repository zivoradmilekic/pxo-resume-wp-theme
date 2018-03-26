<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pixoff_Resume_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/sections/section', 'hero' ); ?>
	<?php get_template_part( 'template-parts/sections/section', 'about' ); ?>
	<?php get_template_part( 'template-parts/sections/section', 'contact' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->
