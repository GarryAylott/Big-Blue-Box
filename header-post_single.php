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

		<div class="header-single-post" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>');">
			
			<section class="header-single-post__content header-info">			
				<?php global $post; $author_id=$post->post_author; ?>
				<?php if( in_category('podcasts') ) { ?>
					<h6 class="header-post-tag"><svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#headphones"></use></svg> Podcast</h6>
					<h1 class="single-post-title"><?php single_post_title(); ?></h1>
					<?php echo ('<div class="header-post-meta">'.get_the_time('jS F, Y').'</div>'); ?>
					<div class="header-audio-player">
						<?php the_powerpress_content(); ?>
					</div>
				<?php } else { ?>
					<h6 class="header-post-tag"><svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#article"></use></svg> Article</h6>
					<h1 class="single-post-title"><?php single_post_title(); ?></h1>
					<?php echo ('<div class="header-post-meta">By <span class="post-meta-name">'.get_the_author_meta('display_name', $author_id).' </span>on <span class="post-meta-date">'.get_the_time('jS F, Y').'</span></div>');
				} ?>
			</section>
		</div>
		
		<div id="content" class="site-content">
