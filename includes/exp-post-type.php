<?php

function zet_experience_post_type(){
	$labels = array(
		'name' => 'experience',
		'singular_name' => 'experience',
		'add_new' => 'Add new Experience entry',
		'add_new_item' => 'Add new Experience entry',
		'edit_item' => 'Edit Experience entry',
		'new_item' => 'New Experience entry',
		'all_items' => 'All Experience entries',
		'view_items' => 'View Experience entry',
		'search_items' => 'Search Experience entry',
		'not found' => 'Not Experience entries found',
		'not_found_in_trash' => 'No Experience entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'EXPERIENCE' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 105,
		'rewrite' => array('slug'=>'experience','with_front'=>false),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor','thumbnail','custom-fields')
	);
	register_post_type('experience',$data);
};
?>