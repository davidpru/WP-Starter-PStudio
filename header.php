<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" type="image/x-icon">

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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/master.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/aos/aos.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

    <!-- Automatic Wordpress ////////////////////////////////// -->
    <?php wp_head(); ?>
    <!-- Automatic Wordpress ////////////////////////////////// -->

  </head>

<body <?php body_class(); ?>>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php
  		wp_nav_menu( array(
  			'theme_location'    => 'primary',
  			'depth'             => 2,
  			'container'         => 'div',
  			'container_class'   => 'collapse navbar-collapse',
  			'container_id'      => 'navbarSupportedContent',
  			'menu_class'        => 'nav navbar-nav',
  			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
  			'walker'            => new WP_Bootstrap_Navwalker(),
  		) );
  		?>
    </div>
  </nav>
</header>
