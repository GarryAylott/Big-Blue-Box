<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-content-home">
		<?php the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="published-date"><?php the_time('jS F Y'); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_excerpt(); ?>
		<div class="powerpress-player">
    	<?php the_powerpress_content(); ?>
		</div>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
