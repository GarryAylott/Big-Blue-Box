<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Big Blue Box
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
			<img src="<?php bloginfo('template_url'); ?>/img/bigblueboxpodcast404.jpg" alt="Nope, nothing here I'm afraid">
				<header class="page-header">
					<h2 class="page-title"><?php _e( 'Nope, nothing here Im afraid', 'bigbluebox' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Things have gone a bit wibbly-wobbly or timey-wimey, maybe both!', 'bigbluebox' ); ?></p>
					<p><?php _e( 'Try doing a search below or <a href="http://localhost/bigbluebox/">jump back to the homepage.</a>', 'bigbluebox' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
