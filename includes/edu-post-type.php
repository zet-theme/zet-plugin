<?php

function zet_education_post_type(){
	$labels = array(
		'name' => 'education',
		'singular_name' => 'education',
		'add_new' => 'Add new Education entry',
		'add_new_item' => 'Add new Education entry',
		'edit_item' => 'Edit Education entry',
		'new_item' => 'New Education entry',
		'all_items' => 'All Education entries',
		'view_items' => 'View Education entry',
		'search_items' => 'Search Education entry',
		'not found' => 'Not Education entries found',
		'not_found_in_trash' => 'No Education entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'EDUCATION' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 106,
		'rewrite' => array('slug'=>'education','with_front'=>false),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor','thumbnail','custom-fields')
	);
	register_post_type('education',$data);
};
?>