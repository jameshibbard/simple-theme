<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    <?php wp_title('|', 1, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>
  <link rel="Stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
