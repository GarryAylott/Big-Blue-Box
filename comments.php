<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bigbluebox
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<div class="comments-area__content">

			<h2 class="comments-title">Comments</h2>

			<?php if ( have_comments() ) : ?>

				<?php the_comments_navigation(); ?>

				<ol class="comment-list">
					<?php
					wp_list_comments( array(
						'callback' => 'better_comments'
					) );
					?>
				</ol>

				<?php
				the_comments_navigation();

				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() ) :
					?>
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bigbluebox' ); ?></p>
					<?php
				endif;
			// Check for have_comments().
			endif; ?>

			<div class="comments-form">
				<?php comment_form(); ?>

				<div class="comments-form__code-of-conduct">
					<a href="index.php?page_id=7349"><h4>Our Code of Conduct ></h4></a>
					<p>Be respectful. Play nice. Be kind.</p>
				</div>
			</div>

	</div>

</div><!-- #comments -->
