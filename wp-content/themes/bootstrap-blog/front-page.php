<?php get_header(); ?>


<!-- MasterHead Section -->
<?php if( true === get_theme_mod( 'heading_enable_settings' ) ) :  ?>
  <?php get_template_part('content/content-masthead') ?>
<?php endif; ?>

<!-- Features Section -->
<?php if( true === get_theme_mod( 'features_enable' ) ) :  ?>
  <?php get_template_part('content/content-features') ?>
<?php endif; ?>

<!-- Showcase Section -->
<?php if( true === get_theme_mod( 'showcase_enable' ) ) :  ?>
  <?php get_template_part('content/content-showcase') ?>
<?php endif; ?>

<!-- Testimonials Section -->
<?php if(true === get_theme_mod('testimonials_enable')) :  ?>
  <?php get_template_part('content/content-testimonials') ?>
<?php endif; ?>

<!-- Call To Action Section -->
<?php if(true === get_theme_mod('calltoaction_enable')) :  ?>
  <?php get_template_part('content/content-calltoaction') ?>
<?php endif; ?>

<?php get_footer(); ?>