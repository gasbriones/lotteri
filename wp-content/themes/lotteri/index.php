<?php
get_header();

$home =  new WP_Query('page_id=5');



?>
<body <?php body_class(); ?>>
<div id="main" class="clearfix wrapper">
  <header id="header" class="grid header">
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
    </div>
    <div class="col-12 gradient"></div>
  </header>
</div>
<?php get_footer(); ?>
</body>
</html>
