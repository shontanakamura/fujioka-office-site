<section class="blog">
  <div class="section-ttl">
    <h2>BLOG</h2>
  </div>

  <div class="blog-container">
    <ul class="blog-container__group">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
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
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
  
  <!-- link-btn -->

  <div class="link-btn">
    <a href="<?php echo home_url('/blog'); ?>">一覧を見る</a>
  </div>
</section>