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

            <!-- Added static content -->
            <div class="added-content">
                <img src="path_to_image" alt="Image Alt Text" style="width: 883px; height: 550px;" />
                <p>News | 1988.08.25</p>
                <h2>記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル記事タイトル</h2>
                <p>記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事本文記事quote("・目次\n目次項目①\n\n目次項目①", "目次項目①\n\n・掲載記事\n外部リンク外部リンク外部リンク外部リンク外部リンク")
                <!-- Table of Contents -->
                <div class="toc">
                    <h3>・目次</h3>
                    <ul>
                        <li>目次項目①</li>
                        <li>目次項目①</li>
                        <li>目次項目①</li>
                    </ul>
                </div>
                <!-- Related Articles -->
                <div class="post-links">
                    <h3>・掲載記事</h3>
                    <ul>
                        <li><a href="link_to_article">外部リンク</a></li>
                        <li><a href="link_to_article">外部リンク</a></li>
                        <li><a href="link_to_article">外部リンク</a></li>
                        <li><a href="link_to_article">外部リンク</a></li>
                        <li><a href="link_to_article">外部リンク</a></li>
                    </ul>
                </div>
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
