<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-single' ); ?>>

	<div class="post-single-media">
		<div class="feat-img-large-container">
			<?php
				if ( has_post_thumbnail() ):
					the_post_thumbnail( 'post-feat-large', array('class' => 'post-feat-large') );
				endif
			?>
		</div><!-- End feat-img-large-container -->
		<?php the_powerpress_content(); ?>
	</div><!-- End post-single-media -->

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="published-date"><?php the_time('jS F Y'); ?></span>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bigbluebox' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
