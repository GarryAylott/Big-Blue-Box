<?php
/**
 * @package Big Blue Box
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="header-audio" role="banner">

		<!-- Header content -->
		<section class="inner">

			<div class="header-top">
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
			</div>

	    <!-- Start header episode player -->
	    <section class="header-post">

				<?php

					$lastPost = new WP_Query( 'type=post&posts_per_page=1' );

					if( $lastPost->have_posts() ):

						while( $lastPost->have_posts() ): $lastPost->the_post(); ?>

							<?php get_template_part('content-home-single',get_post_format()); ?>

						<?php endwhile;

					endif;

					wp_reset_postdata();

				?>

	    </section>
	    <!-- End header episode player -->

		</section>
		<!-- End header content -->

	</header>

	<div id="wrap" class="wrap">
