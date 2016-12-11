<?php get_header('archive'); ?>

<!-- Start main content -->
<section class="main-content">

	<main id="main" class="main" role="main">
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
	</main>
	<!-- #main -->

	<?php get_sidebar(); ?>

</section>
<!-- End main content -->

<?php get_footer(); ?>
