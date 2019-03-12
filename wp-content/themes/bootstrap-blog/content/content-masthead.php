<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">
            <?php echo get_theme_mod('heading_title_settings', 'Heading Title'); ?>
          </h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <h3>
            <?php echo get_theme_mod('heading_description_settings', 'Build a landing page for your business or project and generate more leads!'); ?>
          </h3>
        </div>
      </div>
      <?php if(true === get_theme_mod('heading_btn_enable_settings')) : ?>
        <div class="masthead-button">
          <a href="<?php echo get_theme_mod('heading_button_link_settings', 'http://yaser-alazm.com') ?>" class="btn btn-primary mt-5 d-relative" target="_blank"><?php echo get_theme_mod('heading_button_text_settings', 'Get Started') ?></a>
        </div>
      <?php endif; ?>
    </div>
  </header>