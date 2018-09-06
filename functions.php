<?php

// Soporte para títulos
add_theme_support( 'title-tag' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Post thumbnails
add_theme_support( 'post-thumbnails' );

// Menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
    'legal' => __( 'Legal Menu', 'THEMENAME' ),
) );


/* Sidebars */
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

/* Blog ---------------------- */

    register_sidebar( array(
    'name' => __( 'Servicios', 'theme-slug' ),
    'id' => 'sidebar-servicios',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );


    register_sidebar( array(
    'name' => __( 'Taller', 'theme-slug' ),
    'id' => 'sidebar-taller',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
    'name' => __( 'Tasación', 'theme-slug' ),
    'id' => 'sidebar-tasacion',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

/* Legales ---------------------- */

    register_sidebar( array(
    'name' => __( 'Páginas legales', 'theme-slug' ),
    'id' => 'paginas-legales',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
    ) );



}

wp_deregister_script('jquery');


?>
