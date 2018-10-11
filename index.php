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
			<h5>Recent posts&hellip;</h5>

			<div class="recent-posts__wrapper">
			<?php
				$args2 = array(
					'type' => 'post',
					'posts_per_page' => '2',
					'offset' => '1'
				);

				$query2 = new WP_Query( $args2 );

				if ( $query2->have_posts() ) {
					while ( $query2->have_posts() ) {
						$query2->the_post();
						echo '<article class="post-card">' ?>
							<div class="post-img">
								<?php if (in_category('podcasts')) { ?>
									<span class="post-img-type-icon">
										<svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#headphones"></use></svg>
									</span>
								<?php } else { ?>
									<span class="post-img-type-icon">
										<svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#article"></use></svg>
									</span>
								<?php } ?>

								<?php the_post_thumbnail('feat-med'); ?>
							</div>
							<div class="post-card__content">
								<div class="post-card--details">
									<a href="<?php the_permalink(); ?>">
										<h2 class="post-card--title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h2>
									</a>
									<?php the_excerpt(); ?>
								</div>
								<footer class="post-card--meta">
									<div class="author-info">
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
											<?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?>
										</a>
										<div class="post-card--name-tooltip">
											<?php the_author(); ?>
										</div>
									</div>
									<span><?php the_time('F jS, Y'); ?></span>
								</footer>
							</div>
						<?php echo '</article>';
					}
					wp_reset_postdata();
				}
			?>
			</div>
		</section>
		
		<div class="main-content">
			<section class="other-posts">
				<?php
					$args3 = array(
						'type' => 'post',
						'posts_per_page' => '10',
						'offset' => '3'
					);

					$query3 = new WP_Query( $args3 );

					if ( $query3->have_posts() ) {
						while ( $query3->have_posts() ) {
							$query3->the_post();
							echo '<article class="post-card">' ?>
								<div class="post-img">
									<?php if (in_category('podcasts')) { ?>
										<span class="post-img-type-icon">
											<svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#headphones"></use></svg>
										</span>
									<?php } else { ?>
										<span class="post-img-type-icon">
											<svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/post-icons.svg#article"></use></svg>
										</span>
									<?php } ?>

									<?php the_post_thumbnail('feat-sml'); ?>
								</div>
								<div class="post-card__content">
									<div class="post-card--details">
										<a href="<?php the_permalink(); ?>">
											<h3 class="post-card--title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h3>
										</a>
										<?php the_excerpt(); ?>
									</div>
									<footer class="post-card--meta">
										<div class="author-info">
											<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
												<?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?>
											</a>
											<div class="post-card--name-tooltip">
												<?php the_author(); ?>
											</div>
										</div>
										<span><?php the_time('F jS, Y'); ?></span>
									</footer>
								</div>
							<?php echo '</article>';
						}
						wp_reset_postdata();
					}
				?>
			</section>

			<?php get_sidebar(); ?>
		</div>
		
		<div class="cta-full-width">
			<a class="btn-lrg" href="" role="button">Show all posts</a>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="testimonials">
		<div class="test-1">
			<h4>A great adventure through time and space</h4>
			<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
			<span>TheAshOfAwesome - iTunes</span>
		</div>
		<div class="test-2">
			<h4>A great adventure through time and space</h4>
			<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
			<span>TheAshOfAwesome - iTunes</span>		
		</div>
		<div class="test-3">
			<h4>A great adventure through time and space</h4>
			<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
			<span>TheAshOfAwesome - iTunes</span>
		</div>
		<div class="test-4">
			<h4>A great adventure through time and space</h4>
			<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
			<span>TheAshOfAwesome - iTunes</span>
		</div>
		<div class="test-5">
			<h4>A great adventure through time and space</h4>
			<p>A stellar podcast from 2 great hosts in Garry and Adam. You can tell these guys are absolutely passionate about what they do and it's great to see. They give you the run down of this week's news to merch, then a review episode from Classic to New Who, as well as reviews on epsidodes from spin offs such as The Sarah Jane Adventures and Torchwood. A must for any Doctor Who fan.</p>
			<span>TheAshOfAwesome - iTunes</span>
		</div>
	</section>

<?php
get_footer();
