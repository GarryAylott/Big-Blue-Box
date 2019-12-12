<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bigbluebox
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="recent-posts">
				<div class="recent-posts__content">
					<h5>Recent posts</h5>
					<div class="recent-posts__grid">
					<!-- Recent posts block -->
					<?php
						$args2 = array(
							'type' => 'post',
							'posts_per_page' => '2',
							'offset' => '1'
						);
						$query2 = new WP_Query( $args2 );
					?>

					<?php if ( $query2->have_posts() ) {
						while ( $query2->have_posts() ) {
							$query2->the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'post-cards-recent' ); ?>
						<?php }
						wp_reset_postdata();
					} ?>
					<!-- /Recent posts block -->
					</div>
				</div>
			</section>
			
			<section class="home-main">
				<h5>Other posts</h5>

				<div class="home-main__content">
					<section class="posts-cards-grid-home">
						<!-- Other posts block -->
						<?php
							$args3 = array(
								'type' => 'post',
								'posts_per_page' => '10',
								'offset' => '3'
							);
							$query3 = new WP_Query( $args3 );
						?>

						<?php if ( $query3->have_posts() ) {
							while ( $query3->have_posts() ) {
								$query3->the_post(); ?>
								<?php get_template_part( 'template-parts/content', 'post-cards' ); ?>
							<?php }
							wp_reset_postdata();
						} ?>
						<!-- /Other posts block -->

						<div class="cta-full-width">
						<?php
							$category_podcasts = get_cat_ID( 'Podcasts' );
							$category_articles = get_cat_ID( 'Articles' );

							$category_link_podcasts = get_category_link( $category_podcasts );
							$category_link_articles = get_category_link( $category_articles );
						?>
							<a class="btn-lrg" href="<?php echo esc_url( $category_link_podcasts ); ?>" role="button">Show all podcasts</a>
							<a class="btn-lrg" href="<?php echo esc_url( $category_link_articles ); ?>" role="button">Show all articles</a>
						</div>
					</section>

					<?php get_sidebar(); ?>
				</div>
			</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="testimonials">
		<div class='stars'></div>
		<div class='stars2'></div>
		<div class='stars3'></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<h2>My Dose of Who?</h2>
					<p>I found this Podcast a few years ago and love its content and Garry and Adam's banter. I have watched Who since 1973 and been a fan since PDs in 1982.</p>
					<p>This is my interaction ( mute ) with other fans and I really miss it when its off air.</p>
					<p>Keep up the great work.</p>
					<span>Sidcup Man - Apple Podcasts</span>
				</div>
				<div class="swiper-slide">
					<h2>Vastly superior</h2>
					<p>Easily the best DW podcast going. They dissect stories/performances without making it boring.</p>
					<p>Independent podcasts tend to risk becoming about the participants rather than the topic but this one doesn't fall victim to this.</p>
					<p>Good structure, very interactive on social media and respectful of listeners opinions.</p>
					<span>Patgsy - Apple Podcasts</span>
				</div>
				<div class="swiper-slide">
					<h2>A great adventure through time and space</h2>
					<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
					<span>TheAshOfAwesome - Apple Podcasts</span>
				</div>
				<div class="swiper-slide">
					<h2>Love it</h2>
					<p>I love listening to Adam and Garry, definitely my favourite Doctor Who podcast. I cam to the party quite late, so I'm working my way through the back catalogue, this means I'm watching stories that I wouldn't normally choose to watch and I'm really enjoying them - which is fantastic. Thanks lads keep up the good work.</p>
					<span>Devon Dan - Apple Podcasts</span>		
				</div>
				<div class="swiper-slide">
					<h2>Great Show for New or Old Who Fans</h2>
					<p>Since discovering this podcast I have been hooked! The hosts approach even the more lacking episodes of Who (eg. Nightmare in Silver) with a warmth and enthusiasm that is a joy to listen to, always looking to find positives. The Merch corner segment is particularly enjoyable as it is a treat to listen to honest and constructive critiques of the wide range of Doctor Who merchandise that is out there. Keep up the good work!</p>
					<span>Joe23 - Stitcher</span>
				</div>
				<div class="swiper-slide">
					<h2>BEST PODCAST IN THE WHONIVERSE!</h2>
					<p>This is my all time favourite podcast, I look forward to my weekly 'Friday Fix' of Garry & Adam reviewing New Who, Classic Who & more recently the addition of Sarah Jane Adventures & Torchwood - they give honest, detailed reviews, & including fan reviews is a key part of every episode. Keep up the good work guys, you always start off my weekend on a positive note! 👝</p>
					<span>xXxSLBxXx - Apple Podcasts</span>
				</div>
				<div class="swiper-slide">
					<h2>A Whovian's Dream</h2>
					<p>I totally recommend this podcast, presented by two awesome Whovians who really know their stuff, it's an absolute treat to recieve this in my inbox each week. Packed full of Who news, merch and weekly modern/classic episode reviews, this is a Whovian's no.1 podcast and one you really should be listening to!!</p>
					<span>Lewis Blackmore - Apple Podcasts</span>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
