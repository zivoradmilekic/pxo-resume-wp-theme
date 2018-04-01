<section id="<?php the_slug(); ?>" label="<?php the_title(); ?>" class="section-contact bg-dark">
	<div class="container full-height">
		<div class="row full-height align-items-center">
			<div class="col-12 py-6">
				<div class="row align-items-top">
					<div class="col-12 text-light">
						<?php pxo_post_thumbnail(); ?>

						<h3 class="display-4"><?php the_title(); ?></h1>
					</div>
					<div class="col-12 col-lg-6 text-light fill-primary">
						<?php if ( has_the_content() ) : ?>
						<hr class="hr-light my-4">
						<div class="pxo-page-content">
							<?php the_content(); ?>
						</div><!-- .pxo-page-content -->
						<?php endif; ?>

						<?php foreach(get_custom_posts('contact') as $index=>$post) : ?>
							<?php get_template_part( 'template-parts/items/item', 'post' ); ?>
						<?php endforeach; ?>
					</div>
					<div class="col-12 col-lg-6 d-print-none">
						<div class="card mt-4">
							<div class="card-body p-lg-5">
								<h5 class="card-title">Looking for a excellent business idea?</h5>
								<form>
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Name*" required>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="E-mail*" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  placeholder="Subject" required>
									</div>
									<div class="form-group">
										<textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Send Message</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
