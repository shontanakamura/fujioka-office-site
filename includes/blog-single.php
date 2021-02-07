<section class="blog-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="blog-single__main">
            <time><?php the_date(); ?></time>
            <h2><?php the_title(); ?></h2>
            <div class="blog-img">
              <?php the_post_thumbnail('',array('alt' => 'アイキャッチ画像')); ?>
            </div>
            <p><?php the_content(); ?></p>
          </div>
          <div class="blog-single__h3">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
          <div class="blog-single__h4">
            <h4><?php the_title(); ?></h4>
            <div class="blog-img">
            <?php the_post_thumbnail('', array('alt' => 'アイキャッチ画像')); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
    </section>