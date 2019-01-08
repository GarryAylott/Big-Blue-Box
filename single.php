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

				the_post_navigation( array(
					'prev_text'				=> __( '&larr; Previous post: %title' ),
					'next_text'           	=> __( 'Next post: %title &rarr;' ),
					'screen_reader_text' 	=> __( 'Continue Reading' ),
				) );

			endwhile; // End of the loop.
			?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
