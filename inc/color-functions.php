<?php

function sass_darken($hex, $percent) {
	preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $hex, $primary_colors);
	str_replace('%', '', $percent);
	$color = "#";
	for($i = 1; $i <= 3; $i++) {
		$primary_colors[$i] = hexdec($primary_colors[$i]);
		$primary_colors[$i] = round($primary_colors[$i] - 255 * ($percent/100));
		$primary_colors[$i] = ($primary_colors[$i] >= 0) ? $primary_colors[$i] : 0;

		$color .= str_pad(dechex($primary_colors[$i]), 2, '0', STR_PAD_LEFT);
	}
	return $color;
}

function sass_lighten($hex, $percent) {
	preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $hex, $primary_colors);
	str_replace('%', '', $percent);
	$color = "#";
	for($i = 1; $i <= 3; $i++) {
		$primary_colors[$i] = hexdec($primary_colors[$i]);
		$primary_colors[$i] = round($primary_colors[$i] + 255 * ($percent/100));
		$primary_colors[$i] = ($primary_colors[$i] <= 255) ? $primary_colors[$i] : 255;

		$color .= str_pad(dechex($primary_colors[$i]), 2, '0', STR_PAD_LEFT);
	}
	return $color;
}

function get_rgba($hex, $alpha) {
	preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $hex, $primary_colors);
	str_replace('%', '', $alpha);
	$alpha = $alpha / 100;
	$color = "rgba(";
	for($i = 1; $i <= 3; $i++) {
		$primary_colors[$i] = hexdec($primary_colors[$i]);
		$color .= $primary_colors[$i] . ', ';
	}
	$color .= $alpha . ')';

	return $color;
}

?>
