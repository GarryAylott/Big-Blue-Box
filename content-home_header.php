<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="header-home--post-content">
		<div class="post-title">
			<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<span>Latest Episode</span>
		</div>
		<div class="post-meta">
			<?php if ( 'post' == get_post_type() ) : ?>
				<span class="published-date"><?php the_time('jS F Y'); ?></span>
			<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php echo excerpt(45); ?>
    <?php the_powerpress_content(); ?>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
