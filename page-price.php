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

      <!-- price-visual -->
    <section class="price-visual">
      <div class="price-visual-top">
      <h2>Price</h2>
      </div>
    </section>
    <!-- price-visual -->

    <!-- price -->
    <?php get_template_part('includes/price'); ?>
    <!-- price -->

    <!-- contact -->
    <?php get_template_part('includes/contactBtn'); ?>
    <!-- contact -->
  </main>

  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- footer -->
  <?php get_footer(); ?>

</body>

</html>