<div class="pxo-item-post">
	<hr class="hr-light my-3">

	<div class="row">
		<?php the_icon($post); ?>
		<div class="col pxo-item-post_content">
			<h5 class="m-0"><?= $post->post_title; ?></h5>
			<?php the_thumbnail($post); ?>
			<?php the_date_range($post->ID); ?>
			<?php the_progress($post->ID); ?>
			<div><?= $post->post_content; ?></div>
		</div>
	</div>
</div>
