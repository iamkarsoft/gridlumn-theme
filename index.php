<?php
    get_header(); ?>

<div class="container">

    <!-- -->


	<?php


				$sticky = get_option( 'sticky_posts' );
					$args = array(
						'posts_per_page' => 1,
						'post__in'  => $sticky,
						'ignore_sticky_posts' => 1
					);
					$query = new WP_Query( $args );
					if ( isset($sticky[0]) ) { ?>
						<div class=" col-sm-12 col-md-12 grid-post gridlumn-content jumbotron">


						<div class=" col-md-5 grid-thumbnail">
					<?php	if(has_post_thumbnail()): ?>
						 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(250,250)) ?></a>

					<?php else: ?>
						<a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/no-thumbnail.png" class="img-responsive"> </a>

					<?php endif; ?>
						</div>

						<div class="col-md-7 grid-summary">
					<h1 class="grid-title"> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a> </h1>

					<div syle="padding:1%">
					 <div > <?php the_excerpt(); ?> </div>
					</div>

						</div>

			</div><!-- /-->
					<?php }

    		 ?>

    <?php if (have_posts()) :?>

    <?php while(have_posts()) : the_post(); ?>



                <?php get_template_part('template-parts/content'); ?>







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

    <?php endif; ?>
</div>





<?php
    get_footer(); ?>
