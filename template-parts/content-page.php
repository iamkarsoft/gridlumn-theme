 <?php 
/*
*template part for displaying file in page.php
*
*@package gridlumn
*/


  ?>

<div class="container">
	
	
			<div class="col-md-12  " <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h3 class="grid-title">  <?php the_title() ?>  </h3><br/>

				<p>	<?php the_content(); ?></p>
			</div><!-- /-->






</div>