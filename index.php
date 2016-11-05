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
	<div class="title-container">
		<h4 class="main-title">Recent episodes</h4>
	</div>
  <section class="two-feat-posts">
		<?php
	    $args = array (
	      'post_status' => 'publish',
	      'posts_per_page'=>2,
				'category_name' => 'podcasts',
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

<section class="subscribe">
	<h3>Subscribe on iTunes and never miss a show</h3>
	<a class="btn-large" href="#" target="_blank">Subscribe on iTunes</a>
</section>

<section class="main-content">

	<main id="main" class="main" role="main">
		<section>
			<div class="title-container">
				<h4 class="main-title">More episodes</h4>
			</div>
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

</section>

<?php get_footer(); ?>
