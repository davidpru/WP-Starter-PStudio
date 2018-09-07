<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

    <!-- AOS LIBRARY -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">

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
