<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-results' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h4>', '</h4>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->