 <?php 
/*
*template part for displaying file in page.php
*
*@package gridlumn
*/


  ?>

<div class="container gridlumn-content">
	
	
			<div class="col-md-12  " <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<p>	<?php the_content(); ?></p>
			</div><!-- /-->






</div>