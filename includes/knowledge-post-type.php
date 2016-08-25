<?php

function zet_knowledge_post_type(){
	$labels = array(
		'name' => esc_html__('Knowledge','zet'),
		'singular_name' => esc_html__('Knowledge','zet'),
		'add_new' => esc_html__('Add new Knowledge entry','zet'),
		'add_new_item' => esc_html__('Add new Knowledge entry','zet'),
		'edit_item' => esc_html__('Edit Knowledge entry','zet'),
		'new_item' => esc_html__('New Knowledge entry','zet'),
		'all_items' => esc_html__('All Knowledge entries','zet'),
		'view_items' => esc_html__('View Knowledge entry','zet'),
		'search_items' => esc_html__('Search Knowledge entry','zet'),
		'not found' => esc_html__('Not Knowledge entries found','zet'),
		'not_found_in_trash' => esc_html__('No Knowledge entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('KNOWLEDGE','zet') 
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