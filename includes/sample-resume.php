<?php

function zet_create_sample_content(){
	
	create_aboutme_template_post();
	create_pskills_template_post();
	create_knowledge_template_post();
	create_experience_template_post();
	create_language_template_post();
	create_education_template_post();
	create_portfolio_template_post();
	create_contact_template_post();
};

function create_aboutme_template_post(){
		$post_data = array(
	        'post_title' => "WHAT DO I KNOW",
	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
	        'post_status' => 'publish',
	        'post_type' => 'about_me',
	        'post_name' => 'about',
	        'comment_status' => 'closed',
	        'ping_status' => 'closed',
	        'post_category' => array($GLOBALS["cat_description_id"])
	    );    
      $post_id = wp_insert_post(wp_slash($post_data));
};

// function create_pskills_template_post(){
// 		$data_description = array(
// 	        'post_title' => "JUST MY AWESOME SKILLS",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'professional_skills',
// 	        'post_name' => 'skills',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_description_id"])
// 	    );   
// 		$data_item1 = array(
// 	        'post_title' => "Web Design",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE.<br>FILL OUT ONLY TITLE ABOVE AND META FIELDS BELOW",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'professional_skills',
// 	        'post_name' => 'skills',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'skill_term' => '7 years',
// 								'skill_level' => '83'
// 							)						                        
//       	);
// 		$data_item2 = array(
// 	        'post_title' => "UX Design",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'professional_skills',
// 	        'post_name' => 'skills',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'skill_term' => '6 years',
// 								'skill_level' => '82'
// 							)						                        
//       	);
//       	$data_item3 = array(
// 	        'post_title' => "Html5 Css3",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'professional_skills',
// 	        'post_name' => 'skills',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'skill_term' => '5 years',
// 								'skill_level' => '81'
// 							)						                        
//       	);

//       $post_id1 = wp_insert_post(wp_slash($data_description));
//       $post_id2 = wp_insert_post(wp_slash($data_item1));
//       $post_id3 = wp_insert_post(wp_slash($data_item2));
//       $post_id4 = wp_insert_post(wp_slash($data_item3));
// };

// function create_knowledge_template_post(){
// 	$post_data = array(
// 	        'post_title' => "Knowledge",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'knowledge',
// 	        'post_name' => 'knowledge',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_description_id"]),
// 	        'meta_input' => array(
// 	                        	'knowledge_1' => 'Color theory knowledge',	
// 							  	'knowledge_2' => 'Photo manipulation skills',
// 								'knowledge_3' => 'Digital Painting',
// 								'knowledge_4' => 'Photo composition',
// 								'knowledge_5' => 'Good sense of typography',
// 								'knowledge_6' => 'Usability',
// 								'knowledge_7' => 'Grid & layout',
// 								'knowledge_8' => 'E-commerce platform',
// 								'knowledge_9' => 'Interruption design',
// 								'knowledge_10' => 'User Interface design',
// 								'knowledge_11' => 'User Experience design',
// 								'knowledge_12' => 'Email design'
// 							)						                        
//       	);
// 	$post_id = wp_insert_post(wp_slash($post_data));
// };
// function create_language_template_post(){
// 		$data_description = array(
// 	        'post_title' => "Language Skill",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'language',
// 	        'post_name' => 'language',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_description_id"])
// 	    );   
// 		$data_item1 = array(
// 	        'post_title' => "Russian Native",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE.<br>FILL OUT ONLY TITLE ABOVE AND META FIELDS BELOW",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'language',
// 	        'post_name' => 'language',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'language_level' => '97'
// 							)						                        
//       	);
// 		$data_item2 = array(
// 	        'post_title' => "English Intermediate",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'language',
// 	        'post_name' => 'language',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'language_level' => '62'
// 							)						                        
//       	);
//       	$data_item3 = array(
// 	        'post_title' => "Na'vi",
// 	        'post_content' => "YOU CAN WRITE DOWN NOTHING HERE",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'language',
// 	        'post_name' => 'language',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'language_level' => '49'
// 							)						                        
//       	);
//       $post_id1 = wp_insert_post(wp_slash($data_description));
//       $post_id2 = wp_insert_post(wp_slash($data_item1));
//       $post_id3 = wp_insert_post(wp_slash($data_item2));
//       $post_id4 = wp_insert_post(wp_slash($data_item3));
// };

