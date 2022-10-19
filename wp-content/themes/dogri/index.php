<?php get_header();?>

    <?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
        <section class="blog_section_title">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </section>
    <?php endif; ?>

    <section class="blog_scection_content">
        <div class="container">
        <div class="row">
        <?php 
            $homeStories = new Wp_Query(array(
                'post_per_page' => 10 ,
                'post_type' => 'post',
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                ));
            while($homeStories->have_posts()){
                $homeStories->the_post(); ?>

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
        <div class="">
            <ul class="pagination">
                <?php echo the_posts_pagination(); ?>              
            </ul>
        </div>
        </div>
    </section>

<?php get_footer();?>