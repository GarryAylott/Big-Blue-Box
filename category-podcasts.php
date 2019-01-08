<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bigbluebox
 * 
 * Template Name: Podcasts Archive Page
 * 
 */

get_header('post_archive');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="post-cards-grid">
				<?php
					$archive_query = array(
						'type' => 'post',
						'posts_per_page' => '30',
						'cat' => '5',
						'paged' => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
					);
					$archive_query = new WP_Query( $archive_query );
				?>

				<?php if ( $archive_query->have_posts() ) {
					while ( $archive_query->have_posts() ) {
						$archive_query->the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'post-cards' );
						?>
					<?php }
				} ?>
			</section>

			<div class="pagination">
				<h2 class="screen-reader-text">Category - Articles pagination</h2>
				<div class="nav-links">
					<?php pagination_nums( $archive_query ); ?>
				</div>
			</div>
			
			<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
