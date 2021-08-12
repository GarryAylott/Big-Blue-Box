<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigbluebox
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<section class="widget widget-social">
		<h2>Let's be social</h2>
		<p>We chat lots on the interwebs. Follow us to join in the conversation.</p>

		<div class="social-icons">
			<a href="https://twitter.com/bigblueboxpcast" target="_blank" rel="noopener">
				<svg class="social-icon twitter">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#twitter" /></use>
				</svg>
			</a>

			<a href="https://facebook.com/bigblueboxpodcast" target="_blank" rel="noopener">
				<svg class="social-icon facebook">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#facebook" /></use>
				</svg>
			</a>

			<a href="https://instagram.com/bigblueboxpodcast" target="_blank" rel="noopener">
				<svg class="social-icon instagram">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#instagram" /></use>
				</svg>
			</a>

			<a href="https://discord.gg/8jZ42Qg" target="_blank" rel="noopener">
				<svg class="social-icon discord">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#discord" /></use>
				</svg>
			</a>

			<a href="https://www.youtube.com/c/BigblueboxpodcastTV" target="_blank" rel="noopener">
				<svg class="social-icon youtube">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#youtube" /></use>
				</svg>
			</a>

			<a href="mailto:hello@bigblueboxpodcast.co.uk">
				<svg class="social-icon email">
					<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#email" /></use>
				</svg>
			</a>
		</div>
	</section>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php if ( is_home() ) { ?>
	<section class="widget">
		<a href="https://www.youtube.com/channel/UC89E0K6JoDdPViAYHqoVe6Q" target="_blank" rel="noopener">
			<img src="<?php bloginfo('template_url'); ?>/img/geeks-handbag-bnr.jpg">
		</a>
	</section>

	<section class="widget">
		<h2>Monthly archive</h2>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12, 'show_post_count' => true ) ); ?>
		</ul>
	</section>
	<?php } ?>
</aside><!-- #secondary -->