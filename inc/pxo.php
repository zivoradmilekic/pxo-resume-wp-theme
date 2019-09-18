<?php

function the_section_image($image) {
	if($image) {
?>
	<div class="post-thumbnail">
		<img src="<?= $image['sizes']['medium'] ?>" alt="<?= $image['title'] ?>">
	</div>
<?php
	}
}

function the_icon($icon, $title) {
	if($icon) {
?>
	<div class="col-auto pr-0 pxo-item-post_icon">
		<img src="<?= $icon; ?>" alt="<?= $title ?>">
	</div>
<?php
	}
}

function the_thumbnail($image) {
	if ($image) {
?>
		<div class="pxo-item-post_thumbnail my-2">
			<img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= $image['title'] ?>">
		</div>
<?php
	}
}

function the_progress($progress, $color) {
	if($progress > 0) {
?>
	<div class="progress bg-<?= $color ?>-alpha my-2" title="<?= $progress ?>%">
		<div class="progress-bar bg-<?= $color ?>" role="progressbar" style="width: <?= $progress ?>%" aria-valuenow="<?= $progress ?>" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
<?php
	}
}

function the_date_range($from, $to) {
	if ($from || $to) {
		$from = ($from) ? $from : esc_html__('Past', 'pxo');
		$to = ($to) ? $to : esc_html__('Present', 'pxo');
		$date_range = $from . " - " . $to;
?>
	<p class="my-1 o-5"><?= $date_range ?></p>
<?php
	}
}

function the_hero_section_style($image) {
	if ($image) {
		echo 'style="background-image: url(' . $image['url'] . ');"';
	}
}

function the_primary_color_style() {
	$primary_color = get_theme_mod('pxo_theming_section_primary_color');

	if ($primary_color) {
?>
<style>
	.bg-primary {
		background-color: <?= $primary_color; ?> !important;
	}

	.fill-primary path {
		fill: <?= $primary_color; ?> !important;
	}


	.btn-primary {
		color: #fff;
		background-color: <?= $primary_color; ?>;
		border-color: <?= $primary_color; ?>;
	}

	.btn-primary:hover {
		color: #fff;
		background-color: <?= sass_darken($primary_color, 7.5); ?>;
		border-color: <?= sass_darken($primary_color, 10); ?>;
	}

	.btn-primary:focus,
	.btn-primary.focus {
		-webkit-box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 50); ?>;
				box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 50); ?>;
	}

	.btn-primary.disabled,
	.btn-primary:disabled {
		color: #fff;
		background-color: <?= $primary_color; ?>;
		border-color: <?= $primary_color; ?>;
	}

	.btn-primary:not(:disabled):not(.disabled):active,
	.btn-primary:not(:disabled):not(.disabled).active,
	.show > .btn-primary.dropdown-toggle {
		color: #fff;
		background-color: <?= sass_darken($primary_color, 10); ?>;
		border-color: <?= sass_darken($primary_color, 12.5); ?>;
	}

	.btn-primary:not(:disabled):not(.disabled):active:focus,
	.btn-primary:not(:disabled):not(.disabled).active:focus,
	.show > .btn-primary.dropdown-toggle:focus {
		-webkit-box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 50); ?>;
				box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 50); ?>;
	}


	.form-control:focus {
		color: #495057;
		background-color: #fff;
		border-color: <?= sass_lighten($primary_color, 25); ?>;
		outline: 0;
		-webkit-box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 25); ?>;
		box-shadow: 0 0 0 0.2rem <?= get_rgba($primary_color, 25); ?>;
	}


	.nav-pills .nav-link.active,
	.nav-pills .show > .nav-link {
		color: #fff;
		background-color: <?= $primary_color; ?>;
	}

</style>
<?php
	}

}

function the_hero_graphic_image($image) {
	if ($image) {
?>
<img class="hero-graphic" src="<?= $image; ?>" alt="Hero graphic">
<?php
	}
}

function the_author_logo() {
?>
<a class="text-light" href="http://pixoff.co" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/pxo-logo.svg" class="author-logo"></a>
<?php
}

function the_contact_form($contact_form_ID) {
	if ($contact_form_ID) {
?>
	<div class="card mt-4">
		<div class="card-body p-lg-5">
			<?= do_shortcode( '[wpforms id="'.$contact_form_ID.'" title="true" description="true"]' ); ?>
		</div>
	</div>
<?php
	}
}

?>
