<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('header-latest-post'); ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-size: cover; background-position: 0 50%; background-repeat: no-repeat;">

	<section class="inner">
		<div class="header-home--post-content">
			<div class="post-title">
				<?php the_title( '<h1>', '</h1>' ); ?>
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
	</section>

</article><!-- #post-## -->
