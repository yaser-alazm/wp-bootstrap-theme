<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-5"><?php echo get_theme_mod('calltoaction_title', 'Ready to get started? Contact us now!'); ?></h2>
        </div>
        <div class="col-md-12 mx-auto">
          <div class="row">
            <?php if(true === get_theme_mod('social_menu_enable')): ?>
              <div class="col-md-4 d-flex justify-content-center align-items-center">
                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'social',
                      'container_class' => 'social-menu',
                      'menu_class'      => 'list-unstyled'
                    )
                  );
                ?>
              </div>
            <?php endif; ?>
            <div class="<?php echo true === get_theme_mod('social_menu_enable') ? 'col-md-8' : 'col-md-12'; ?>">
              <?php if(is_active_sidebar('contact')): ?>
                <?php dynamic_sidebar('contact'); ?>
              <?php else: ?>
                <p class="lead">(You need to setup a contact form)</p>
                <p class="lead">If you havn't created a form yet, go to dashboard->contact and create a new one (press add new at the top left)</p>
                <p class="lead">After creating a form and copy the form shortcode, from your dashboard go to Appearance->Widgets and add a text widget into "Contact Form" sidebar.</p>
                <p class="lead">In the text widget paste the shortcode you aleady copied from your form and click save. Then you ready to go. </p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>