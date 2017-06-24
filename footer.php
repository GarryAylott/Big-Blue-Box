</section>
		<!-- End inner -->
	</div>
	<!-- End wrap -->

	<section class="instagram">
		<div class="instagram-title">
			<h4>Instagram</h4>
		</div>
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</section>

	<footer class="site-footer" role="contentinfo">
		<div class="inner">

			<div class="footer-cols">
				<section class="footer-col footer-about">
					<h4>About</h4>
					<p>A weekly Doctor Who podcast show bringing you news, reviews, commentaries and general chat on everything Who from your hosts Garry and Adam.</p>
					<a class="btn-small" href="index.php?page_id=1148">About your hosts</a>
				</section>

				<section class="footer-col footer-social">
					<h4>Social Stuff</h4>
					<p>Stay up to date with show news, our review episodes plus plenty of Who chat.</p>
					<ul class="social-links">
						<li><a class="icon-twitter" href="https://twitter.com/bigblueboxpcast" target="_blank">Twitter</a></li>
						<li><a class="icon-facebook" href="https://facebook.com/bigblueboxpodcast" target="_blank">Facebook</a></li>
						<li><a class="icon-instagram" href="https://instagram.com/bigblueboxpodcast" target="_blank">Instagram</a></li>
					</ul>
				</section>

				<section class="footer-col footer-feedback">
					<h4>What do you think?</h4>
					<p>We love hearing from you and your thoughts on the show. Shoot us an email <a href="mailto:hello@bigblueboxpodcast.co.uk">here.</a></p>
					<p>If you're an iTunes listener you can <a href="https://itunes.apple.com/gb/podcast/doctor-who-big-blue-box-podcast/id852653886?mt=2" target="_blank" rel="noopener">leave a review here.</a></p>
				</section>
			</div><!-- End footer-cols -->

			<div class="footer-btm-info">
				<section class="footer-legals">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>

					<p>Big Blue Box Podcast original content &copy;
						<?php
						  $fromYear = 2014;
						  $thisYear = (int)date('Y');
						  echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?>.<br />
					This website and audio podcast has no affiliation with the BBC and Doctor Who is &copy; BBC. Any copyright infringement is unintentional.</p>
				</section><!-- End footer-legals -->
				<section class="footer-logo">
					<img src="<?php bloginfo('template_url'); ?>/img/BBB-Logo-darkbg.svg" width="180" height="auto">
				</section>
			</div><!-- End footer-btm-info -->

		</div><!-- End inner-max-width -->
	</footer>

<?php wp_footer(); ?>


<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 300,
        autoplay: 13000,
				speed: 700,
        autoplayDisableOnInteraction: false,
				autoHeight: true,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				loop: true,
				effect: 'fade',
				fade: { crossFade: true }
    });
</script>
</body>
</html>
