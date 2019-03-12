<!doctype html>
<html <?php language_attributes()?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php bloginfo('name');?> |
        <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php if(is_front_page()) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landing-page.css">
    <?php endif; ?>

    <?php wp_head();?>
  </head>
  <body>
  <?php if(!is_front_page()): ?>
    <div class="container">
  <?php endif; ?>

  <?php if(is_front_page()): ?>
    <div class="container">
  <?php endif; ?>
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <?php if(true === get_theme_mod('social_menu_enable')): ?>
                  <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'social',
                        'container_class' => 'social-menu',
                        'menu_class'      => 'list-unstyled d-flex mt-3'
                      )
                    );
                  ?>
              <?php endif; ?>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php bloginfo('url') ?>"><?php bloginfo('name');?></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>


      <div class="py-1 mb-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse justify-content-md-center bg-light',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
          ?>
        </nav>
      </div>
  <?php if(is_front_page()): ?>
    </div> <!-- .container -->
  <?php endif; ?>
