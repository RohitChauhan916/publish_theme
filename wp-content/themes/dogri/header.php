<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php 
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'dogri' ); ?></a>
<header>
<nav>
    <div class="nav-wrapper">
        <div class="container">
                <!-- logo image -->
            <?php if( has_custom_logo() ):  ?>
                <?php 
                    // Get Custom Logo URL for image
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $custom_logo_url = $custom_logo_data[0];
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                </a>
                <?php else: ?>

                <!-- Get Custom Logo Text -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>
                <!-- <p><?php bloginfo( 'description' ); ?></p> -->

                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <?php echo create_bootstrap_menu('primary'); ?>
        </div>
      </div>
  </nav>
      <?php echo mobile_bootstrap_menu('primary'); ?>
</header>

    
        