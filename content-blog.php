<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
  <div class="entry">
      <?php the_content('Leer más &raquo;'); ?>
  </div>

  <footer class="entry-meta">
    <?php if ( 'post' == $post->post_type ) : ?>
      <span class="cat-links">En <?php the_category( ', ' ); ?></span>
      <?php the_tags( ', ' ); ?>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
      <span class="comments-link"><?php comments_popup_link( ) ?></span>
    <?php endif; ?>

    <?php edit_post_link( __( 'Edit') ); ?>
  </footer> <?php ?>

</article>
