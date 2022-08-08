<?php get_header();?>

<div class="slider-sec">

<div class="slider single-item">
  <div><img src="<?php 
  $custom_logo_id = get_theme_mod( 'image_upload_test' );
  $custom_logo_data = wp_get_attachment_url( $custom_logo_id , 'full' );
  echo $custom_logo_data;
  ?>" alt=" " /></div>
  <div><img src="<?php 
  $custom_logo_id = get_theme_mod( 'image_upload_test2' );
  $custom_logo_data = wp_get_attachment_url( $custom_logo_id , 'full' );
  echo $custom_logo_data;
  ?>" alt=" " /></div>
</div>
<div class="row">
<div class="large-12 columns no-pad">
<div class="banner-txt"><h1><?php echo get_theme_mod('slider_text')?></h1>
<?php 
$urls = get_theme_mod('banner_url');

if($urls){
?>
<a href="<?php echo $urls?>" class="button round">Get Started</a>
<?php } ?>
</div></div>
</div>
    <script type="text/javascript">
$('.single-item').slick();
</script>            
</div>
    
 <div class="content-sec">
 <div class="row">
 <div class="large-12 columns text-center">
  <?php 
    $about_head = get_theme_mod('about_us_head');

    if($about_head) {
  ?>
<h2><?php echo $about_head;?></h2>
  <?php } ?>

  <?php 
    $about_para = get_theme_mod('about_us_para');
    if($about_para){
  ?>

  <p><?php echo $about_para;?></p>

  <?php } ?>

  <?php 
    $about_url = get_theme_mod('about_us_url');
    if($about_url){
  ?>
    <a href="<?php echo $about_url;?>" class="button round grey">Read More</a> 
  <?php }?>

 </div></div>
 </div>   

 
 <div class="services-sec">
 <div class="row">
 <div class="large-12 columns"><h2>Our Services</h2></div>
<?php 
    $homepageStories = new Wp_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'post'
    ));
    while($homepageStories->have_posts()){
        $homepageStories->the_post();
?>

 <div class="large-4 medium-4 small-12 columns">
 <?php $image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);?>
 <div class="img-box"><img src="<?php the_post_thumbnail();?>" alt="<?php echo $image_title?>"></div>
 <div class="txt-box text-center">
 <h3><?php the_title();?></h3>
 <p><?php echo wp_trim_words(get_the_content(), 30) ?></p>
 <a href="<?php the_permalink();?>" class="button radius">Read More</a>
 </div>
 </div>

 <?php 
    }
?>
 
 </div> 
 </div>

<?php get_footer();?>