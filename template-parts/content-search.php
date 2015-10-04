 <?php
/*
*template part for displaying posts
*
*@package gridlumn
*/


  ?>



			<?php if ( 'post' == get_post_type() ) : ?>
			<div class=" col-sm-12 col-md-12 grid-post gridlumn-content">


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

			<?php wp_link_pages($defaults); ?>

		<?php endif; ?>
