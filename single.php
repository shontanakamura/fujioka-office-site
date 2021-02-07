<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<body>

  <head>
    <?php get_header(); ?>
  </head>

  <!-- header -->
  <?php get_template_part('includes/header'); ?>
  <!-- header -->

  <main>
    <!-- blog-single -->
    <?php get_template_part('includes/blog-single'); ?>
    <!-- blog-single -->

    <!-- blog-archive -->
    <?php get_template_part('includes/archive'); ?>

    <!-- blog-archive -->

    <!-- contact -->
    <?php get_template_part('includes/contactBtn'); ?>
    <!-- contact -->

    <!-- contact -->
    <?php get_template_part('includes/blog-social'); ?>
    <!-- contact -->

  </main>
  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- footer -->
  <?php get_footer(); ?>

</body>

</html>