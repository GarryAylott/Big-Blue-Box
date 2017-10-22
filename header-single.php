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

		<article id="post-<?php the_ID(); ?>" <?php post_class('header-latest-post'); ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-size: cover; background-position: 0 50%; background-repeat: no-repeat;">

			<section class="inner">
				<div class="header-audio--post-content">

					<div class="post-title">
						<?php the_title( '<h1>', '</h1>' ); ?>
						<?php if ( is_home() && in_category('podcasts')) : ?>
							<span>Latest Episode</span>
						<?php endif; ?>
					</div>

					<?php global $post; $author_id=$post->post_author; ?>
					<?php if ('post' == get_post_type() && in_category('podcasts')) {
						echo ('<div class="post-meta--podcast">'.get_the_time('jS F, Y').'</div>');
					} elseif ('post' == get_post_type() && in_category('articles')) {
						echo ('<div class="post-meta--article"><span class="post-meta-name">'.get_the_author_meta('display_name', $author_id).' </span> '.get_the_time('jS F, Y').'</div>');
					} ?>

					<?php the_powerpress_content(); ?>
				
				</div><!-- End post-content-home -->
			</section>

		</article>

	</header>

	<div id="wrap" class="wrap">
		<section class="inner">
