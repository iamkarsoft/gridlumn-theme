<?php 
/**
*Plugin Name: gridlumn Related Post
*Plugin URI:http://kofi.work/
*description:Plugin to display recent post
*Author: Koofi
*Author URI:http://kofi.work
*Licence:
*License URI:
*Text Domain: gridlumn
*/



function gridlumn_related_posts(){
	$post_id=get_the_ID();
	$cat_Id=array();
	$categories=get_the_category($post_id);


	if($categories && !is_wp_error($categories)){
		foreach($categories as $category){

			array_push($cat_ids, $category -> term_id)
	}

}


		$current_post_type=get_post_type($post_id);

			$args=array(

					'category__in' => $cat_ids,
					'post_type' =>$current_post_type,
					'posts_per_page'=>'3',
					'post__not_in'=>array($post_id)

				);


			$query= new WP_QUERY($args);
			if($query -> have_posts()){

?>

<div class="container">
	<div class="col-md-4 related-post">
		<h3>
		<?php  _e('Related Posts', 'gridlumn'); ?>
		</h3>
		   <?php

                    while ( $query->have_posts() ) {

                        $query->the_post();

                        ?>
		<h5> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h5>
		
		<?php } ?>
	</div>

	<?php }

	wp_reset_postdata();
}
	 ?>