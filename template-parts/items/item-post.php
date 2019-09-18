<?php
	global $item;
	global $section;
?>
<div class="pxo-item-post">
	<hr class="hr-<?= $section['colors']['text']; ?> my-3">

	<div class="row">
		<?php the_icon($item['icon'], $item['title']); ?>
		<div class="col pxo-item-post_content">
			<h5 class="m-0"><?= $item['title']; ?></h5>
			<?php the_thumbnail($item['image']); ?>
			<?php the_date_range($item['from'], $item['to']); ?>
			<?php the_progress($item['progress'], $section['colors']['text']); ?>
			<?php if ( isset($item['content']) && $item['content'] != '' ) : ?>
				<div><?= $item['content']; ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>
