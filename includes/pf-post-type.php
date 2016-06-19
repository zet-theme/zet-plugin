<?php

function zet_professional_skills_post_type(){
	$labels = array(
		'name' => 'Professional skills',
		'singular_name' => 'Professional skill',
		'add_new' => 'Add new Professional skills entry',
		'add_new_item' => 'Add new Professional skills entry',
		'edit_item' => 'Edit Professional skills',
		'new_item' => 'New Professional skills entry',
		'all_items' => 'All Professional skills entries',
		'view_items' => 'View Professional skills entry',
		'search_items' => 'Search Professional skills entry',
		'not found' => 'Not Professional skills entries found',
		'not_found_in_trash' => 'No Professional skills entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'PROFESSIONAL SKILLS' 
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 102,
		'rewrite' => array('slug'=>'professional_skills','with_front'=>false),
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'menu_icon' => 'dashicons-id-alt',
		'taxonomies' => array('category'),
		'supports' => array('title','editor','custom-fields')
	);
	register_post_type('professional_skills',$data);
};
?>