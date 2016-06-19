<?php

function zet_contact_post_type(){
	$labels = array(
		'name' => 'contact',
		'singular_name' => 'contact',
		'add_new' => 'Add new Contact entry',
		'add_new_item' => 'Add new Contact entry',
		'edit_item' => 'Edit Contact entry',
		'new_item' => 'New Contact entry',
		'all_items' => 'All Contact entries',
		'view_items' => 'View Contact entry',
		'search_items' => 'Search Contact entry',
		'not found' => 'Not Contact entries found',
		'not_found_in_trash' => 'No Contact entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'CONTACT' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 108,
		'rewrite' => array('slug'=>'contact','with_front'=>false),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor')
	);
	register_post_type('contact',$data);
};
?>