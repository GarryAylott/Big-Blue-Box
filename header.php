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
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
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
								<h1><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></h1>
							</a>
							<?php echo '</div>'; ?>

						<?php endwhile;	else: ?>
							Oops, there are no posts.
						<?php endif;
							wp_reset_postdata();
						?>
					</div>

					<div class="header-content__subscribe">
						<h2>Subscribe and never miss a show</h2>

						<a href="https://itunes.apple.com/gb/podcast/the-doctor-who-big-blue-box-podcast/id852653886?mt=2&ls=1"  target="_blank">
							<img class="badge-itunes" src="<?php bloginfo('template_url'); ?>/img/itunes-badge.png" width="173" height="44" />
						</a>

						<p>Listen on these platforms? We're on those too, go subscribe&hellip;</p>
						<div class="subscriber-badges">
							<a href="https://www.stitcher.com/podcast/the-doctor-who-big-blue-box-podcast" target="_blank">
								<span class="sprite sprite-stitcher-badge"></span>
							</a>
							<a href="https://open.spotify.com/show/2vRtn5865vpoNNpD5wUtZS?si=NNX0phChS8-iEGVJZTnXBQ" target="_blank">
								<span class="sprite sprite-spotify-badge"></span>
							</a>
							<a href="https://playmusic.app.goo.gl/?ibi=com.google.PlayMusic&isi=691797987&ius=googleplaymusic&apn=com.google.android.music&link=https://play.google.com/music/m/Iotxjuso6fr7kqr3siuyewckecq?t%3DThe_Doctor_Who_Big_Blue_Box_Podcast%26pcampaignid%3DMKT-na-all-co-pr-mu-pod-16" target="_blank">
								<span class="sprite sprite-googleplay-badge"></span>
							</a>
							<a href="http://www.subscribeonandroid.com/www.bigblueboxpodcast.co.uk/feed/podcast" target="_blank">
								<span class="sprite sprite-android-badge"></span>
							</a>
							<a href="https://feeds.captivate.fm/doctor-who-big-blue-box-podcast/" target="_blank">
								<span class="sprite sprite-rsspod-badge"></span>
							</a>
							<a href="https://www.bigblueboxpodcast.co.uk/feed/" target="_blank">
								<span class="sprite sprite-rssall-badge"></span>
							</a>
						</div>
					</div>
				</div>
			</section>

		</header>

		<div id="content" class="site-content">
