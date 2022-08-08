<?php 
get_header();

while(have_posts()){
    the_post();
?>

<div class="inner-banner">
  <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></div>
    
 <div class="content-sec inner-sec">
 <div class="row">
 <div class="large-12 medium-12 small-12 columns">

 <h2><?php the_title();?></h2>

 <?php the_content();?>

</div>
 
 
 </div>
 </div>   
 

<?php }
get_footer();
?>