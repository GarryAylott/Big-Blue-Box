<?php
/**
* Template for standard card-based post
*/
?>

<article class="post-card">
    <div class="post-img">
        <?php if (in_category('podcasts')) { ?>
            <div class="post-img-type-icon">
                <svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#podcast"></use></svg>
                <span>Podcast &bullet; <?php the_time('F jS, Y'); ?></span>
            </div>
        <?php } else { ?>
            <div class="post-img-type-icon">
                <svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#article"></use></svg>
                <span>Article &bullet; <?php the_time('F jS, Y'); ?></span>
            </div>
        <?php } ?>
        <?php the_post_thumbnail('feat-sml'); ?>
    </div>
    <div class="post-card__content">
        <div class="post-card--details">
            <a href="<?php the_permalink(); ?>">
                <h3 class="post-card--title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h3>
            </a>
            <?php the_excerpt(); ?>
        </div>

        <footer class="post-card--meta">
            <div class="author-info">
                <h6 class="post-card--sub-titles">Author</h6>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?>
                </a>
                <div class="post-card--name-tooltip">
                    <?php the_author(); ?>
                </div>
            </div>
            <div class="post-card--comment-date">
                <h6 class="post-card--sub-titles">Comments</h6>
                <a href="<?php the_permalink(); ?>#comments">
                    <p class="comment-count"><?php comments_number( 'Start conversation', 'One comment', '% comments' ); ?></p>
                </a>
            </div>
        </footer>
    </div>
</article>