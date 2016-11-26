<?php
if (is_home()) {
	get_header('home');
}
else {
	get_header();
}
?>

<!-- Start two recent posts -->
<section class="recent-posts">
	<div class="title-container">
		<h3 class="main-title">Recent episodes</h3>
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
<!-- End two recent posts -->

<!-- Start subscribe -->
<section class="subscribe">
	<h3>Subscribe on iTunes and never miss a show</h3>
	<a class="btn-large" href="https://itunes.apple.com/gb/podcast/doctor-who-big-blue-box-podcast/id852653886?mt=2&ls=1" target="_blank">Subscribe on iTunes</a>
	<p>Listen on these platforms? We're on those too, go subscribe&hellip;</p>
	<ul>
		<li><a href="http://www.stitcher.com/podcast/the-doctor-who-big-blue-box-podcast" target="_blank">Stitcher</a></li>
		<li><a href="http://www.subscribeonandroid.com/www.bigblueboxpodcast.co.uk/feed/podcast" target="_blank">Android</a></li>
		<li><a href="http://www.bigblueboxpodcast.co.uk/feed/podcast/" target="_blank">RSS</a></li>
	</ul>
</section>
<!-- End subscribe -->

<!-- Start main content -->
<section class="main-content">

	<main id="main" class="main" role="main">
		<section>
			<div class="title-container">
				<h3 class="main-title">More episodes</h3>
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
<!-- End main content -->

<?php get_footer(); ?>
