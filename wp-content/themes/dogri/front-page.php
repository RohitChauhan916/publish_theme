<?php get_header();?>
<?php if(get_theme_mod('slider-display-setting') === 'Yes'){?>
<section class="banner">
    <div class="row">
            <div class="carousel carousel-slider">
                <!-- Slider 1 -->
            <?php 
                $slider_one_id = get_theme_mod( 'slider-image-one' );
                $slider_one_data = wp_get_attachment_url( $slider_one_id , 'full' );
                if ($slider_one_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_one')?>">
                    <img src="<?php echo $slider_one_data;?>">
                </a>
            <?php } ?>

            <!-- Slider 2 -->
            <?php 
                $slider_two_id = get_theme_mod( 'slider-image-two' );
                $slider_two_data = wp_get_attachment_url( $slider_two_id , 'full' );
                if ($slider_two_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_two')?>">
                    <img src="<?php echo $slider_two_data;?>">
                </a>
            <?php } ?>

            <!-- Slider 3 -->
            <?php 
                $slider_three_id = get_theme_mod( 'slider-image-three' );
                $slider_three_data = wp_get_attachment_url( $slider_three_id , 'full' );
                if ($slider_three_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_three')?>">
                    <img src="<?php echo $slider_three_data;?>">
                </a>
            <?php } ?>
            </div>
    </div>
</section>
<?php } ?>

<?php if(get_theme_mod('service-display-setting') === 'Yes'){?>
<!-- section service -->
<section class="service">
    <div class="container">
        <?php $servicehead = get_theme_mod('service_head');
        if($servicehead){
        ?>
        <h3><?php echo $servicehead?></h3>
        <?php } ?>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons"><?php echo esc_html(get_theme_mod('icon1'));?></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo esc_html(get_theme_mod('icon_head1'));?></span>
                        <p><?php echo esc_html(get_theme_mod('icon_para1'));?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons"><?php echo esc_html(get_theme_mod('icon2'));?></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo esc_html(get_theme_mod('icon_head2'));?></span>
                        <p><?php echo esc_html(get_theme_mod('icon_para2'));?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons"><?php echo esc_html(get_theme_mod('icon3'));?></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo esc_html(get_theme_mod('icon_head2'));?></span>
                        <p><?php echo esc_html(get_theme_mod('icon_para3'));?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<!-- section about -->
<?php if(get_theme_mod('about-display-setting') === 'Yes'){?>
<section class="about">
    <div class="container">
        <div class="row">
        <div class="col s12 m12 l6">
            <div class="about_para">
                <?php $about_head =  get_theme_mod('about_head');
                    if($about_head){
                ?>
                <h3><?php echo $about_head;?></h3>
                <?php } ?>
                <p><?php echo esc_html(get_theme_mod('about_para'));?></p>
                <a class="waves-effect waves-light btn-large btn_color z-depth-3" href="<?php echo esc_html(get_theme_mod('about_url'));?>">READ MORE</a>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="img_sec">
            <?php 
                $about_id = get_theme_mod( 'about-image' );
                $about_data = wp_get_attachment_url( $about_id , 'full' );
                if ($about_data){
            ?>
                <img class="responsive-img z-depth-1" src="<?php echo $about_data; ?>">
                <?php } ?>
            </div>
        </div>
        </div>
    </div>
</section>
<?php } ?>

<section class="blog">
    <div class="container">
        <h3>Blog</h3>
        <div class="row">
        <?php 
    $homepageStories = new Wp_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'post'
    ));
    while($homepageStories->have_posts()){
        $homepageStories->the_post();
?>
            <div class="col s12 m6 l4">
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
                        <div class="card-content post_color bg_card">
                            <span class="card-title"><?php the_title();?></span>
                            <p><?php echo wp_trim_words(get_the_content(), 10) ?></p>
                        </div>
                </div></a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer();?>