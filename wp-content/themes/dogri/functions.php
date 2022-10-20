<?php


function dogri_files() {
    wp_enqueue_style( 'Montserrat', get_template_directory_uri() . '/font/Montserrat/static/Montserrat-Light.ttf', false);
    wp_enqueue_style( 'Teko', get_template_directory_uri() . '/font/Teko/Teko-Medium.ttf', false);
    wp_enqueue_style( 'masterialize_css', get_template_directory_uri() . '/css/materialize.min.css',false,'1.0','all');
    wp_enqueue_style('ayush_main_styles', get_stylesheet_uri());
    wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'masterialize_js', get_template_directory_uri() . '/js/materialize.min.js', array ( 'jquery' ), 1.0, true);

    // Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'dogri_files');

function dogri_setup() {

    // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );  

    /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
            );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

    register_nav_menu('primary', 'primary');

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
		add_theme_support( 'align-wide' );

        // Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => '#fff',
			)
		);

        // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'dogri_setup');

function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		//echo '<pre>'; print_r($menu_items); die;
        $menu_list = '<ul class="right hide-on-med-and-down">';
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
                     
                    $menu_list .= '<li class="menu_li">';
                    $menu_list .= '<a class="dropdown-trigger" href="#" data-target="dropdown1"><span>'.$menu_item->title.'</span> <i class="material-icons right">arrow_drop_down</i></a>';
                     
                    $menu_list .= '<ul id="dropdown1" class="dropdown-content">' ."\n";
                    $menu_list .= implode( $menu_array );
                    $menu_list .= '</ul>';
                     
                } else {
                    // echo "<pre>"; print_r($menu_item); 
                    $menu_list .= '<li class="menu_li">';
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

function mobile_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		//echo '<pre>'; print_r($menu_items); die;
        $menu_list = '<ul class="sidenav" id="mobile-demo">';
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
                    $menu_list .= '<a class="dropdown-trigger1" href="#" data-target="dropdown2"><span>'.$menu_item->title.'</span> <i class="material-icons right">arrow_drop_down</i></a>';
                     
                    $menu_list .= '<ul id="dropdown2" class="dropdown-content">' ."\n";
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

//feature image

function featured_image() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'featured_image');

require get_template_directory() . '/inc/customizer.php';

function dogri_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'dogri' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'dogri' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'dogri' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'dogri' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'dogri' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'dogri' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'dogri' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'dogri' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'dogri_widgets_init' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function dogri_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'dogri_skip_link_focus_fix' );