<div class="section jumbotron">
  <div class="container">

    <?php if ( is_front_page() && is_home() ) { ?>
        <h1><?php the_title(); ?></h1>

      <?php } elseif ( is_front_page() ) { ?>
        <h1><?php the_title(); ?></h1>

      <?php } elseif ( is_home() ) { ?>
        <h2 class="h1"><?php bloginfo('name'); ?></h2>

      <?php } elseif ( is_page() ) { ?>
        <h2 class="h1"><?php the_title(); ?></h2>

      <?php } elseif ( is_single() ) { ?>
        <h1><?php single_post_title(); ?></h1>

      <?php } elseif ( is_archive() ) { ?>
        <h1><?php the_archive_title(); ?></h1>

      <?php } elseif ( is_category() ) { ?>


    <?php } else { ?>
    <?php } ?>

  </div>
</div>
