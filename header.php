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




