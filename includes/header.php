<?php wp_body_open(); ?>
<header class="header"> 
  <div class="header-box">
    <div class="header-box__logo">
      <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/svg/fujioka-logo.svg"></a>
    </div>
    <?php
    //メニューIDを取得する
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <nav class="header-box__nav">
      <ul class="nav-list">
      <?php foreach ($menu_items as $item) : ?>
        <li>
          <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>