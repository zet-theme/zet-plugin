<?php

function zet_contact_post_type(){
	$labels = array(
		'name' => esc_html__('contact','zet'),
		'singular_name' => esc_html__('contact','zet'),
		'add_new' => esc_html__('Add new Contact entry','zet'),
		'add_new_item' => esc_html__('Add new Contact entry','zet'),
		'edit_item' => esc_html__('Edit Contact entry','zet'),
		'new_item' => esc_html__('New Contact entry','zet'),
		'all_items' => esc_html__('All Contact entries','zet'),
		'view_items' => esc_html__('View Contact entry','zet'),
		'search_items' => esc_html__('Search Contact entry','zet'),
		'not found' => esc_html__('Not Contact entries found','zet'),
		'not_found_in_trash' => esc_html__('No Contact entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('CONTACT','zet')
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