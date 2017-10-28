<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-thumb">
		<a href="<?php the_permalink(); ?>">
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
		<?php the_excerpt(); ?>
	</div><!-- End post-content-home -->

</article><!-- #post-## -->
