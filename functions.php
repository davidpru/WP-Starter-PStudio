<?php

// Soporte para títulos
add_theme_support( 'title-tag' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Soporte para post thumbnails
add_theme_support( 'post-thumbnails' );

// Iniciamos menú
register_nav_menus( array(
    'primary' => __( 'Principal Menu', 'THEMENAME' ),
    'legal' => __( 'Legal Menu', 'THEMENAME' ),
) );


/* Soporte para widgets */
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

/* Blog ---------------------- */
    register_sidebar( array(
    'name' => __( 'Blog', 'theme-slug' ),
    'id' => 'sidebar-blog',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

/* Footer ---------------------- */
    register_sidebar( array(
    'name' => __( 'Footer 1', 'theme-slug' ),
    'id' => 'sidebar-footer1',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
    'name' => __( 'Footer 2', 'theme-slug' ),
    'id' => 'sidebar-footer2',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
    'name' => __( 'Footer 3', 'theme-slug' ),
    'id' => 'sidebar-footer3',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
    'name' => __( 'Footer 4', 'theme-slug' ),
    'id' => 'sidebar-footer4',
    'description' => __( 'Widgets disponibles en el blog', 'theme-slug' ),
    'before_widget' => '<section id="%1$s" class="widget widget-auto %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    ) );

}


/* Soporte para imagenes SVG */
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/* Cargarse jQuery de Wordpress */
# wp_deregister_script('jquery');


?>
