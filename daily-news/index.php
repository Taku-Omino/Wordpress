<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- ループ内の投稿表示 -->
    <?php endwhile; else : ?>
        <!-- 投稿がない場合の表示 -->
    <?php endif; ?>
</main>
<?php get_footer(); ?>
