<aside class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if (!dynamic_sidebar('Footer 1')); ?>
      </div>
      <div class="col-md-4">
        <?php if (!dynamic_sidebar('Footer 2')); ?>
      </div>
      <div class="col-md-4">
        <?php if (!dynamic_sidebar('Footer 3')); ?>
      </div>
      <div class="col-md-4">
        <?php if (!dynamic_sidebar('Footer 4')); ?>
      </div>
    </div>
  </div>
</aside>


<footer class="bg-light pt-4 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Copyright - <strong><?php bloginfo('title') ?></strong></p>
      </div>
    </div>
  </div>
</footer>

<!-- Wp automatic footer -->
<?php wp_footer(); ?>
<!-- Wp automatic footer -->

<!-- Vendor -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/main.js" charset="utf-8"></script>


</body>

</html>