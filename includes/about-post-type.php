<?php

function zet_about_post_type(){
	$labels = array(
		'name' => 'About me',
		'singular_name' => 'About me',
		'add_new' => 'Add new About me entry',
		'add_new_item' => 'Add new About me entry',
		'edit_item' => 'Edit About me entry',
		'new_item' => 'New About me entry',
		'all_items' => 'All About me entries',
		'view_items' => 'View About me entry',
		'search_items' => 'Search About me entry',
		'not found' => 'Not About me entries found',
		'not_found_in_trash' => 'No About me entries found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'ABOUT ME'
		
	);	
	$data = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 101,
		'rewrite' => array('slug'=>'about','with_front'=>false),
		'menu_icon' => 'dashicons-id-alt',
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_nav_menus'=> false,
		'query_var' => true,
		'taxonomies' => array('category'),
		'supports' => array('title','editor','thumbnail')
	);
	register_post_type('about_me',$data);
};
?>