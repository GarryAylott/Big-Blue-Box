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
	      'orderby'=>'ID'
      );

	    $recent_two_posts = new WP_Query( $args );

	    if ( $recent_two_posts->have_posts() ) {
	        while ( $recent_two_posts->have_posts() ) {
	            $recent_two_posts->the_post();
	            get_template_part('content-recent-post',get_post_format());
	        }
					wp_reset_postdata();
	    } else {
	    	get_template_part( 'content', 'none' );
	    }
		?>
  </section>
</section>
<!-- End two featured posts -->

<div class="main-content">

	<main id="main" class="main" role="main">
		<section>
			<h4 class="main-title">More episodes</h4>
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
	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
