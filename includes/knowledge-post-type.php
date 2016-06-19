<?php

function zet_knowledge_post_type(){
	$labels = array(
		'name' => 'Knowledge',
		'singular_name' => 'Knowledge',
		'add_new' => 'Add new Knowledge entry',
		'add_new_item' => 'Add new Knowledge entry',
		'edit_item' => 'Edit Knowledge entry',
		'new_item' => 'New Knowledge entry',
		'all_items' => 'All Knowledge entries',
		'view_items' => 'View Knowledge entry',
		'search_items' => 'Search Knowledge entry',
		'not found' => 'Not Knowledge entries found',
		'not_found_in_trash' => 'No Knowledge entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'KNOWLEDGE' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 103,
		'rewrite' => array('slug'=>'knowledge','with_front'=>false),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor','custom-fields')
	);
	register_post_type('knowledge',$data);
};
?>