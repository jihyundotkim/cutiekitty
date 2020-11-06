<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <style>

    </style>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <div class="identity-menu">
          <h1 class="nyan">ABC</h1>
          <a href="<?php echo get_site_url(); ?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
          <?php
      wp_nav_menu( array(
          'theme_location' => 'main-menu' ) );
       ?>
       <p style="text-transform:none;"><?php echo get_bloginfo('description'); ?></p>
        </div>
        <div class="sidebar">
<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
        </div>
      </div>
      <div class="right">
