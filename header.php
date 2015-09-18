<?php
/**
*The header for  theme
*display all of the <head> section
*@package gridlumn
*@since gridlumn 1.0
*/
?>

<!doctype html>
    <!-- [if IE 8] -->
        <html id="ie8" <?php language_attributes(); ?>>
    <!-- [endif] -->
    <!--[if !(ie 8)] > <!-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
    <title>
       <?php
        /**
        *navigation style using wordpress navigation menu
        */
    global $page, $paged;
        wp_title('|',true,'right');

        //adding blog name
        bloginfo('name');
        $site_description=get_bloginfo('description','display');

        if($site_description && (is_home()|| is_front_page())){
            echo "/$site_description";

          //adding a page number if necessary
          if($paged >=2 || $page>=2)

          echo '/'.sprint(__('Page%s','gridlumn'),
                        max($paged,$page));
}
           ?> </title>

           <?php wp_head() ?>

           <body <?php body_class(); ?> >

           <div class="navbar">
            <div class="navbar-header">
                <div class="navbar-brand"><?php bloginfo('name'); ?></div>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
           				<div class="collapse navbar-collapse">
           					<ul>

           					<?php
           					if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array( 'theme_location' => 'primary-menu' ,
                	) );
           } else{

           	$defaults= array(
           							'container'=>false,
           							'theme_location'=>'primary-menu',
           							'menu_class'=>'nav navbar-nav',
           							'fallback_cb' => 'gridlumn_menu_fallback',
           						);
           					wp_nav_menu($defaults);

           				}

           						?>


           					</ul>

           				</div>
           		</div>




