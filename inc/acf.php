<?php

// Add ACF save/load functions

function my_acf_json_load_point( $paths ) {

	// remove original path (optional)
	unset($paths[0]);

	// append path
	$paths[] = get_template_directory() . '/acf-json';

	// return
	return $paths;

}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_save_point( $path ) {

	// update path
	$path = get_template_directory() . '/acf-json';

	// return
	return $path;

}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
