<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>

        <div class="post-content">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

            <div class="post-links">
                <!-- 掲載記事 -->
                <!-- ここにリンクを挿入する -->
            </div>

            <div class="post-share">
                <button class="facebook-share">Facebookシェア</button>
                <button class="twitter-share">Twitterシェア</button>
            </div>
        </div>
    </div>
    <?php endwhile; else : ?>
    <p>投稿が見つかりません。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
