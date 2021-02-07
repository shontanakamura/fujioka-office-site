<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>


<!-- header -->
<?php get_template_part('includes/header'); ?>
<!-- header -->


<body>
  <main>

    <section class="price-visual">
      <div class="price-visual-top">
      <h2>Blog</h2>
      </div>
    </section>

    <section class="blog">
      <div class="blog-container">
        <ul class="blog-container__group">
          <?php
          global $post;
          $args = array('posts_per_page' => 12);
          $myposts = get_posts($args);
          foreach ($myposts as $post) {
            setup_postdata($post);
          ?>
            <li>
              <div class="img-ttl">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('', array('alt' => 'アイキャッチ画像')); ?>
                </a>
                <span><?php
                      $category = get_the_category();
                      $cat_name = $category[0]->cat_name;
                      echo $cat_name;
                      ?></span>
              </div>
              <time><?php the_time(get_option('date_format')); ?></time>
              <p><?php the_title(); ?></p>
              <p><?php the_excerpt(); ?></p>
            </li>
            <?php
          }
          wp_reset_postdata();
          ?>
        </ul>
      </div>
      <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
    </section>
  </main>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <!-- footer -->
    <?php get_footer(); ?>
</body>

</html>