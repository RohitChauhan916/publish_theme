<?php

if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' )|| is_active_sidebar( 'fourth-footer-widget-area' ) ) {?>
<div class="footer-sec">
 <div class="row">

 <?php if ( is_active_sidebar( 'first-footer-widget-area' )) : ?>
 <div class="large-3 medium-3 small-12 columns">
 <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
 
 </div>
 <?php endif; ?>

 <?php if ( is_active_sidebar( 'second-footer-widget-area' )) : ?>
 <div class="large-3 medium-3 small-12 columns">
    <?php dynamic_sidebar('second-footer-widget-area');?>
 </div>
 <?php endif; ?>

 <?php if ( is_active_sidebar( 'third-footer-widget-area' )) : ?>
 <div class="large-4 medium-3 small-12 columns">
    <?php dynamic_sidebar('third-footer-widget-area');?>
 </div>
 <?php endif; ?>

 <?php if ( is_active_sidebar( 'fourth-footer-widget-area' )) : ?>
 <div class="large-2 medium-3 small-12 columns">
    <?php dynamic_sidebar('fourth-footer-widget-area');?>
 </div>
 <?php endif; ?>

 </div>
 </div>
<?php } ?>
<?php 
    $footer_copy = get_theme_mod('footer_copy');
    if($footer_copy){
  ?>
 <div class="copy">
 <div class="row">
 <div class="large-12 columns">
 <?php echo $footer_copy;?>
 </div>
 </div>
 </div>
 <?php } ?>

 <script>
   function menus(){
  var x = document.getElementById('second_part');
  if (x.style.display==="flex"){
      x.style.display = "none";
      
      
  }
  else{
      x.style.display = "flex";
  }
  }
 </script>
<?php wp_footer(); ?>
<script>
      $(document).foundation();
    </script>
    </body>
    </html>