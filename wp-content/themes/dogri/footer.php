<?php

if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' )|| is_active_sidebar( 'fourth-footer-widget-area' ) ) {?>
<footer class="page-footer">
  <div class="footer_pad">
  <div class="container">
    <div class="row">
    <!-- First footer -->
    <?php if ( is_active_sidebar( 'first-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
      </div>
    <?php endif; ?>

    <!-- Second footer -->
    <?php if ( is_active_sidebar( 'second-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('second-footer-widget-area');?>
      </div>
    <?php endif; ?>

    <!-- Third footer -->
    <?php if ( is_active_sidebar( 'third-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('third-footer-widget-area');?>
      </div>
    <?php endif; ?>

    <!-- fourth footer -->
    <?php if ( is_active_sidebar( 'fourth-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('fourth-footer-widget-area');?>
      </div>
    <?php endif; ?>

    </div>
  </div>
  </div>

  <?php 
    $footer_copy = get_theme_mod('footer_copy');
    if($footer_copy){
  ?>
    <div class="footer-copyright">
      <div class="container">
        <?php echo $footer_copy;?>
      </div>
    </div>
  <?php } ?>

</footer>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>