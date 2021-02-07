<section class="blog-social">
  <div class="sns">
    <div class="sns-img">
      <?php the_post_thumbnail('', array('alt' => 'アイキャッチ画像')); ?>
    </div>
    <div class="sns-share">
      <!-- <a href="#">Facebookでシェアする</a>
          <a href="#">Twitterでこの記事をつぶやく</a> -->
      <?php get_template_part('includes/sns'); ?>
    </div>
  </div>

  <div class="blog-social__container">
    <p>最新の記事</p>
    <!-- blog-container__group メモ帳にあり-->

    <div class="blog-social__container-box">
      <ul class="blog-social__container-box__group">
        <?php
        global $post;
        $args = array('posts_per_page' => 3);
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
      <?php
      //Pagenation 
      if (function_exists("pagination")) {
        pagination($additional_loop->max_num_pages);
      }
      ?>
    </div>
    <!-- blog-container__group -->
  </div>
</section>