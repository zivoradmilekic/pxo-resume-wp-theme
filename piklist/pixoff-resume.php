<?php
	/*
	Plugin Name: Pixoff Resume
	Plugin URI: http://pixoff.co/
	Description: A brief description of the Plugin.
	Version: 0.1
	Author: Pixoff Team
	URI: http://pixoff.co/
	Plugin Type: Piklist
	*/

	if (!defined('ABSPATH')) {
		exit;
	}

	add_filter('piklist_post_types', 'pixoff_resume_post_types');

	function pixoff_resume_post_types($post_types) {
		$post_types = array_merge($post_types, array(
			'education' => array(
				'labels' => piklist('post_type_labels', 'Education'),
				'menu_icon' => 'dashicons-welcome-learn-more',
				'page_icon' => 'dashicons-welcome-learn-more',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'educations'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'skill' => array(
				'labels' => piklist('post_type_labels', 'Skill'),
				'menu_icon' => 'dashicons-hammer',
				'page_icon' => 'dashicons-hammer',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'skills'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'experience' => array(
				'labels' => piklist('post_type_labels', 'Experience'),
				'menu_icon' => 'dashicons-archive',
				'page_icon' => 'dashicons-archive',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'experiences'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'service' => array(
				'labels' => piklist('post_type_labels', 'Service'),
				'menu_icon' => 'dashicons-admin-tools',
				'page_icon' => 'dashicons-admin-tools',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'services'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'portfolio' => array(
				'labels' => piklist('post_type_labels', 'Portfolio'),
				'menu_icon' => 'dashicons-portfolio',
				'page_icon' => 'dashicons-portfolio',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'portfolios'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),




			'unit' => array(
				'labels' => piklist('post_type_labels', 'Unit'),
				'menu_icon' => 'dashicons-portfolio',
				'page_icon' => 'dashicons-portfolio',
				'supports' => array(
					'title',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'units'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'update' => array(
				'labels' => piklist('post_type_labels', 'Update'),
				'menu_icon' => 'dashicons-update',
				'page_icon' => 'dashicons-update',
				//'show_in_menu' => 'edit.php?post_type=unit',
				'supports' => array(
					'title',
					'revisions',
					'editor'
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'updates'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					//'unit' => __('Unit'),
					'author' => __('Author')
				)
			)
		));

		return $post_types;
	}

	add_filter('piklist_taxonomies', 'pixoff_resume_taxonomies');

	function pixoff_resume_taxonomies($taxonomies) {

		$taxonomies[] = array(
			'post_type' => 'unit',
			'name' => 'unit-project',
			'configuration' => array(
        		'hierarchical' => true,
				'page_icon' => 'dashicons-products',
				'show_ui' => true,
				'query_var' => true,
				'labels' => piklist('taxonomy_labels', 'Project'),
				'rewrite' => array(
					'slug' => 'projects'
				),
				'show_admin_column' => true,
				'comments' => true
			)
		);

		$taxonomies[] = array(
			'post_type' => 'unit',
			'name' => 'unit-group',
			'configuration' => array(
				'hierarchical' => true,
				'page_icon' => 'dashicons-products',
				'show_ui' => true,
				'query_var' => true,
				'labels' => piklist('taxonomy_labels', 'Group'),
				'rewrite' => array(
					'slug' => 'groups'
				),
				'show_admin_column' => true,
				'comments' => true
			)
		);

		return $taxonomies;
	}

	add_action('init', 'my_remove_post_type_support', 10);

	function my_remove_post_type_support() {
		remove_post_type_support('page', 'editor');
	}


	add_filter('piklist_admin_pages', 'pixoff_resume_admin_pages');

	function pixoff_resume_admin_pages($pages){
		$pages[] = array(
			'page_title' => 'Pixoff Resume',
			'menu_title' => 'Pixoff Resume',
			'sub_menu' => 'options-general.php',
			'capability' => 'manage_options',
			'menu_slug' => 'pixoff_resume',
			'setting' => 'pixoff_resume',
			'default_tab' => 'Home',
			'menu_icon' => 'dashicons-admin-settings',
			'page_icon' => 'dashicons-admin-settings',
			'single_line' => true
		);

		return $pages;
	}

?>
