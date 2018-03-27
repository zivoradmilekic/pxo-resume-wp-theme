<section id="projects" class="section-projects bg-primary full-height text-light fill-light">
	<div class="container full-height">
		<div class="row full-height align-items-center py-5">
			<div class="col-12">
				<h3 class="display-4">Projects</h1>
				<hr class="hr-light my-4">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<div class="row">
					<?php foreach(get_custom_posts('project') as $index=>$post) : ?>
						<div class="col-12 col-md-6 col-lg-4">
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
