<?php
get_header();

$home =  new WP_Query('page_id=5');
$about_us = new WP_Query('page_id=10')



?>
<body <?php body_class(); ?>>
<div id="main" class="clearfix wrapper">
  <header id="home" class="grid header">
    <div class="col-12 header-wrapper">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
      </div>
      <?php if ($home->have_posts()):
        while ($home->have_posts()):$home->the_post();?>
          <figure>
            <img src="<?php echo the_field('page_image') ?>"/>
          </figure>
          <h2 class="slogan">
            <?php the_content(); ?>
          </h2>
      <?php endwhile; endif; ?>
      <div class="menu-wrapper grid-center">
        <div class="col-9">
          <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => 'none')); ?>
        </div>
      </div>
    </div>
    <div class="col-12 grid-center gradient">
      <div class=" col-9 grid-spaceBetween grid-middle logo-container">
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/moura-logo.png" />
        </div>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/acedelco-logo.png" />
        </div>
        <div class="col-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/prestolite-logo.png" />
        </div>
      </div>
    </div>
  </header>
  <div id="quienes-somos" class="grid about-us">
    <?php if ($about_us->have_posts()):
      while ($about_us->have_posts()):$about_us->the_post();?>
        <div class="col-12 grid">
          <div class="col-6">
            asdasd
          </div>
          <div class="col-6 text">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-12">
          <figure>
            <img src="<?php echo the_field('page_image') ?>"/>
          </figure>
        </div>


      <?php endwhile; endif; ?>

  </div>
</div>
<?php get_footer(); ?>
</body>
</html>
