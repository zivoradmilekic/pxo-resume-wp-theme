<section id="<?php the_slug(); ?>" label="<?php the_title(); ?>" class="section-skills bg-primary full-height text-light fill-light">
	<div class="container full-height">
		<div class="row full-height align-items-center py-5">
			<div class="col-12">
				<?php pxo_post_thumbnail(); ?>

				<h3 class="display-4"><?php the_title(); ?></h1>

				<?php if ( has_the_content() ) : ?>
				<hr class="hr-light my-4">
				<div class="pxo-page-content">
					<?php the_content(); ?>
				</div><!-- .pxo-page-content -->
				<?php endif; ?>

				<div class="row">
					<?php foreach(get_custom_posts('skill') as $index=>$post) : ?>
						<div class="col-12 col-md-6 col-lg-4">
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						</div>
					<?php endforeach; $post = null; ?>
				</div>
			</div>
		</div>
	</div>
</section>
