<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pixoff_Resume_Theme
 */

$sections = array(
	'about', 'experiences', 'services', 'skills', 'projects', 'contact'
);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/sections/section', 'hero' ); ?>

	<?php
		wp_reset_postdata();

		// check if the repeater field has rows of data
		if( have_rows('sections') ):

		// loop through the rows of data
		while ( have_rows('sections') ) : the_row();

			global $section;
			$section = array(
				'type' => get_sub_field('type'),
				'colors' => get_sub_field('colors'),
				'image' => get_sub_field('image'),
				'title' => get_sub_field('title'),
				'content' => get_sub_field('content'),
				'grids' => get_sub_field('grids')
			);

			get_template_part( 'template-parts/sections/section', $section['type'] );

		endwhile;

		else :

		// no rows found

		endif;

		wp_reset_postdata();
	?>

</article><!-- #post-<?php the_ID(); ?> -->
