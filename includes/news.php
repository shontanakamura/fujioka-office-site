<section class="news">

<div class="news-article">
<h2>NEWS</h2>
  <h2 class="latest-news">Latest news</h2>
  <?php
$news_query = new WP_Query(
array(
'post_type' => 'post',
'category_name' => 'notice',
'posts_per_page' => 5,
)
);
?>
<?php if ( $news_query->have_posts() ) : ?>
<?php while ( $news_query->have_posts() ) : ?>
  <div class="article-txt">
<?php $news_query->the_post(); ?>
    <time><?php the_time(get_option('date_format')); ?></time>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
  <div class="news-border"></div>
</div>
<div class="news-txt">
  <h3>webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。</h3>
  <p>当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。</p>
</div>
</section>