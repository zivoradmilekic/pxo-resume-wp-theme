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
		$from = ($from) ? $from : esc_html__('Past', 'pxo');
		$to = ($to) ? $to : esc_html__('Present', 'pxo');
		$date_range = $from . " - " . $to;
?>
	<p class="my-1 o-5"><?= $date_range ?></p>
<?php
	}
}

function has_the_content() {
	global $post;
	return $post->post_content != '';
}

function the_slug() {
	global $post;
	echo $post->post_name;
};

function the_hero_section_header_style() {
	$horizontal_background_image_url = esc_url(get_theme_mod('pxo_hero_section_horizontal_background_image'));
	if ($horizontal_background_image_url) {
?>
<style>
	@media screen and (orientation: landscape) {
		section.section-hero {
			background-image: url(<?= $horizontal_background_image_url; ?>) !important;
		}
	}
</style>
<?php
	}

}

function the_hero_section_style() {
	$hero_background_image_url = esc_url(get_theme_mod('pxo_hero_section_hero_background_image'));

	if ($hero_background_image_url) {
		echo 'style="background-image: url(' . $hero_background_image_url . ');"';
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

function the_hero_graphic_image() {
	$hero_graphic_url = esc_url(get_theme_mod('pxo_hero_section_hero_graphic'));

	if ($hero_graphic_url) {
?>
<img class="hero-graphic" src="<?= $hero_graphic_url; ?>" alt="Hero graphic">
<?php
	}
}

function the_author_logo() {
?>
<a class="text-light" href="http://pixoff.co" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/pxo-logo.svg" class="author-logo"></a>
<?php
}

function the_contact_form() {
	$contact_form_ID = get_theme_mod('pxo_contact_form');
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
