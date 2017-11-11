<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-single' ); ?>>

	<header class="post-notes-title">
		<h2>Episode notes</h2>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<div class="post-share-btns">
		<?php 
			$url = get_permalink($post->ID);
			$title = get_the_title($post->ID);
			echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,pinterest,mail,reddit" counters=1 counter_pos="hidden" total_counter_pos="left" style="button" message="yes" template="59" point_type="simple" url="'.$url.'" text="'.$title.'"]'); 
		?> 
		</div>
		<div class="fb-comments">
			<?php echo do_shortcode('[fbcomments count="off" num="5" width="100%"]'); ?>
		</div>
	</div>

</article>
