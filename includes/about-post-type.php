<?php

function zet_about_post_type(){
	$labels = array(
		'name' => esc_html__('About me','zet'),
		'singular_name' => esc_html__('About me','zet'),
		'add_new' => esc_html__('Add new About me entry','zet'),
		'add_new_item' => esc_html__('Add new About me entry','zet'),
		'edit_item' => esc_html__('Edit About me entry','zet'),
		'new_item' => esc_html__('New About me entry','zet'),
		'all_items' => esc_html__('All About me entries','zet'),
		'view_items' => esc_html__('View About me entry','zet'),
		'search_items' => esc_html__('Search About me entry','zet'),
		'not found' => esc_html__('Not About me entries found','zet'),
		'not_found_in_trash' => esc_html__('No About me entries found in Trash','zet'),
		'parent_item_colon' => '',
		'menu_name' => esc_html__('ABOUT ME','zet')
		
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