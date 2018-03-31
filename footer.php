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

	<footer class="site-footer bg-primary text-light text-center py-3">
		<div class="site-info">
				<?php
				/* translators: 1: Theme author. */
				printf( esc_html__( 'Resume by %1$s.', 'pxo' ), '<a class="text-light" href="http://pixoff.co" target="_blank">Pixofff</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5abe32d9d7591465c7090fea/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
