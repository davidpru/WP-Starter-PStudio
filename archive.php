<?php get_header(); ?>
<?php get_template_part('components/page-title'); ?>

<main class="py-5">
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('components/content-blog'); ?>
          <?php endwhile; ?>
            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
            </div>
        <?php else : ?>
        <?php endif; ?>
      </div>

      <aside class="col-md-4">
        <?php if (!dynamic_sidebar('Blog')); ?>
      </aside>

    </div>
  </div>
</main>


<?php get_footer(); ?>
