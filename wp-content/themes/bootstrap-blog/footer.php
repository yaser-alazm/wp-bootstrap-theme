<?php if(!is_front_page()) : ?>
  <aside class="col-md-4 blog-sidebar">

        <?php if(is_active_sidebar('about')): ?>
          <?php dynamic_sidebar('about'); ?>
        <?php endif; ?>

        <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>

  </aside><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
  <?php if(true === get_theme_mod('footer_enable')): ?>
    <p><?php echo get_theme_mod('footer_text','Theme Developed By <span class="text-success"><a href="http://yaser-alazm.com" target="_blank">Yaser AlAzm</a></span></p>
    <p>The basic template is from <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    All Rights reserved &copy; 2019'); ?></p>
  <?php endif; ?>
</footer>
<?php wp_footer();?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>