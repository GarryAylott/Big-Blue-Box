<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="masthead" class="header" role="banner">

		<!-- Header content -->
		<div class="header-top">
			<section class="header-main">
				<div class="logo">
					<a href="/">
						<img src="<?php bloginfo('template_url'); ?>/img/BBB-Logo-darkbg.svg" width="211" height="98">
					</a>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="#" class="menu-link">
			            <div id="nav-icon">
			                <span></span>
			                <span></span>
			                <span></span>
			            </div>
			        </a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav>
			</section>
		</div>
		<!-- End header-top -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found inner">
					<header class="page-header">
						<h2 class="page-title"><?php _e( 'Nope, nothing here Im afraid', 'bigbluebox' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'Things have gone a bit wibbly-wobbly or timey-wimey, maybe both!', 'bigbluebox' ); ?></p>
						<p><?php _e( 'Try doing a search below or <a href="/">jump back to the homepage.</a>', 'bigbluebox' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
