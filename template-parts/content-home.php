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

		foreach ($sections as $key => $section) {
			$section_page_slug = 'pxo_' . $section . '_section_page';
			$section_page_ID = get_theme_mod($section_page_slug);

			if ($section_page_ID != 0) {
				global $wp_query;
				$wp_query = new WP_Query(array(
					'p'         => $section_page_ID,
					'post_type' => 'page'
				));

				the_post();

				get_template_part( 'template-parts/sections/section', $section );
			}
		}

		wp_reset_postdata();
	?>

</article><!-- #post-<?php the_ID(); ?> -->
