<?php get_header(); ?>


<div class="row">

	<div class="container search" >
		<div>
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<div class="container gridlumn-content search text-center">
			<p class="center-block  text-center"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gridlumn' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class=" text-center"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridlumn' ); ?></p>
			<div class="text-center "><?php get_search_form(); ?></div>


		<?php else : ?>

			<p class="center-block  text-center"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gridlumn' ); ?></p>
			<div class="text-center "><?php get_search_form(); ?></div>

		
		</div>
<?php endif; ?>

	</div>	<!-- /-->
</div><!-- /-->



<?php get_footer(); ?>