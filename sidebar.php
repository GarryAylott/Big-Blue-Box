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

			<a href="https://discord.gg/8jZ42Qg" target="_blank" rel="noopener">
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

	<section id="signup-widget" class="widget widget-newsletter">
		<h2>Get the newsletter</h2>
		<p>Receive our weekly newsletter so you know when new shows release plus any announcements.</p>

		<span>Your Data</span>
		<p class="small">We'll never sell or pass your data on for marketing purposes and your data will be treated with the upmost care. More details can be seen in our Privacy Policy.</p>

		<div id="mc_embed_signup">
			<form action="//bigblueboxpodcast.us1.list-manage.com/subscribe/post?u=72630f2037dc3aa1ffb849594&amp;id=38641c1f67" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email address here">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true">
						<input type="text" name="b_72630f2037dc3aa1ffb849594_38641c1f67" tabindex="-1" value="">
					</div>
					<div class="clear">
						<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-reg">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>

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