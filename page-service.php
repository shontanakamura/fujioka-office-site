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
    <!-- service-visual -->
    <section class="service-visual">
    <div class="service-visual-top">
    <h2>Service</h2>
    </div>
    <div class="service-visual__img">
      <div class="slider03">
      </div>
    </div>
  </section>
    <!-- service-visual -->

    <!-- srevice-page -->
    <?php get_template_part('includes/service-page'); ?>
    <!-- srevice-page -->

    <!-- contact -->
    <?php get_template_part('includes/contactBtn'); ?>
    <!-- contact -->

  </main>
  <!-- footer -->
  <?php get_template_part('includes/service-footer'); ?>
  <!-- footer -->
  <?php get_footer(); ?>

</body>

</html>