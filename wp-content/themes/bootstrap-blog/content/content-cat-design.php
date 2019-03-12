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