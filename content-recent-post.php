<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-position: 50% 50%;">

	<div class="post-content-recent">
		<?php the_title( '<h2>', '</h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="published-date"><?php the_time('jS F Y'); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php echo excerpt(20); ?>
		<a class="btn-medium" href="<?php the_permalink(); ?>">Listen now</a>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
