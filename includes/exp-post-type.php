<?php

function zet_experience_post_type(){
	$labels = array(
		'name' => esc_html__('experience','zet'),
		'singular_name' => esc_html__('experience','zet'),
		'add_new' => esc_html__('Add new Experience entry','zet'),
		'add_new_item' => esc_html__('Add new Experience entry','zet'),
		'edit_item' => esc_html__('Edit Experience entry','zet'),
		'new_item' => esc_html__('New Experience entry','zet'),
		'all_items' => esc_html__('All Experience entries','zet'),
		'view_items' => esc_html__('View Experience entry','zet'),
		'search_items' => esc_html__('Search Experience entry','zet'),
		'not found' => esc_html__('Not Experience entries found','zet'),
		'not_found_in_trash' => esc_html__('No Experience entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('EXPERIENCE','zet') 
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