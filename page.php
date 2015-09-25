<?php
    get_header(); 

/*Template Name:Page no sidebar
*template part for displaying file in page.php
*
*@package gridlumn
*/

    ?>

<div class="container">

    <?php if (have_posts()) :?>

    <?php while(have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content','page'); ?>

    <?php endwhile; ?>

    <?php endif; ?>




</div>



<?php
    get_footer(); ?>