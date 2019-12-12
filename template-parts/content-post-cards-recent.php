<?php
/**
* Template for standard recent (larger) card-based posts
*/
?>

<article class="post-card">
    <div class="post-img">
        <?php if (in_category('podcasts')) { ?>
            <span class="post-img-type-icon">
                <svg class="post-img-type-icon__podcast"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#podcast"></use></svg>
            </span>
        <?php } else { ?>
            <span class="post-img-type-icon">
                <svg class="post-img-type-icon__article"><use xlink:href="<?php bloginfo('template_url'); ?>/img/site-icons.svg#article"></use></svg>
            </span>
        <?php } ?>

        <?php the_post_thumbnail('feat-med'); ?>
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
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?>
                </a>
                <div class="post-card--name-tooltip">
                    <?php the_author(); ?>
                </div>
            </div>
            <div class="post-card--comment-date">
                <a href="<?php the_permalink(); ?>#comments">
                    <p class="comment-count"><?php comments_number( 'No comments', 'One comment', '% comments' ); ?></p>
                </a>
                <p class="comment-date"><?php the_time('F jS, Y'); ?></p>
            </div>
        </footer>
    </div>
</article>