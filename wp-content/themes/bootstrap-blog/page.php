<?php get_header();?>

<?php $cat_world = new WP_Query(array(
    'category_name' => 'world', // Fetching the world category
    'posts_per_page' => 1,
));?>

<?php $cat_design = new WP_Query(array(
    'category_name' => 'design', // Fetching the design category
    'posts_per_page' => 1,
));?>

<?php if ($cat_world->have_posts() || $cat_design->have_posts()): ?>
<div class="row mb-2">
<?php while ($cat_world->have_posts()): $cat_world->the_post();?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
            <?php echo get_the_category()[0]->cat_name; ?>
          </strong>
          <h3 class="mb-0">
            <?php the_title();?>
          </h3>
          <div class="mb-1 text-muted">
            <?php the_time('F j'); ?>
          </div>
          <p class="card-text mb-auto">
            <?php echo substr(get_the_excerpt(),0, 90) ;?>..
          </p>
          <a href="<?php the_permalink()?>" class="stretched-link">Continue reading</a>
        </div>
        <?php if(has_post_thumbnail()): ?>
          <div class="col d-block">
            <div class="featured-post-image">
              <?php the_post_thumbnail('category-thumb',array('class' => 'w-100 h-auto'));?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile;?>
    <?php while ($cat_design->have_posts()): $cat_design->the_post();?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">
            <?php echo get_the_category()[0]->cat_name; ?>
          </strong>
          <h3 class="mb-0">
            <?php the_title();?>
          </h3>
          <div class="mb-1 text-muted">
            <?php the_time('F j'); ?>
          </div>
          <p class="mb-auto">
          <?php echo substr(get_the_excerpt(),0, 90) ;?>..
          </p>
          <a href="<?php the_permalink();?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col d-block">
          <div class="featured-post-image">
            <?php the_post_thumbnail('category-thumb', array('class' => 'w-100 h-auto'));?>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      <div class="blog-post">
        <h2 class="blog-post-title">
          <?php the_title();?>
        </h2>
        <?php //var_dump($post)?>
        <?php the_content();?>
      </div>
      <?php endwhile;else: ?>
        <p class="lead"><?php __('No posts available!')?></p>
      <?php endif;?>

    </div><!-- /.blog-main -->

<?php get_footer()?>
