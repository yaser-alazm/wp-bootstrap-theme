<?php get_header();?>

<?php $featured_post = new WP_Query(array(
    'category_name' => 'featured-post', // Fetching the featured post
    'posts_per_page' => 1,
));?>

<?php $cat_world = new WP_Query(array(
    'category_name' => 'world', // Fetching the world category
    'posts_per_page' => 1,
));?>

<?php $cat_design = new WP_Query(array(
    'category_name' => 'design', // Fetching the design category
    'posts_per_page' => 1,
));?>

<?php if ($featured_post->have_posts()): ?>
  <?php while ($featured_post->have_posts()): $featured_post->the_post()?>
    <?php get_template_part('content/content-cat-featured') ?>
  <?php endwhile;?>
<?php endif;?>

<?php if ($cat_world->have_posts() || $cat_design->have_posts()): ?>
<div class="row mb-2">

  <?php while ($cat_world->have_posts()): $cat_world->the_post();?>
    <?php get_template_part('content/content-cat-world') ?>
  <?php endwhile;?>

  <?php while ($cat_design->have_posts()): $cat_design->the_post();?>
    <?php get_template_part('content/content-cat-design') ?>
  <?php endwhile;?>

</div>
<?php endif;?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>
          <?php get_template_part('content/content') ?>
        <?php endwhile;else: ?>
          <p class="lead"><?php __('No posts available!')?></p>
      <?php endif;?>

    </div><!-- /.blog-main -->

<?php get_footer()?>
