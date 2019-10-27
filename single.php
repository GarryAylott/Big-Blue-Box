<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigbluebox
 */

get_header('post_single');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<div class="single-post-content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop
			?>

			<?php if (in_category('articles')) { ?>
				<div class="post-author">
					<div class="post-author__avatar">
						<?php echo get_avatar( get_the_author_email(), '120' ); ?>
					</div>
					<div class="post-author__details">
						<h4><?php the_author_posts_link(); ?></h4>
						<p><?php the_author_description(); ?></p>

						<?php
							$first_name = get_the_author_meta( 'first_name', $first_name );
							$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
							echo '<a class="btn-reg" href="'. $user_posts .'">All posts by ' . $first_name . '</a>'
						?>
					</div>
				</div>
			<?php } else { ?>
				
			<?php } ?>

			<?php
				the_post_navigation( array(
					'prev_text'				=> __( '&larr; Previous post: %title' ),
					'next_text'           	=> __( 'Next post: %title &rarr;' ),
					'screen_reader_text' 	=> __( 'Continue Reading' ),
				) );
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
