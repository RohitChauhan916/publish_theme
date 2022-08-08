<?php


function foodles_files() {
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css',false,'1.1','all');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',false,'1.1','all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css',false,'1.1','all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css',false,'1.1','all');
    wp_enqueue_style('ayush_main_styles', get_stylesheet_uri());
    wp_enqueue_script( 'mapdata', get_template_directory_uri() . '/js/vendor/modernizr.js', array ( 'jquery' ), 2.0);
    wp_enqueue_script( 'worldmap', get_template_directory_uri() . '/js/all.js', array ( 'jquery' ), 2.0, true);
    wp_enqueue_script( 'search', get_template_directory_uri() . '/slick/slick.js', array ( 'jquery' ), 2.0, true);
    wp_enqueue_script( 'chosen', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 2.0, true);
}
add_action('wp_enqueue_scripts', 'foodles_files');

function foodles_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

    register_nav_menu('primary', 'primary');
}
add_action( 'after_setup_theme', 'foodles_setup');



function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		//echo '<pre>'; print_r($menu_items); die;
        $menu_list = '<ul class="right">';
        $menucount = 1;
		$bool = true;
        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                 
                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '" >' . $submenu->title . '</a></li>';
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                     
                    $menu_list .= '<li class="first_post" onclick="menus()">';
                    $menu_list .= '<a href="javascript:void(0)"><span>'.$menu_item->title.'</span> <i class="bi bi-chevron-down"></i></a>';
                     
                    $menu_list .= '<ul class="second_part" id="second_part">' ."\n";
                    $menu_list .= implode( $menu_array );
                    $menu_list .= '</ul>';
                     
                } else {
                    // echo "<pre>"; print_r($menu_item); 
                    $menu_list .= '<li>';
                    $menu_list .= '<a class="nav-link scrollto active" href="'.$menu_item->url.'">' . $menu_item->title . '</a>';
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>';
			
			$menucount++;
        }
  
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    return $menu_list;
}

// logo setup
function buisness_custom_logo_setup() {
    $defaults = array(
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
    add_action( 'after_setup_theme', 'buisness_custom_logo_setup' );

// custom header image

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


//feature image

function featured_image() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'featured_image');

    /**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

function buisness_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'buisness' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'buisness' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'buisness' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'buisness' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'buisness' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'buisness' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'buisness' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'buisness' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'buisness_widgets_init' );
?>