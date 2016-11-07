<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-thumb">
		<a href="<?php the_permalink(); ?>">
			<img class="thumb-play" src="<?php bloginfo('template_url'); ?>/img/thumb-play-btn.svg" width="50" height="50">
			<div class="feat-img-small-container">
				<?php
					if ( has_post_thumbnail() ):
						the_post_thumbnail( 'post-feat-small', array('class' => 'post-feat-small') );
					endif
				?>
			</div><!-- End feat-img-small-container -->
		</a>
	</div>

	<div class="post-content-home">
		<?php the_title( '<h4>', '</h4>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="published-date"><?php the_time('jS F Y'); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php echo excerpt(22); ?>
		<?php
			if (in_category( 'Podcasts' )) {
				echo '<a class="btn-small" href="' . get_permalink() . '">Listen now</a>';
			} else {
				echo '<a class="btn-small" href="' . get_permalink() . '">Read article</a>';
			}
		?>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
