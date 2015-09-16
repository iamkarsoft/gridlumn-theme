<?php  
/*
*gridlumn function and definitions
*@package gridlumn
*@since gridlumn 1.0
*/

if(! isset($content_width))
		$content_width=654; /* pixels */;

if(! function_exists('gridlumn_setup')):
/**
*setting up theme defaults
*
*@since gridlumn 1.0
*/

function gridlumn_setup(){
/**
*custom functions
*/
require (get_template_directory().'/inc/tweak.php');

/**
*Making theme available for translation
*/

load_theme_textdomain('gridlumn',get_template_directory().'/languages');

/**
*Enable support for aside post format
*/

add_theme_support('post-formats',array('aside'));

/**
*custom template tags
*/

require (get_template_directory().'inc/template-tags.php');

/**
*default post and comments RSS
*/

add_theme_support('automatic-feed-links');

/**
*navigation style using wordpress navigation menu
*/

register_nav_menus(array(
            'primary'=>__('Primary Menu','gridlumn'),
            ));



}
endif;
add_action('after_setup_theme','gridlumn_setup');


