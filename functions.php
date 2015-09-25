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
  //adding theme support
the_tags();
load_theme_textdomain('gridlumn',get_template_directory().'/languages');

/**
*Enable editor style
*/

function gridlumn_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'gridlumn_add_editor_styles' );

/**
*Enable Custom header support
*/

 // add_theme_support( "custom-header", $args );

 /**
*Enable thumbnails support
*/
 add_theme_support( 'post-thumbnails' );

                
   
  $defaults = array(
    'before'           => '<p>' . __( 'Pages:','gridlumn' ),
    'after'            => '</p>',
    'link_before'      => '<li>',
    'link_after'       => '</li>',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next page','gridlumn' ),
    'previouspagelink' => __( 'Previous page','gridlumn' ),
    'pagelink'         => '%',
    'echo'             => 1
  );
 
   


/**
*Making sure title is not hard coded
*/
add_theme_support( "custom-header", $args ) ;
add_theme_support('title-tag');
/**
*Enable support for aside post format
*
*add_theme_support('post-formats',array('widgets'));
*/
/**
*custom template tags
*/

// require (get_template_directory().'/inc/template-tags.php');




/**
*default post and comments RSS
*/

add_theme_support('automatic-feed-links');

/**
*navigation style using wordpress navigation menu
*/


/**
*gridlumn scripts and stylesheets
*/
function gridlumn_theme_styles(){

  wp_enqueue_style('main-style',get_template_directory_uri());
  wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('other-css',get_template_directory_uri().'/css/style.css');
  // adding javascript files to the function
        wp_enqueue_script('bootsrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',false);
       wp_enqueue_script('gridlumn-customizer',get_template_directory_uri().'/js/theme-customizer.js',array("jquery", "customize-preview"),'',false);
}
add_action('wp_enqueue_scripts','gridlumn_theme_styles');

//adding image size to functions
add_image_size( $name, $width, $height, $crop);

/**
*gridlumn navigation fall back
*/
   function gridlumn_menu_fallback() {
     // callback code goes here
     // you can even output wp_list_categories() if you want

      echo '<div class="collapse navbar-collapse"><div class="nav navbar-nav"><li><a href="'.home_url().'/wp-admin/nav-menus.php">Add New Menu </a></li></div></div>';


};

/**
*gridlumn custom header and image size
*/

add_image_size( $name, $width, $height, $crop);


 // add_theme_support( "custom-header", $args );
/**
*gridlumn custom background
*/

// Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'gridlumn_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
    'sanitize_callback' == 'esc_url_raw'
  ) ) );

/**
*gridlumn custom logo
*/
  function themeslug_theme_customizer( $wp_customize ) {
    // Fun code will go here
  
  $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo','sanitize_callback' == 'esc_url_raw' );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
    'sanitize_callback' == 'esc_url_raw'
) ) );




}
add_action( 'customize_register', 'themeslug_theme_customizer' );



  /**
  *gridlumn adding theme support for menus
  */

  //
    add_theme_support('menus');


  
     /**
    * Registering of widgets
    *@since gridlumn 1.0
    */
    
    /**
*gridlumn widgets and sidebar registration
*/
function gridlumn_widgets_init(){

    register_sidebar( array(
        'name' => __( 'Sidebar Widget', 'gridlumn' ),
        'id' => 'sidebar',
  'before_widget'=>'<div class="widgets">',
      'after_widget'=>'</div>',

      'before_title'=>'<h1 class="widget-title">',
      'after_title'=>'</h1>'
    ) );

      register_sidebar( array(
        'name' => __( '1st footer widget', 'gridlumn' ),
        'id' => 'footer-1',
  'before_widget'=>'<div class="widgets">',
      'after_widget'=>'</div>',

      'before_title'=>'<h3 class="widget-title">',
      'after_title'=>'</h3>'
    ) );


    register_sidebar( array(
        'name' => __( '2nd footer widget', 'gridlumn' ),
        'id' => 'footer-2',
  'before_widget'=>'<div class="widgets">',
      'after_widget'=>'</div>',

      'before_title'=>'<h3 class="widget-title">',
      'after_title'=>'</h3>'
    ) );

    }
add_action( 'widgets_init', 'gridlumn_widgets_init' );

//creating read more links

function gridlumn_excerpt_length($length){

  return 44;
}

add_filter('excerpt_length','gridlumn_excerpt_length');

function gridlumn_excerpt_more($more){
  return '<p><a href="'.get_permalink().'" class="btn read-more-btn">'.'Full Post'.'</a></p>';

}

add_filter('excerpt_more','gridlumn_excerpt_more');


    function register_theme_menus(){

      register_nav_menus(

        array(
          'primary-menu'=>'Primary Menu',

          )
      );

}
    add_action('init','register_theme_menus');



    //creating related post


function gridlumn_related_posts(){
  $post_id=get_the_ID();
  $cat_ids=array();
  $categories=get_the_category($post_id);


  if($categories && !is_wp_error($categories)){
    foreach( $categories as $category ){

      array_push($cat_ids, $category->term_id);
  }

}


    $current_post_type=get_post_type($post_id);

      $args=array(

          'category__in' => $cat_ids,
          'post_type' =>$current_post_type,
          'posts_per_page'=>'3',
          'post__not_in'=>array($post_id)

        );


      $query= new WP_QUERY($args);
      if($query ->have_posts()){

?>


    <h3>
    <?php  _e('Related Posts', 'gridlumn'); ?>
    </h3>
       <?php

                    while ( $query->have_posts() ) {

                        $query->the_post();

                        ?>
                        <div class="col-md-4  ">
                           <div class="thumbnail related-post">

             <h4> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>

                           </div>
                        </div>
    <?php } ?>


  <?php }

  wp_reset_postdata();
}



}
endif;
add_action('after_setup_theme','gridlumn_setup');


