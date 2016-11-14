<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Big Blue Box
 */
?>
		</section>
		<!-- End inner -->
	</div>
	<!-- End wrap -->

	<section class="instagram">
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</section>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="darken">
			<div class="inner-max-width">

				<section class="footer-col footer-about">
					<h4>About</h4>
					<p>A weekly Doctor Who podcast show bringing you news, reviews, commentaries and general chat on everything Who from your hosts Garry and Adam.</p>
					<a class="btn-small" href="index.php?page_id=24">About your hosts</a>
				</section>

				<section class="footer-col footer-social">
					<h4>Social Stuff</h4>
					<p>Stay up to date with show news, our review episodes plus plenty of Who chat.</p>
					<ul class="social-links">
						<li class="widget-tw"><a href="https://twitter.com/bigblueboxpcast" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="widget-fb"><a href="https://facebook.com/bigblueboxpodcast" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="widget-insta"><a href="https://instagram.com/bigblueboxpodcast" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</section>

				<section class="footer-col footer-feedback">
					<h4>Feedback</h4>
					<p>We'd love to hear your thoughts on the show. Let us know your thoughts using the <a href="index.php?page_id=378">contact us form.</a></p>
					<p>To leave a review in iTunes, <a href="https://itunes.apple.com/gb/podcast/doctor-who-big-blue-box-podcast/id852653886?mt=2" target="_blank">click here.</a></p>
				</section>

				<section class="footer-legals">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>

					<p>Big Blue Box Podcast original content &copy;
						<?php
						  $fromYear = 2014;
						  $thisYear = (int)date('Y');
						  echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?>.<br />
					This website and audio podcast has no affiliation with the BBC and Doctor Who is &copy; BBC. Any copyright infringement is unintentional.</p>
				</section><!-- End footer-legals -->

			</div><!-- End inner-max-width -->
		</div><!-- End darken -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
