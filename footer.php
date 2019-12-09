<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigbluebox
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer">
			<div class="footer-info">
				<div class="footer-info__col">
					<h4>The Socials</h4>
					<p>Stay up to date with show news, our review episodes plus plenty of Who chat.</p>
					
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

						<a href="mailto:hello@bigblueboxpodcast.co.uk">
							<svg class="social-icon email">
								<use xlink:href="<?php bloginfo('template_url'); ?>/img/social-icons.svg#email" /></use>
							</svg>
						</a>
					</div>
				</div>

				<div class="footer-info__col">
					<h4>About the show</h4>
					<p>A weekly Doctor Who podcast show bringing you news, reviews, commentaries and general chat on everything Who from your hosts Garry and Adam. <a href="index.php?page_id=4046">Read more</a></p>
				</div>
				<div class="footer-info__col">
					<h4>What do you think?</h4>
					<p>We love hearing from you and your thoughts on the show. Shoot us an email <a href="mailto:hello@bigblueboxpodcast.co.uk">here</a> or if you're an Apple Podcasts listener you can leave a review <a href="https://itunes.apple.com/gb/podcast/doctor-who-big-blue-box-podcast/id852653886?mt=2" target="_blank" rel="noopener">here.</a></p>
				</div>
			</div>

			<div class="footer-legal">
				<div class="footer-legal__info">
					<a href="index.php?page_id=493"><h6>Privacy Policy</h6></a>
					<a href="index.php?page_id=492"><h6>Terms &amp; Conditions</h6></a>
					<a href="index.php?page_id=7349"><h6>Code of Conduct</h6></a>

					<p class="small">&copy; 2014 - <?php echo date("Y"); ?> Big Blue Box Original Content. This website and audio podcast has no affiliation with the BBC and Doctor Who is &copy;BBC. Any copyright infringement is unintentional.</p>
				</div>

				<div class="footer-legal__logo">
					<img src="<?php bloginfo('template_url'); ?>/img/bigblueboxlogo.svg" />
				</div>
			</div>
		</footer>
	</div><!-- #page -->

</div><!-- .site-content-wrapper -->

<?php
	$category_podcasts = get_cat_ID( 'Podcasts' );
	$category_articles = get_cat_ID( 'Articles' );

	$category_link_podcasts = get_category_link( $category_podcasts );
	$category_link_articles = get_category_link( $category_articles );
?>

<div class="nav-sidebar">
	<ul class="nav">
		<a class="nav-sidebar__link" href="/">
			<li>
				<svg class="nav-siderbar__icon home"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#home"></use></svg>
				Home
			</li>
		</a>
		<a class="nav-sidebar__link" href="<?php echo esc_url( $category_link_podcasts ); ?>">
			<li>
				<svg class="nav-siderbar__icon podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#podcast"></use></svg>
				Podcasts
			</li>
		</a>
		<a class="nav-sidebar__link"  href="<?php echo esc_url( $category_link_articles ); ?>">
			<li>
				<svg class="nav-siderbar__icon article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#article"></use></svg>
				Articles
			</li>
		</a>
		<a class="nav-sidebar__link"  href="index.php?page_id=4046">
			<li>
				<svg class="nav-siderbar__icon team"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#tardis"></use></svg>
				Tardis Team
			</li>
		</a>
		<a class="nav-sidebar__link"  href="https://www.redbubble.com/people/garrybigbluebox/works/35405828-the-big-blue-box?asc=u" target="_blank" rel="noopener">
			<li>
				<svg class="nav-siderbar__icon shop"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#cart"></use></svg>
				Shop
			</li>
		</a>
	</ul>
</div>

<?php wp_footer(); ?>

</body>
</html>
