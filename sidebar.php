<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar" role="complementary">

	<!-- Social widget -->
	<section id="social-widget" class="widget sidebar-items">
		<h5 class="widget-title">Let's be social</h5>
		<p>We chat lots on the interwebs, follow us to keep up-to-date.</p>
		<ul class="social-links">
			<li><a class="icon-twitter" href="https://twitter.com/bigblueboxpcast" target="_blank" rel="noopener">Twitter</a></li>
			<li><a class="icon-facebook" href="https://facebook.com/bigblueboxpodcast" target="_blank" rel="noopener">Facebook</a></li>
			<li><a class="icon-instagram" href="https://instagram.com/bigblueboxpodcast" target="_blank" rel="noopener">Instagram</a></li>
		</ul>
	</section>
	<!-- End social-widget -->

	<!-- Begin MailChimp Signup Form -->
	<section id="signup-widget" class="widget sidebar-items">
		<h5 class="widget-title">Get the newsletter</h5>
		<div id="mc_embed_signup">
			<form action="//bigblueboxpodcast.us1.list-manage.com/subscribe/post?u=72630f2037dc3aa1ffb849594&amp;id=38641c1f67" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
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
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-medium">
					</div>
					<p class="small">We respect your privacy so your email address will never be passed on or sold. Ever.</p>
				</div>
			</form>
		</div>
	</section>
	<!--End mc_embed_signup-->

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->
