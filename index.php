<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('includes/header'); ?>
  <!-- header -->


  <main class="main">

    <?php get_template_part('includes/main-visual'); ?>

    <!-- news -->
    <?php get_template_part('includes/news'); ?>
    <!-- news -->

    <!-- service -->
    <?php get_template_part('includes/service'); ?>
    <!-- service -->

    <!-- blog -->
    <?php get_template_part('includes/blog'); ?>
    <!-- blog -->

    <!-- map -->
    <?php get_template_part('includes/mapArea'); ?>
    <!-- map -->
  </main>

  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
  <!-- footer -->
</body>

</html>