<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixoff_Resume_Theme
 */

?>

	</div><!-- #content -->

	<footer class="site-footer bg-dark text-light text-center py-3">
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pixoff-resume-theme' ), 'Pixoff Resume', '<a href="http://pixoff.co" target="_blank">Pixofff Team</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
