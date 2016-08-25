<?php

function zet_language_post_type(){
	$labels = array(
		'name' => esc_html__('language','zet'),
		'singular_name' => esc_html__('Language','zet'),
		'add_new' => esc_html__('Add new Language entry','zet'),
		'add_new_item' => esc_html__('Add new Language entry','zet'),
		'edit_item' => esc_html__('Edit Language entry','zet'),
		'new_item' => esc_html__('New Language entry','zet'),
		'all_items' => esc_html__('All Language entries','zet'),
		'view_items' => esc_html__('View Language entry','zet'),
		'search_items' => esc_html__('Search Language entry','zet'),
		'not found' => esc_html__('Not Language entries found','zet'),
		'not_found_in_trash' => esc_html__('No Language entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('LANGUAGE SKILLS','zet') 
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