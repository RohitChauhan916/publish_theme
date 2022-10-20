<?php get_header();?>

        <section class="blog_section_title">
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
        </section>

    <section class="blog_scection_content">
        <div class="container">
        <div class="row">
        <?php 
            while(have_posts()){
                the_post(); ?>

            <div class="col s12 m6 l4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink();?>">
            <div class="card">
                <?php $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                    $image_title = get_the_title($image_id);
                    if(has_post_thumbnail()){
                    ?>
                        <div class="card-image post_image">
                            <?php the_post_thumbnail() ?>
                        </div>
                    <?php } ?>
                        <div class="card-content post_color">
                            <span class="card-title"><?php echo mb_strimwidth(get_the_title(), 0, 20, '...');?></span>
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                </div>
            </a>
            </div>   

        <?php } ?>
        </div>
        <div class="nav_archive">
                <?php echo paginate_links(); ?>            
        </div>
        </div>
    </section>

<?php get_footer();?>