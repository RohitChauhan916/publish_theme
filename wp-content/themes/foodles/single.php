<?php 
get_header();

while(have_posts())
{
    the_post();

?>
    
 <div class="content-sec inner-sec">
 <div class="row">
 <div class="large-5 medium-5 small-12 columns">
 <div class="timeline-img">
 <?php the_post_thumbnail();?>
            </div>
 </div>
 <div class="large-7 medium-7 small-12 columns">
 <h2><?php the_title();?></h2>
 <?php 
 
 the_content();

 wp_link_pages(
    array(
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'dogri' ) . '">',
        'after'    => '</nav>',
        /* translators: %: Page number. */
        'pagelink' => esc_html__( 'Page %', 'dogri' ),
    )
);
 ?>
</div>
 
 
 </div>
 </div>   
 

<?php
} 
get_footer();
?>