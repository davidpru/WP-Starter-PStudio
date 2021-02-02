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



<!-- Jquery + Bootstrap -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/jquery/jquery-2.2.4.min.js" ></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/bootstrap/bootstrap.bundle.min.js"></script>


<!-- AOS -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/aos/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
  AOS.init();
</script>

<!-- Main, personalizados -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/main.js" charset="utf-8"></script>

<!-- Fontawsome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">



</body>
</html>
