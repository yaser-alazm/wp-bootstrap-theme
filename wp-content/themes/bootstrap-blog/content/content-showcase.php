<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">

        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo get_theme_mod('showcase1_image_settings', get_template_directory_uri() . '/img/bg-showcase-1.jpg'); ?>);"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2><?php echo get_theme_mod('showcase1_title_settings', 'Fully Responsive Design') ?></h2>
            <p class="lead mb-0"><?php echo get_theme_mod('showcase1_description_settings', 'When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether its a phone, tablet, or desktop the page will behave responsively') ?></p>
          </div>
        </div>

      <?php if(true === get_theme_mod('showcase2_enable')): ?>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php echo get_theme_mod('showcase2_image_settings', get_template_directory_uri() . '/img/bg-showcase-2.jpg'); ?>);"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2><?php echo get_theme_mod('showcase2_title_settings', 'Updated For Bootstrap 4') ?></h2>
            <p class="lead mb-0"><?php echo get_theme_mod('showcase2_description_settings', 'Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!') ?></p>
          </div>
        </div>
      <?php endif; ?>

      <?php if(true === get_theme_mod('showcase3_enable')): ?>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo get_theme_mod('showcase3_image_settings', get_template_directory_uri() . '/img/bg-showcase-3.jpg'); ?>);"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2><?php echo get_theme_mod('showcase3_title_settings', 'Easy to Use & Customize') ?></h2>
            <p class="lead mb-0"><?php echo get_theme_mod('showcase3_description_settings', 'Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!') ?></p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>