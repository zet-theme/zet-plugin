<?php

function zet_professional_skills_post_type(){
	$labels = array(
		'name' => esc_html__('Professional skills','zet'),
		'singular_name' => esc_html__('Professional skill','zet'),
		'add_new' => esc_html__('Add new Professional skills entry','zet'),
		'add_new_item' => esc_html__('Add new Professional skills entry','zet'),
		'edit_item' => esc_html__('Edit Professional skills','zet'),
		'new_item' => esc_html__('New Professional skills entry','zet'),
		'all_items' => esc_html__('All Professional skills entries','zet'),
		'view_items' => esc_html__('View Professional skills entry','zet'),
		'search_items' => esc_html__('Search Professional skills entry','zet'),
		'not found' => esc_html__('Not Professional skills entries found','zet'),
		'not_found_in_trash' => esc_html__('No Professional skills entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('PROFESSIONAL SKILLS','zet') 
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