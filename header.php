<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigbluebox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<section class="top-nav">
		<div class="logo">
			<a href="/">
				<img src="<?php bloginfo('template_url'); ?>/img/bigblueboxlogo.svg" />
			</a>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'top-nav',
			) );
			?>
		</nav>

		<a class="btn-reg mob-nav-btn" role="button">Menu</a>
	</section>

	<div class="site-content-wrapper">

		<header id="masthead" class="site-header">
			
			<section class="header-wrapper">
				<div class="header-content">		
					<div class="header-content__latest-ep">
						<?php
							$args1 = array(
								'type' => 'post',
								'posts_per_page' => '1'
							);
							$header_post = new WP_Query($args1);

							if($header_post->have_posts()) : 
							while($header_post->have_posts()) : 
								$header_post->the_post();
						?>
							<?php echo '<div class="card-recentpost">'; ?>

							<?php if (in_category('podcasts')) { ?>
								<h5>Latest podcast episode</h5>
							<?php } else { (in_category('articles')) ?>
								<h5>Latest article</h5>
							<?php } ?>

							<div class="post-img">
								<?php if (in_category('podcasts')) { ?>
									<span class="post-img-type-icon">
										<svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#headphones"></use></svg>
									</span>
								<?php } else { ?>
									<span class="post-img-type-icon">
										<svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#article"></use></svg>
									</span>
								<?php } ?>
								
								<?php the_post_thumbnail('feat-lrg'); ?>
							</div>

							<a href="<?php the_permalink(); ?>">
								<h1><?php echo wp_trim_words( get_the_title(), 9, '...' ); ?></h1>
							</a>
							<?php the_powerpress_content(); ?>
							<?php echo '</div>'; ?>

						<?php endwhile;	else: ?>
							Oops, there are no posts.
						<?php endif;
							wp_reset_postdata();
						?>
					</div>

					<div class="header-content__subscribe">
						<h2>Subscribe and never miss a show</h2>
						<a href="#"><img class="badge-itunes" src="<?php bloginfo('template_url'); ?>/img/itunes-badge.png" width="173" height="44" /></a>
						<p>Listen on these platforms? We're on those too, go subscribe&hellip;</p>
						<div class="subscriber-badges">
							<a href="1"><span class="sprite sprite-stitcher-badge"></span></a>
							<a href="2"><span class="sprite sprite-spotify-badge"></span></a>
							<a href="3"><span class="sprite sprite-googleplay-badge"></span></a>
							<a href="4"><span class="sprite sprite-android-badge"></span></a>
							<a href="5"><span class="sprite sprite-rsspod-badge"></span></a>
							<a href="6"><span class="sprite sprite-rssall-badge"></span></a>
						</div>
					</div>
				</div>
			</section>

		</header>

		<div id="content" class="site-content">
