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

	<section class="widget widget-newsletter">
		<div id="revue-embed">
			<h2>Get the newsletter</h2>
			<p>Subscribe now and get your weekly newsletter for new episode updates plus show announcements.</p>
			<form class="newsletter-sub" action="https://www.getrevue.co/profile/bigblueboxpodcast/add_subscriber" method="post" id="revue-form" name="revue-form"  target="_blank">
				<div class="revue-form-group">
					<label for="member_first_name"></label>
					<input class="revue-form-field" placeholder="First name" type="text" name="member[first_name]" id="member_first_name">
				</div>
				<div class="revue-form-group">
					<label for="member_email"></label>
					<input class="revue-form-field" placeholder="Email address" type="email" name="member[email]" id="member_email">
				</div>
				<!-- <div class="revue-form-group">
					<label for="member_last_name">Last name <span class="optional">(Optional)</span></label>
					<input class="revue-form-field" placeholder="Last name... (Optional)" type="text" name="member[last_name]" id="member_last_name">
				</div> -->
				<div class="form-footer">
					<div class="revue-form-legals">
						<p class="small">By subscribing, you agree with Revue’s <a target="_blank" href="https://www.getrevue.co/terms">Terms</a> and <a target="_blank" href="https://www.getrevue.co/privacy">Privacy Policy</a>.</p>
					</div>
					<div class="revue-form-actions">
						<!-- <input class="btn-reg" type="submit" value="Subscribe" name="member[subscribe]" id="member_submit"> -->

						<button type="submit" value="Subscribe" name="member[subscribe]" id="member_submit" class="btn-reg">
							Submit
						</button>
					</div>
				</div>
			</form>
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