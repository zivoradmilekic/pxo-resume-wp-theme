<?php
$settings = get_field('404_settings', 'option');
?>
<section id="404" class="section-404 text-light full-height" <?php the_hero_section_style($settings['image']); ?>>
	<div class="backdrop"></div>
	<?php the_hero_graphic_image($settings['hero_graphic_image']); ?>
	<div class="container full-height">
		<div class="row full-height align-items-center">
			<div class="col-12 py-6">
				<h1 class="display-3">404</h1>
				<h2 class="lead text-uppercase">Page not found</h2>
				<hr class="hr-light my-4 d-print-none">
				<p class="d-print-none">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Go to Homepage</a>
				</p>
				<div id="editor"></div>
			</div>
		</div>
	</div>
</section>

