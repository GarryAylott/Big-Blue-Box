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

	<header id="masthead" class="header-audio" role="banner">

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

    <!-- Start latest post -->
    <section class="header-post">
			<?php
				$args = array (
					'type' => 'post',
					'posts_per_page' => '1'
				);

		    $featured_post = new WP_Query( $args );

		    if ( $featured_post->have_posts() ) {
		        while ( $featured_post->have_posts() ) {
		            $featured_post->the_post();
		            get_template_part('content-header_home',get_post_format());
		        }
						wp_reset_postdata();
		    } else {
					get_template_part('content-none',get_post_format());
		    }
			?>
    </section>
    <!-- End latest post -->

	</header>

	<div id="wrap" class="wrap">
		<section class="inner">
