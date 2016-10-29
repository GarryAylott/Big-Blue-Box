<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-position: center center;">

	<div class="post-content-recent">
		<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="published-date"><?php the_time('jS F Y'); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
