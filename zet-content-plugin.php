<?php
/*
Plugin Name: ZET Theme Content Plugin
Plugin URI: http://zet.netgon.ru
Description: Create a Custom posts for ZET Theme
Version: 1.0
Author: Netgon Team
Author URI: http://netgon.ru
License: GPLv2
Text domain: zet
Domain Path: /languages
*/

/*  Copyright 2016  Netgon Team  (email : support@netgon.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require_once( ABSPATH . '/wp-admin/includes/taxonomy.php');
require_once( plugin_dir_path( __FILE__ ) . '/includes/about-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/pf-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/knowledge-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/language-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/exp-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/edu-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/portfolio-post-type.php' );
require_once(  plugin_dir_path( __FILE__ ) . '/includes/contact-post-type.php' );

register_activation_hook( __FILE__, 'zet_content_install' );
function zet_content_install() {
	
    //setup default option values (reserved for v2.0)
	
};

add_action('wp_enqueue_scripts','zet_add_ajax'); 
    function zet_add_ajax() {
        wp_localize_script('jquery','AjaxHandler',array('ajaxurl'=>admin_url('admin-ajax.php')));
    };

// create taxonomy for custom posts
add_action('init','zet_categories');
function zet_categories(){
    $GLOBALS["cat_description_id"] = wp_create_category('zet_description');
    $GLOBALS["cat_item_id"] = wp_create_category('zet_item');
};

// create custom posts
add_action('init','zet_custom_posts');
function zet_custom_posts(){
    zet_about_post_type();
    zet_professional_skills_post_type();
    zet_education_post_type();
    zet_experience_post_type();
    zet_knowledge_post_type();
    zet_language_post_type();
    zet_portfolio_post_type();
    zet_contact_post_type();
};


// blog page creation
if(null == get_page_by_title('Blog Page',OBJECT,'page')){
    $page_data = array(
            'post_title' => esc_html__('Blog Page', 'zet'),
            'post_content' => esc_html__('Don&#8216;t remove this page!','zet'),
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'blog'
        );
    $page_id = wp_insert_post(wp_slash($page_data));
};  


function zet_show_resume_contactform(){
    $resume_contactform = '<form id="contact-form" method="POST" class="contact-form"><input type="text" name="visitor-name" placeholder="%1$s" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{1,20}$"><input type="email" name="visitor-email" placeholder="%2$s"><textarea name="visitor-message" placeholder="%3$s"></textarea><button id="contact-form-btn" type="button" name="submit" data-style="fill" data-horizontal class="progress-button"><span class="content">%4$s</span><span class="progress"><span class="progress-inner"></span></span></button><input type="hidden" name="user" value="%5$s" />
<input type="hidden" name="user_email" value="%6$s" /><input type="hidden" name="user_url" value="%7$s" /></form>';
   return $resume_contactform;
};

// sendmail handler
add_action('wp_ajax_sendmail', 'zet_sendmail_contact');
add_action('wp_ajax_nopriv_sendmail', 'zet_sendmail_contact');
function zet_sendmail_contact(){
    
        $frm_name = sanitize_text_field($_POST["user"]); 
        $recepient = sanitize_email($_POST["user_email"]); 
        $sitename  = sanitize_text_field($_POST["user_url"]); 
        $subject   = esc_html__('New contact from','zet') . ' '. esc_html__( $sitename ); 

        $name = sanitize_text_field($_POST["name"]);
        $email = sanitize_email($_POST["email"]);
        $msg = sanitize_text_field($_POST["message"]);
                
        $name = ($name) ? $name : esc_html_e('no visiter&#8216;s name','zet');
        $email = ($email) ? $email : esc_html_e('no visiter&#8216;s email','zet');
        $msg = ($msg) ? $msg : esc_html_e('no visiter&#8216;s message','zet');

        $message = '-------------------<br><br>' . esc_html__('Visitor name:','zet') . $name . '<br>' . esc_html__('Visitor email:','zet') . $email . '<br><br>' . $msg . '<br><br>-------------------';

        wp_mail($recepient, $subject, $message,esc_html__('From:','zet') . $name . "<$recepient>" . "\r\n" . esc_html__('Reply-To:','zet') . $recepient . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
        wp_die();
};


?>