<?php

function zet_education_post_type(){
	$labels = array(
		'name' => esc_html__('education','zet'),
		'singular_name' => esc_html__('education','zet'),
		'add_new' => esc_html__('Add new Education entry','zet'),
		'add_new_item' => esc_html__('Add new Education entry','zet'),
		'edit_item' => esc_html__('Edit Education entry','zet'),
		'new_item' => esc_html__('New Education entry','zet'),
		'all_items' => esc_html__('All Education entries','zet'),
		'view_items' => esc_html__('View Education entry','zet'),
		'search_items' => esc_html__('Search Education entry','zet'),
		'not found' => esc_html__('Not Education entries found','zet'),
		'not_found_in_trash' => esc_html__('No Education entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('EDUCATION','zet')
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