<?php 
get_header();
?>
    
 <div class="content-sec inner-sec">
 <div class="row">
<div class="clearfix"></div> 
<?php 
            $homeStories = new Wp_Query(array(
                'post_per_page' => 10,
                'post_type' => 'post',
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                ));
            while($homeStories->have_posts()){
                $homeStories->the_post(); ?>

<div class="large-4 medium-4 small-12 columns">
 <?php $image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);?>
 <div class="img-box"><?php the_post_thumbnail();?></div>
 <div class="txt-box text-center">
 <h3><?php the_title();?></h3>
 <p><?php echo wp_trim_words(get_the_content(), 30) ?></p>
 <a href="<?php the_permalink();?>" class="button radius">Read More</a>
 </div>
 </div>
<?php } ?>
 </div>
 <div class="row">
 <nav aria-label="Pagination">
 <ul class="pagination">
    <?php echo the_posts_pagination(); ?>
</ul>
 </nav>
 </div>
 </div>
<?php 
get_footer();
?>