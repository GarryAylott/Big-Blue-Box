<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bigbluebox
 */

get_header('post_404');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404-wrapper">

				<section class="error-404 not-found">
					<div class="page-content">
						<h4><?php esc_html_e( "Cybermats have been in the console again and the post or page you're looking for has been lost. Try searching again or check out some recent posts from below.", 'bigbluebox' ); ?></h4>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

				<!-- <div class="error-404-img">
					<img src="<?php bloginfo('template_url'); ?>/img/doctor-rain-said.gif" />
				</div> -->

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
