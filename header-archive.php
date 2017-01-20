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
	<header id="masthead" class="header-simple" role="banner">

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

		<section class="title-area">
			<?php
				echo '<h1 class="page-title">'; single_cat_title(); '</h1>';
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</section>

	</header>

	<div id="wrap" class="wrap">
		<section class="inner">
