<?php

function zet_portfolio_post_type(){
	$labels = array(
		'name' => 'portfolio',
		'singular_name' => 'portfolio',
		'add_new' => 'Add new Portfolio entry',
		'add_new_item' => 'Add new Portfolio entry',
		'edit_item' => 'Edit Portfolio entry',
		'new_item' => 'New Portfolio entry',
		'all_items' => 'All Portfolio entries',
		'view_items' => 'View Portfolio entry',
		'search_items' => 'Search Portfolio entry',
		'not found' => 'Not Portfolio entries found',
		'not_found_in_trash' => 'No Education entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'PORTFOLIO' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => array('slug'=>'portfolio','with_front'=>false),
		'menu_icon' => 'dashicons-id-alt',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_position' => 108,
		'taxonomies' => array('category'),
		'supports' => array('title','thumbnail','custom-fields')
	);
	register_post_type('portfolio',$data);
};
?>