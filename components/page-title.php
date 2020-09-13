<div class="page-title">
  <div class="container">

    <?php if ( is_front_page() && is_home() ) { ?>
        <h1 class="page-title__h"><?php the_title(); ?></h1>

      <?php } elseif ( is_front_page() ) { ?>
        <h1 class="page-title__h"><?php the_title(); ?></h1>

      <?php } elseif ( is_home() ) { ?>
        <h2 class="page-title__h"><?php bloginfo('name'); ?></h2>

      <?php } elseif ( is_page() ) { ?>
        <h2 class="page-title__h"><?php the_title(); ?></h2>

      <?php } elseif ( is_single() ) { ?>
        <h1 class="page-title__h"><?php single_post_title(); ?></h1>

      <?php } elseif ( is_archive() ) { ?>
        <h1 class="page-title__h"><?php the_archive_title(); ?></h1>

      <?php } elseif ( is_category() ) { ?>


    <?php } else { ?>
    <?php } ?>

    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class="page-title__breadcrumbs">','</div>' );
      }
      ?>

  </div>
</div>
