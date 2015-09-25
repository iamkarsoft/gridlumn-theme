<?php
    get_header(); ?>

<div class="container ">

    <?php if (have_posts()) :?>

    <?php while(have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content','search'); ?>




<?php wp_link_pages($defaults); ?>


    <?php endwhile; ?>

    


<div class="col-md-12  ">
		    	<div class="col-md-4  ">

		    	</div>

		    	<div class="col-md-4 center-block pagination">
   		 <ul class="pagination col-md-offset-8 center-block ">
			<li class="alignleft pagination-btn"><?php previous_posts_link( '&laquo; Newer Posts' ); ?></li>
			<li class="alignright pagination-btn"><?php next_posts_link( 'Older Posts &raquo;', '' ); ?></li>
		</ul>
				</div>

				<div class="col-md-4 ">

		    	</div>
               
    
    	 </div>

<?php else: ?>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<div class="container gridlumn-content  text-center">
			<p class="center-block"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gridlumn' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class=" text-center"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridlumn' ); ?></p>
			<div class="text-center "><?php get_search_form(); ?></div>


		<?php else : ?>

			<p class="center-block"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gridlumn' ); ?></p>
			<div class="text-center "><?php get_search_form(); ?></div>

		<?php endif; ?>
		</div>
<?php endif; ?>
</div>
<?php
    get_footer(); ?>