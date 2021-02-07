<!DOCTYPE html>
<html lang="ja">

<?php

/**
 * Template Name: page-template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 */

get_header(); ?>

<body>
  <main>
    <?php get_template_part('includes/header'); ?>

    <!-- mapArea -->
    <?php get_template_part('includes/mapArea'); ?>
    <!-- mapArea -->
  </main>
  <!-- footer -->
  <?php get_template_part('includes/service-footer'); ?>
  <!-- footer -->

  <?php get_footer(); ?>

</body>

</html>