 <?php 
/*
*template part for displaying posts
*
*@package gridlumn
*/


  ?>
  			<div class="col-md-8 gridlumn-content">
	
			<div class="col-md-12">
					<div class="col-md-12">
					<h1 class="grid-title text-center">  <?php the_title() ?>  </h1>
				

					<?php the_content(); ?>
					</div>

					


					<div class="col-md-12 ">
						
						
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
						
					</div>
				</div><!-- /-->

			<div class="col-md-12 ">
				
				<?php gridlumn_related_posts() ?>
			</div>

			</div>

		

			