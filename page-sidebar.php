<?php
    get_header();
    /**
    *Template Name: Page with Sidebar
    */
    ?>

<div class="container">

    <?php if (have_posts()) :?>

    <?php while(have_posts()) : the_post(); ?>
        <div class="col-md-8">
                <?php get_template_part('template-parts/content','page-sidebar'); ?>
        </div>
    <?php endwhile; ?>

    <?php endif; ?>


            <?php get_sidebar('sidebar'); ?>





</div>



<?php
    get_footer(); ?>