<?php get_header('page'); ?>

<!-- Start main content -->
<section class="main-content">

		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>
		</main>
		<!-- #main -->

</section>
<!-- End main content -->
<?php get_footer(); ?>
