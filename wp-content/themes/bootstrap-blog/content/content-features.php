<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa <?php echo get_theme_mod('feature1_icon','fa-desktop'); ?> m-auto text-primary"></i>
            </div>
            <h3><?php echo get_theme_mod('feature1_title','Fully Responsive'); ?></h3>
            <p class="lead mb-0"><?php echo get_theme_mod('feature1_description', 'This theme will look great on any device, no matter the size!'); ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa <?php echo get_theme_mod('feature2_icon','fa-code'); ?> m-auto text-primary"></i>
            </div>
            <h3><?php echo get_theme_mod('feature2_title','Bootstrap 4 Ready'); ?></h3>
            <p class="lead mb-0"><?php echo get_theme_mod('feature2_description', 'Featuring the latest build of the new Bootstrap 4 framework!'); ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa <?php echo get_theme_mod('feature3_icon','fa-check-circle-o'); ?> m-auto text-primary"></i>
            </div>
            <h3><?php echo get_theme_mod('feature3_title','Easy to Use'); ?></h3>
            <p class="lead mb-0"><?php echo get_theme_mod('feature3_description', 'Ready to use with your own content, or customize the source files!'); ?></p>
          </div>
        </div>
      </div>
      <?php if( true === get_theme_mod( 'features_btn_enable' ) ) :  ?>
        <div class="">
          <a href="<?php echo get_theme_mod('features_button_link_settings', 'http://yaser-alazm.com') ?>" class="btn btn-primary mt-5 d-relative" target="_blank"><?php echo get_theme_mod('features_button_text_settings', 'See More') ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>