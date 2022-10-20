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
                    <div class="post-content">
                        <?php the_content();
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
            <div class="comment-section">
                <div class="container">
                <?php 
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
} 
get_footer();
?>