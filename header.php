<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/dist/assets/logos/favicon.png"
    type="image/x-icon">

  <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function theme_slug_render_title() {
    ?>
  <title><?php wp_title( '—', true, 'right' ); ?></title>
  <?php
        }
        add_action( 'wp_head', 'theme_slug_render_title' );
    endif; ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/master.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

  <!-- Automatic Wordpress ////////////////////////////////// -->
  <?php wp_head(); ?>
  <!-- Automatic Wordpress ////////////////////////////////// -->

</head>

<body <?php body_class(); ?>>

  <header class="header pad-2 bg-grey-4">
    <a href="<?php bloginfo('url') ?>">
      <?php bloginfo('name'); ?>
    </a>
  </header>