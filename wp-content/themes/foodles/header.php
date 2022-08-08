<!DOCTYPE html>
<html>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Template</title> 
        <?php wp_head(); ?>
    </head>
    <body>
<div class="row">
    <div class="large-4 medium-4 small-12 columns">

    <div id="logo"> <?php if( has_custom_logo() ):  ?>
                <?php 
                    // Get Custom Logo URL for image
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $custom_logo_url = $custom_logo_data[0];
                ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                rel="home">

                    <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

                </a>
            <?php else: ?>
                <!-- Get Custom Logo Text -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
            </div>
        </div>


        <div class="large-8 medium-8 small-12 columns">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"> </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
                <?php echo create_bootstrap_menu('primary'); ?>
            </section>
            </nav>
            </div>
    </div>