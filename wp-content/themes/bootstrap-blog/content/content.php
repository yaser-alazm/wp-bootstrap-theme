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

    <?php the_excerpt();?>
    <a href="<?php the_permalink()?>" class="btn btn-secondary mt-3">See More</a>
</div>