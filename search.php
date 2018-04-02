<?php get_header('search'); ?>

<!-- Start main content -->
<section class="main-content">

	<main id="main" class="main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->

	<?php get_sidebar(); ?>

</section>
<!-- End main content -->

<?php get_footer(); ?>
