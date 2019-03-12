<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark cat-featured">
    <div class="row">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">
        <?php the_title()?>
        </h1>
        <p class="lead my-3">
        <?php the_excerpt();?>
        </p>
        <p class="lead mb-0"><a href="<?php the_permalink()?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
    <?php if (has_post_thumbnail()): ?>
        <div class="col-md-6">
        <div class="featured-post-image">
            <?php the_post_thumbnail('medium_large', array('class' => 'w-100 h-auto'));?>
        </div>
        </div>
    <?php endif;?>
    </div>
</div>