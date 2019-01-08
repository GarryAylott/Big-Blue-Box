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

		<div class="header-static">

			<section class="header-static__content">
				<div class="author-page-title">
					<?php echo '<span>All articles by</span><h1 class="page-title">'; the_archive_title(); '</h1>'; ?>
				</div>
				
				<div class="author-page-twitter">
					<svg class="social-icon twitter">
						<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#twitter" /></use>
					</svg>
					<?php if (is_author('7')) { ?>
						<a href="https://twitter.com/@CJMModels" target="_blank" rel="noopener"><span class="author-title-twitter">@cjmmodels</span></a>
					<?php } elseif (is_author('3')) { ?>
						<a href="https://twitter.com/@JordanShortman1" target="_blank" rel="noopener"><span class="author-title-twitter">@jordanshortman1</span></a>
					<?php } elseif (is_author('4')) { ?>
						<a href="https://twitter.com/@kalotichy" target="_blank" rel="noopener"><span class="author-title-twitter">@kalotichy</span></a>
					<?php } elseif (is_author('5')) { ?>
						<a href="https://twitter.com/@Oldmankrondas" target="_blank" rel="noopener"><span class="author-title-twitter">@oldmankrondas</span></a>
					<?php } ?>
				</div>
			</section>
		</div>

		<div id="content" class="site-content">