<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-single' ); ?>>

	<header class="post-notes-title">
		<h2>Episode notes</h2>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="post-share-btns">
			<?php echo do_shortcode('[easy-social-share ukey="1510432172"]'); ?>
		</div>
		<div class="fb-comments">
			<?php echo do_shortcode('[fbcomments count="off" num="5" width="100%"]'); ?>
		</div>
	</div>

</article>
