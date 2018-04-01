<section id="<?php the_slug(); ?>" label="<?php the_title(); ?>" class="section-hero text-light full-height" <?php the_hero_section_style(); ?>>
	<div class="backdrop"></div>
	<?php the_hero_graphic_image(); ?>
	<div class="container full-height">
		<div class="row full-height align-items-center">
			<div class="col-12 py-6">
				<h1 class="display-3"><?php bloginfo( 'name' ); ?></h1>
				<hr class="hr-light my-4 d-none d-print-block">
				<h2 class="lead text-uppercase"><?php bloginfo( 'description' ); ?></h2>

				<hr class="hr-light my-4 d-print-none">

				<p class="d-print-none">
					<button onclick="window.print()" class="btn btn-primary">Download Resume</button>
					<a href="#contact" class="btn btn-outline-light">Contact me</a>
				</p>
				<div id="editor"></div>
			</div>
		</div>
	</div>
</section>

