<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>"/>
    <title><?php wp_title('');?></title>
    <?php get_template_part('includes/head/meta'); ?>
    <?php get_template_part('includes/head/favicons'); ?>
    <?php wp_head(); ?>
  </head>
<body>
  <?php get_template_part('includes/head/global-header') ?>