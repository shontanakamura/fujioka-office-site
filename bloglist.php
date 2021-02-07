
<?php
/**
 * Template Name:  blog-list */
?>
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
          $paged = (int) get_query_var('paged');
          $args = array(
            'posts_per_page' => 12,
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
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
          <?php endwhile;
          endif; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
        <?php if (function_exists("pagination")) {
        pagination($additional_loop->max_num_pages);
      } ?>
      </div>
    </section>
  </main>
  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- footer -->
  <?php get_footer(); ?>
</body>

</html>