<?php
/**
 * The header template file.
 * @package OcuTheme
 * @since OcuTheme 1.0
*/
?>
<?php 
$siteurl	= get_option('siteurl');
$themeurl	= $siteurl.'/wp-content/themes/'.get_option('template');
require_once(TEMPLATEPATH.'/inc/wp_bootstrap_navwalker.php');

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

//Adding CSS
function danker_add_script(){
	//CSS
	global $wp_styles;
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.1.1' );
	
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
	wp_enqueue_style('navbar-fixed-top', get_template_directory_uri().'/css/navbar-fixed-top.css', array(), '3.1.1' );
	
		wp_enqueue_style('font_awesome', get_template_directory_uri().'/css/font-awesome.min.css', array( ), '4.0.3');
		
		wp_enqueue_style('danker-style', get_stylesheet_uri() );
		
		wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-1.10.2.min.js', array(), '3.0.3', true);
		wp_enqueue_script('boostrap-min', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '3.0.3', true);
}
add_action( 'wp_enqueue_scripts', 'danker_add_script' );

//Register Sidebar
function danker_widgets_init(){
	register_sidebar( array(
	'name' => __( 'Main Sidebar', 'uangocutheme' ),
	'id' => 'sidebar-widget',
	'description' => __( 'Main Widget which has its one widgets', 'uangocutheme' ),
	'before_widget'	=> '<aside id="%1$s" class="widget %2#s">',
	'after_widget'	=> '</aside>',
	'before_title'	=> '<div class="widheading"<span>',
	'after_title'	=> '</span></div>',
	));
}
add_action( 'widgets_init', 'danker_widgets_init' );
register_nav_menu( 'header_nav', 'Menu di Header' );
register_nav_menu( 'footer_nav', 'Menu di Footer' );

// add category nicenames in body and post class
function category_id_class( $classes ) {
	global $post;
	foreach ( ( get_the_category( $post->ID ) ) as $category ) {
		$classes[] = $category->category_nicename;
	}
	return $classes;
}
add_filter( 'post_class', 'category_id_class' );
add_filter( 'body_class', 'category_id_class' );

//add custom support
function custom_theme_setup() {
	add_theme_support( $feature, $arguments );
	add_action( 'after_setup_theme', 'custom_theme_setup' );
	add_theme_support( "title-tag" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
	add_theme_support( 'automatic-feed-links' ); 					  // Feed Links
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'widgets' ) );										   // HTML5
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

//add header
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 100,
	'height'                 => 90,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

//add background
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

function twentyten_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

function my_theme_add_editor_styles() {
    global $post;

    $my_post_type = 'posttype';

    // New post (init hook).
    if ( stristr( $_SERVER['REQUEST_URI'], 'post-new.php' ) !== false
            && ( isset( $_GET['post_type'] ) === true && $my_post_type == $_GET['post_type'] ) ) {
        add_editor_style( get_stylesheet_directory_uri()
            . '/css/editor-style-' . $my_post_type . '.css' );
    }

    // Edit post (pre_get_posts hook).
    if ( stristr( $_SERVER['REQUEST_URI'], 'post.php' ) !== false
            && is_object( $post )
            && $my_post_type == get_post_type( $post->ID ) ) {
        add_editor_style( get_stylesheet_directory_uri()
            . '/css/editor-style-' . $my_post_type . '.css' );
    }
}
add_action( 'init', 'my_theme_add_editor_styles' );
add_action( 'pre_get_posts', 'my_theme_add_editor_styles' );

?>