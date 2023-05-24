<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- ループ内のページ表示 -->
    <?php endwhile; else : ?>
        <!-- ページがない場合の表示 -->
    <?php endif; ?>
</main>
<?php get_footer(); ?>
