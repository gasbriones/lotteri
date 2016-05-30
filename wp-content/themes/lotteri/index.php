<?php
get_header();

$home =  new WP_Query('page_id=5');
$about_us = new WP_Query('page_id=10');
$products = new WP_Query('cat=3');



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
        <div class="col-12 grid-center about-us-content">
          <div class="col-3" push-right="off-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png" />
            <h2 class="slogan">
              Venta<br>
              Mayorista y Minorista
            </h2>
            <div class="social">
              <a href="#" class="fb">/ lotteri hnos</a>
            </div>
          </div>
          <div class="col-6">
            <h2 class="title"><span>LOTTERI HNOS /</span> CENTRO DE BATERÍAS</h2>
            <div class="text">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <div class="col-12">
          <figure>
            <img src="<?php echo the_field('page_image') ?>"/>
          </figure>
        </div>
      <?php endwhile; endif; ?>
  </div>
  <div id="productos" class="grid products">

    <div class="col-12 grid-center">
      <div class="prod-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/battery.png" />
      </div>
      <h2 class="title"><span>PRODUCTOS / </span>BATERÍAS</h2>
      <div class="col-11 grid-spaceBetween">
        <?php if ($products->have_posts()):
          while ($products->have_posts()):$products->the_post();
            $attachment = get_field('product_image');
            ?>
            <div class="col-6 grid-center prod-container">
              <div class="col-4 prod-img">
                <img src="<?php echo  $attachment['sizes']['medium'];  ?>"/>
              </div>
              <div class="col-7 prod-description">
                <h2 class="prod-title">
                  <?php the_title(); ?>
                </h2>
                <div class="prod-text">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
      </div>
    </div>

    <div class="col-12 grid-center marks">
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
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>
