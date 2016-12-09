<?php
/**
 * @package Big Blue Box
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('header-latest-post'); ?> style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>'); background-size: cover; background-position: 0 50%; background-repeat: no-repeat;">

	<section class="inner">
		<div class="header-audio--post-content">
			<div class="post-title">
				<?php the_title( '<h1>', '</h1>' ); ?>
				<?php if ( in_category('podcasts') ) : ?>
					<span>Latest Episode</span>
				<?php endif; ?>
			</div>
			<div class="post-meta">
				<?php if ( 'post' == get_post_type() ) : ?>
					<span class="published-date"><?php the_time('jS F Y'); ?></span>
				<?php endif; ?>
			</div><!-- End entry-meta -->
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<a class="show-notes-link" href="<?php the_permalink(); ?>">Read full show notes</a>
	    <?php the_powerpress_content(); ?>
		</div><!-- End post-content-home -->
	</section>

</article><!-- #post-## -->
