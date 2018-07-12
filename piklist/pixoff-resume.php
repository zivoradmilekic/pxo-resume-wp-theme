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
			'award' => array(
				'labels' => piklist('post_type_labels', 'Award'),
				'menu_icon' => 'dashicons-awards',
				'page_icon' => 'dashicons-awards',
				'supports' => array(
					'title',
					'editor',
					'revisions'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'awards'
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
					'revisions',
					'thumbnail'
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
				'menu_icon' => 'dashicons-businessman',
				'page_icon' => 'dashicons-businessman',
				'supports' => array(
					'title',
					'editor',
					'revisions',
					'thumbnail'
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
					'revisions',
					'thumbnail'
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
			'project' => array(
				'labels' => piklist('post_type_labels', 'Project'),
				'menu_icon' => 'dashicons-portfolio',
				'page_icon' => 'dashicons-portfolio',
				'supports' => array(
					'title',
					'editor',
					'revisions',
					'thumbnail'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'projects'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'language' => array(
				'labels' => piklist('post_type_labels', 'Language'),
				'menu_icon' => 'dashicons-translation',
				'page_icon' => 'dashicons-translation',
				'supports' => array(
					'title',
					'editor',
					'revisions',
					'thumbnail'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'languages'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
			'contact' => array(
				'labels' => piklist('post_type_labels', 'Contact'),
				'menu_icon' => 'dashicons-phone',
				'page_icon' => 'dashicons-phone',
				'supports' => array(
					'title',
					'editor',
					'revisions',
					'thumbnail'
				),
				'public' => true,
				'rewrite' => array(
					'slug' => 'contacts'
				),
				'capability_type' => 'post',
				'edit_columns' => array(
					'author' => __('Author')
				)
			),
		));

		return $post_types;
	}

	add_filter('piklist_taxonomies', 'pixoff_resume_taxonomies');

	function pixoff_resume_taxonomies($taxonomies) {

		$taxonomies[] = array(
			'post_type' => 'project',
			'name' => 'project-category',
			'configuration' => array(
				'hierarchical' => true,
				'page_icon' => 'dashicons-portfolio',
				'show_ui' => true,
				'query_var' => true,
				'labels' => piklist('taxonomy_labels', 'Category'),
				'rewrite' => array(
					'slug' => 'project-categories'
				),
				'show_admin_column' => true,
				'comments' => true
			)
		);

		$taxonomies[] = array(
			'post_type' => 'skill',
			'name' => 'skill-group',
			'configuration' => array(
				'hierarchical' => true,
				'page_icon' => 'dashicons-hammer',
				'show_ui' => true,
				'query_var' => true,
				'labels' => piklist('taxonomy_labels', 'Group'),
				'rewrite' => array(
					'slug' => 'skill-groups'
				),
				'show_admin_column' => true,
				'comments' => true
			)
		);

		return $taxonomies;
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
