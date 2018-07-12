<section id="<?php the_slug(); ?>" label="<?php the_title(); ?>" class="section-about bg-primary full-height text-light fill-light">
	<div class="container full-height">
		<div class="row full-height align-items-center py-6">
			<div class="col-12">
				<?php pxo_post_thumbnail(); ?>

				<h3 class="display-4"><?php the_title(); ?></h1>

				<?php if ( has_the_content() ) : ?>
				<hr class="hr-light my-4">
				<div class="pxo-page-content">
					<?php the_content(); ?>
				</div><!-- .pxo-page-content -->
				<?php endif; ?>

				<?php $education_posts = get_custom_posts('education'); ?>

				<?php if (!empty($education_posts)) : ?>
				<h4 class="display-5 mt-4">Education</h1>
				<?php endif; ?>

				<div class="row">
					<?php foreach($education_posts as $index=>$post) : ?>
						<div class="col-12">
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						</div>
					<?php endforeach; $post = null; ?>
				</div>

				<?php $language_posts = get_custom_posts('language'); ?>

				<?php if (!empty($language_posts)) : ?>
				<h4 class="display-5 mt-4">Languages</h1>
				<?php endif; ?>

				<div class="row">
					<?php foreach($language_posts as $index=>$post) : ?>
						<div class="col-12 col-md-6">
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						</div>
					<?php endforeach; $post = null; ?>
				</div>

				<?php $award_posts = get_custom_posts('award'); ?>

				<?php if (!empty($award_posts)) : ?>
				<h4 class="display-5 mt-4">Awards</h1>
				<?php endif; ?>

				<div class="row">
					<?php foreach($award_posts as $index=>$post) : ?>
						<div class="col-12 col-md-6">
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						</div>
					<?php endforeach; $post = null; ?>
				</div>
			</div>
		</div>
	</div>
</section>
