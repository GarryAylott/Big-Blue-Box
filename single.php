<?php get_header('single'); ?>

<!-- Start main content -->
<section class="main-content">

	<main id="main" class="main" role="main">
		<?php
			if ( have_posts() ) {
					while ( have_posts() ) {
							the_post();
							get_template_part('content', 'single');
					}
				the_posts_navigation();
			} else {
				get_template_part( 'content', 'none' );
			}
		?>
	</main><!-- #main -->

	<?php get_sidebar(); ?>

</section>
<!-- End main content -->

<?php get_footer(); ?>
