<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bigbluebox
 * 
 * Template Name: Articles Archive Page
 * 
 */

get_header('post_author');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="main-content">
			<section class="post-cards-grid">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$archive_query = array(
							'type' => 'post',
							'posts_per_page' => '30',
							'author__in' => '3',
							'paged' => $paged
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
			</div>

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
