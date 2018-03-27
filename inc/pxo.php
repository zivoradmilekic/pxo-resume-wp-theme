<?php

function get_custom_posts($post_type) {
	return get_posts(
		array(
			'post_type' => $post_type,
			'posts_per_page' => -1,
		)
	);
}

function the_icon($post) {
	if ($post->post_type != "project") {
		$icon = get_the_post_thumbnail($post->ID);
		if($icon) {
?>
		<div class="col-auto pr-0 pxo-item-post_icon">
			<?= $icon ?>
		</div>
<?php
		}
	}
}

function the_thumbnail($post) {
	if ($post->post_type == "project") {
		$thumbnail = get_the_post_thumbnail($post->ID);
		if($thumbnail) {
?>
		<div class="pxo-item-post_thumbnail my-2">
			<?= $thumbnail ?>
		</div>
<?php
		}
	}
}

function the_progress($id) {
	$progress = get_post_meta($id, 'progress', true);
	if($progress) {
?>
	<div class="progress my-2">
		<div class="progress-bar bg-white" role="progressbar" style="width: <?= $progress ?>%" aria-valuenow="<?= $progress ?>" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
<?php
	}
}

function format_date($string_date) {
	return ($string_date == "")? null : date( 'Y-m', strtotime( $string_date ) );
};

function the_date_range($id) {
	$from = format_date(get_post_meta($id, 'from', true));
	$to = format_date(get_post_meta($id, 'to', true));

	if ($from || $to) {
		$from = ($from) ? $from : __('Past', 'pixoff-resume-theme');
		$to = ($to) ? $to : __('Present', 'pixoff-resume-theme');
		$date_range = $from . " - " . $to;
?>
	<p class="my-1 o-5"><?= $date_range ?></p>
<?php
	}
}

?>
