<?php 
get_header();

while(have_posts())
{
    the_post();

?>
<section class="post-section-content">
    <div class="row">
        <div class="col s12">
            <?php if (has_post_thumbnail()){ ?>
                <div class="post-image">
                    <?php the_post_thumbnail();?>
                </div>
            <?php } ?>
            <div class="post-contents">
                <div class="container">
                    <div class="post-title">
                        <h1><?php the_title();?></h1>
                    </div>
                    <div class="post-content entry-content">
                        <?php the_content();
                        wp_link_pages(
                            array(
                                'before'   => '<div class="nav-links" aria-label="' . esc_attr__( 'Page', 'dogri' ) . '">',
                                'after'    => '</div>',
                                /* translators: %: Page number. */
                                'pagelink' => esc_html__( 'Page %', 'dogri' ),
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
} 
get_footer();
?>