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
    <!-- about-visual -->
    <section class="about-visual">
    <div class="about-visual-top">
    <h2>About</h2>
    </div>
    <div class="about-visual__img">
      <div class="slider03">
      </div>
    </div>
  </section>
    <!-- about-visual -->

    <!-- suggestion -->
    <?php get_template_part('includes/suggestion'); ?>
    <!-- suggestion -->

    <!-- office-data -->
    <?php get_template_part('includes/office-data'); ?>
    <!-- office-data -->

    <!-- mapArea -->
    <?php get_template_part('includes/mapArea'); ?>
    <!-- mapArea -->
  </main>
  <!-- footer -->
  <?php get_template_part('includes/about-footer'); ?>
  <!-- footer -->
  <?php get_footer(); ?>

</body>

</html>