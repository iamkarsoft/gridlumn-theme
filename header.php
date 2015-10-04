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


           <?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
           wp_head() ?>

           <body <?php body_class(); ?> >

           <!-- custom header -->

             <?php if ( get_theme_mod( 'gridlumn-logo' ) ) : ?>
    <div class='site-logo logo '>
    <div>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'gridlumn-logo' ) ); ?>' class="center-block" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>

    </div>
    <div class="center-block text-center">
    <h3 class="col-md-offset-5 center-block"> <?php bloginfo('description') ?></h3>
    </div>
    </div>
<?php else : ?>
 
<?php endif; ?>

           <div class="navbar ">
            <div class="navbar-header">
             <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
              <?php else : ?>
                <div class="navbar-brand"><?php bloginfo('name'); ?></div>
                <?php endif; ?>
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




