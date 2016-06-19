<?php

function zet_language_post_type(){
	$labels = array(
		'name' => 'language',
		'singular_name' => 'Language',
		'add_new' => 'Add new Language entry',
		'add_new_item' => 'Add new Language entry',
		'edit_item' => 'Edit Language entry',
		'new_item' => 'New Language entry',
		'all_items' => 'All Language entries',
		'view_items' => 'View Language entry',
		'search_items' => 'Search Language entry',
		'not found' => 'Not Language entries found',
		'not_found_in_trash' => 'No Language entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'LANGUAGE SKILLS' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 104,
		// 'rewrite' => array('slug'=>'language','with_front'=>false),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor','custom-fields')
	);
	register_post_type('language',$data);
};
?>