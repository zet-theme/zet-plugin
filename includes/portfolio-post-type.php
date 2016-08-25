<?php

function zet_portfolio_post_type(){
	$labels = array(
		'name' => esc_html__('portfolio','zet'),
		'singular_name' => esc_html__('portfolio','zet'),
		'add_new' => esc_html__('Add new Portfolio entry','zet'),
		'add_new_item' => esc_html__('Add new Portfolio entry','zet'),
		'edit_item' => esc_html__('Edit Portfolio entry','zet'),
		'new_item' => esc_html__('New Portfolio entry','zet'),
		'all_items' => esc_html__('All Portfolio entries','zet'),
		'view_items' => esc_html__('View Portfolio entry','zet'),
		'search_items' => esc_html__('Search Portfolio entry','zet'),
		'not found' => esc_html__('Not Portfolio entries found','zet'),
		'not_found_in_trash' => esc_html__('No Education entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('PORTFOLIO','zet') 
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