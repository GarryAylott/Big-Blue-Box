<?php
if (is_home()) {
	get_header('home');
}
else {
	get_header();
}
?>

<!-- Start two featured posts -->
<section class="recent-posts">
	<h4 class="main-title">Recent episodes</h4>
  <section class="two-feat-posts">
		<?php
	    $args = array(
	                    'post_status' => 'publish',
	                    'posts_per_page'=>2,
											'offset'=>1,
	                    'order'=>'DESC',
	                    'orderby'=>'ID'
	                    );

	    $recent_two_posts = new WP_Query( $args );

	    if ( $recent_two_posts->have_posts() ) {
	        while ( $recent_two_posts->have_posts() ) {
	            $recent_two_posts->the_post();
	            get_template_part('content',get_post_format());
	        }

	    } else {
	    	get_template_part( 'content', 'none' );
	    }
	    wp_reset_postdata();
		?>
  </section>
</section>
<!-- End two featured posts -->

<main id="main" class="main" role="main">

	<!-- Start main posts -->
	<section>
		<h4 class="main-title">Latest episodes</h4>
		<?php
			if ( have_posts() ) {
			    while ( have_posts() ) {
			        the_post();
			        get_template_part('content',get_post_format());
			    }
				the_posts_navigation();
			} else {
				get_template_part( 'content', 'none' );
			}
		?>
	</section>
	<!-- End main posts -->

</main>
<!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
