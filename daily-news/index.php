<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                <span class="post-date"><?php the_date(); ?></span>
                <span class="post-category"><?php the_category(', '); ?></span>
            </div>
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php endwhile; else : ?>
        <p>投稿が見つかりません。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
