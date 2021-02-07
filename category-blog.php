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
    <!-- main-visual -->
    <?php get_template_part('includes/main-visual'); ?>
    <!-- main-visual -->

    <!-- blog -->
    <?php get_template_part('includes/blog'); ?>
    <!-- blog -->

    <!-- contact -->
    <?php get_template_part('includes/contactBtn'); ?>
    <!-- contact -->

    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>
    <!-- footer -->

    <?php get_footer(); ?>
  </main>
</body>

</html>