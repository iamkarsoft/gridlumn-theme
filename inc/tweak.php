<?php
/**
*Custom independant functions
*@package gridlumn
*@since gridlumn 1.0
*/


/**
*fall back wp_nav_menu fallback
*/


function gridlumn_page_menu_args($args){

$args['show_home']= true ;

return $args;
}

add_filter('wp_page_menu_args','gridlumn_page_menu_args');

/**
*adds custom classes
*@since gridlumn 1.0
*/

function gridlumn_body_classes($classes)
    //adds a class of group if post has more authors

    if(is_multi_author()){
        $classes[]='group-blog';
     }
        return $classes;
  }
  add_filter('body_class','gridlumn_body_classes');


?>