// function create_experience_template_post(){
// 		$data_description = array(
// 	        'post_title' => "7 years experience",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'experience',
// 	        'post_name' => 'experience',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_description_id"])
// 	    );   
// 		$data_item1 = array(
// 	        'post_title' => "UX/UI designer in SEO Expert, LLC.",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'experience',
// 	        'post_name' => 'experience',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'experience_date_begin' => '2012',
// 	                          	'experience_date_end' => '2016',
// 							)						                        
//       	);
// 		$data_item2 = array(
// 	        'post_title' => "Web designer in freelance",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'experience',
// 	        'post_name' => 'experience',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'experience_date_begin' => '2009',
// 	                          	'experience_date_end' => '2012',
// 							)						                        
//       	);
//       	$data_item3 = array(
// 	        'post_title' => "UX/UI designer in freelance",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'experience',
// 	        'post_name' => 'experience',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_item_id"]),
// 	        'meta_input' => array(
// 	                          	'experience_date_begin' => '2016',
// 	                          	'experience_date_end' => 'Now',
// 							)						                        
//       	);
//       $post_id1 = wp_insert_post(wp_slash($data_description));
//       $post_id2 = wp_insert_post(wp_slash($data_item1));
//       $post_id3 = wp_insert_post(wp_slash($data_item2));
//       $post_id4 = wp_insert_post(wp_slash($data_item3));
// };
// function create_education_template_post(){
// 	$data_description = array(
//         'post_title' => "Just my education",
//         'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
//         'post_status' => 'publish',
//         'post_type' => 'education',
//         'post_name' => 'education',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_description_id"])
//     );   
// 	$data_item1 = array(
//         'post_title' => "Izhevsk state University",
//         'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
//         'post_status' => 'publish',
//         'post_type' => 'education',
//         'post_name' => 'education',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'education_date_begin' => '2009',
//                           	'education_date_end' => '2012',
//                           	'degree' => 'CAD'
// 						)						                        
//   	);
// 	$data_item2 = array(
//         'post_title' => "Boston state University",
//         'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
//         'post_status' => 'publish',
//         'post_type' => 'education',
//         'post_name' => 'education',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'education_date_begin' => '2013',
//                           	'education_date_end' => '2015',
//                           	'degree' => 'Visual Art & Design'
// 						)						                        
//   	);
//   	$data_item3 = array(
//         'post_title' => "Univerity of Design",
//         'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum.",
//         'post_status' => 'publish',
//         'post_type' => 'education',
//         'post_name' => 'education',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'education_date_begin' => '2016',
//                           	'education_date_end' => 'Now',
//                           	'degree' => 'Bachelor of Arts'

// 						)						                        
//   	);
//   	$post_id1 = wp_insert_post(wp_slash($data_description));
//     $post_id2 = wp_insert_post(wp_slash($data_item1));
//     $post_id3 = wp_insert_post(wp_slash($data_item2));
//     $post_id4 = wp_insert_post(wp_slash($data_item3));
// };
// function create_portfolio_template_post(){
// 	$data_item1 = array(
//         'post_title' => "Loteco IronArms, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '1',
//                         )
//     );   
// 	$data_item2 = array(
//         'post_title' => "Zentech IronArms, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '2',
//                         )
//     );   
//     $data_item3 = array(
//         'post_title' => "Funplus Spanlex, Inc.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '3',
//                         )
//     );   
//     $data_item4 = array(
//         'post_title' => "Cyberdyne Systems Inc.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '4',
//                         )
//     );   
//     $data_item5 = array(
//         'post_title' => "Whiteeco Itelectronics, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '5',
//                         )
//     );   
//     $data_item6 = array(
//         'post_title' => "S-fresh Triscom, Inc.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '6',
//                         )
//     );   
//     $data_item7 = array(
//         'post_title' => "Duo Home Soloit, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '7',
//                         )
//     );   
//     $data_item8 = array(
//         'post_title' => "Zontom Howdexon, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '9',
//                         )
//     );   
//     $data_item9 = array(
//         'post_title' => "Vollax Voyatech, Inc.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '10',
//                         )
//     );   
// 	$data_item10 = array(
//         'post_title' => "Hand grip e-commerce IronArms, LLC.",
//         'post_content' => "",
//         'post_status' => 'publish',
//         'post_type' => 'portfolio',
//         'post_name' => 'portfolio',
//         'comment_status' => 'closed',
//         'ping_status' => 'closed',
//         'post_category' => array($GLOBALS["cat_item_id"]),
//         'meta_input' => array(
//                           	'order' => '11',
//                         )
//     );   

// 	$post_id1 = wp_insert_post(wp_slash($data_item1));
// 	$post_id2 = wp_insert_post(wp_slash($data_item2));
// 	$post_id3 = wp_insert_post(wp_slash($data_item3));
// 	$post_id4 = wp_insert_post(wp_slash($data_item4));
// 	$post_id5 = wp_insert_post(wp_slash($data_item5));
// 	$post_id6 = wp_insert_post(wp_slash($data_item6));
// 	$post_id7 = wp_insert_post(wp_slash($data_item7));
// 	$post_id8 = wp_insert_post(wp_slash($data_item8));
// 	$post_id9 = wp_insert_post(wp_slash($data_item9));
// 	$post_id10 = wp_insert_post(wp_slash($data_item10));
// };

// function create_contact_template_post(){
// 		$post_data = array(
// 	        'post_title' => "LET'S KEEP IN TOUCH",
// 	        'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.",
// 	        'post_status' => 'publish',
// 	        'post_type' => 'contact',
// 	        'post_name' => 'contact',
// 	        'comment_status' => 'closed',
// 	        'ping_status' => 'closed',
// 	        'post_category' => array($GLOBALS["cat_description_id"])
// 	    );    
//       $post_id = wp_insert_post(wp_slash($post_data));
// };
?>