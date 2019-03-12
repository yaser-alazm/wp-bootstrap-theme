<?php get_header();?>


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
        <p class="blog-post-meta">
          <?php the_time('F j, Y g:i a');?>
          By
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
          <?php the_author();?>
        </a></p>

        <div class="post-image mb-3">
          <?php the_post_thumbnail('small', array('class' => 'w-100 h-auto')) ?>
        </div>

        <?php the_content();?>
        <hr>
        <?php if ( comments_open() || get_comments_number() ) :
    comments_template();
endif; ?>
      </div>
      <?php endwhile;else: ?>
        <p class="lead"><?php __('No posts available!')?></p>
      <?php endif;?>

    </div><!-- /.blog-main -->

<?php get_footer()?>
