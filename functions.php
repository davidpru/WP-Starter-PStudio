<?php

// Soporte para títulos
add_theme_support( 'title-tag' );


// Soporte para post thumbnails
add_theme_support( 'post-thumbnails' );

// Iniciamos menú
register_nav_menus( array(
    'primary' => __( 'Principal Menu', 'THEMENAME' ),
    'legal' => __( 'Legal Menu', 'THEMENAME' ),
) );


// Soporte para widgets
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

/* Blog ---------------------- */
  register_sidebar( array(
    'name' => __( 'Blog', 'theme-slug' ),
    'id' => 'sidebar-blog',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget-blog widget-blog--blog %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-blog__title">',
    'after_title'   => '</h4>',
    ) );

/* Page ---------------------- */
  register_sidebar( array(
    'name' => __( 'Page', 'theme-slug' ),
    'id' => 'sidebar-page',
    'description' => __( 'Widgets para páginas', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget--name %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget__title">',
    'after_title'   => '</h4>',
    ) );

/* Footer ---------------------- */
  register_sidebar( array(
    'name' => __( 'Footer 1', 'theme-slug' ),
    'id' => 'sidebar-footer1',
    'description' => __( 'Widgets disponibles en el Footer', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-footer__title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name' => __( 'Footer 2', 'theme-slug' ),
    'id' => 'sidebar-footer2',
    'description' => __( 'Widgets disponibles en el Footer', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-footer__title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name' => __( 'Footer 3', 'theme-slug' ),
    'id' => 'sidebar-footer3',
    'description' => __( 'Widgets disponibles en el Footer', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-footer__title">',
    'after_title'   => '</h4>',
    ) );

  register_sidebar( array(
    'name' => __( 'Footer 4', 'theme-slug' ),
    'id' => 'sidebar-footer4',
    'description' => __( 'Widgets disponibles en el Footer', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-footer__title">',
    'after_title'   => '</h4>',
    ) );

}


// Soporte para imagenes SVG
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Cargarse jQuery de Wordpress
# wp_deregister_script('jquery');




// Woocommerce
// --------------------------------------------------------------------------

// Declare WooCommerce support in third party theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
  add_theme_support( 'woocommerce' );
}


// Borrar boton de añadir a cesta
function remove_loop_button(){
  remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
  }
  add_action('init','remove_loop_button');


// Iniciar Woocommerce lightbox
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );

// Productos por página
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 20;
  return $cols;
}


// Personalizador wordpress
// --------------------------------------------------------------------------


function theme_customize_register( $wp_customize ) {


  $wp_customize->add_panel( 'servicios', array(
  'title' => __( 'Servicios', 'textdomain' ),
  'description' => __( 'Aqui podemos mostrar un mensaje', 'textdomain' ),
  'priority' => 160,
  'capability' => 'edit_theme_options',
  ));

    $wp_customize->add_section( 'primera_seccion' , array(
    'title' => __( 'Primera Seccion', 'textdomain' ),
    'panel' => 'servicios',
    'priority' => 1,
    'capability' => 'edit_theme_options',
    ));

      //Campo de texto
      $wp_customize->add_setting( 'campo_texto', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      ));

      $wp_customize->add_control('campo_texto', array(
      'label' => __( 'Ejemplo input', 'textdomain' ),
      'section' => 'primera_seccion',
      'priority' => 1,
      'type' => 'text',
      ));

      //Campo textarea
      $wp_customize->add_setting( 'campo_textarea', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      ));

      $wp_customize->add_control('campo_textarea', array(
      'label' => __( 'Ejemplo textarea', 'textdomain' ),
      'section' => 'primera_seccion',
      'priority' => 1,
      'type' => 'textarea',
      ));




}
add_action( 'customize_register', 'theme_customize_register' );






?>