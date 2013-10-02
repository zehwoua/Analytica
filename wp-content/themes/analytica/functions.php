<?php
/**
 * Analytica functions and definitions
 *
 * @package Analytica
 */


//Add feautured image
add_theme_support( 'post-thumbnails');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'analytica_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function analytica_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Analytica, use a find and replace
	 * to change 'analytica' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'analytica', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'analytica' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'analytica_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // analytica_setup
add_action( 'after_setup_theme', 'analytica_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function analytica_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'analytica' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'analytica_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function analytica_scripts() {
	wp_enqueue_style( 'analytica-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'analytica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'analytica-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'autostart_videos', get_template_directory_uri() . '/js/autostart_videos.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'analytica-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'analytica_scripts' );


/************* ENQUEUE CSS AND JS *****************/

function theme_styles()
{
    // Bring in Open Sans from Google fonts
    // wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800');
    // This is the compiled css file from SCSS
    wp_register_style( 'analytica', get_template_directory_uri() . '/stylesheets/main.css');

    // wp_enqueue_style( 'open-sans' );
    wp_enqueue_style( 'analytica' );
}

add_action('wp_enqueue_scripts', 'theme_styles');


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/metabox.php';

/* CUSTOM POST TYPES */

// Custom Post type
function my_custom_post_release() {
	$labels = array(
		'name'               => _x( 'Releases', 'post type general name' ),
		'singular_name'      => _x( 'Release', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Release' ),
		'edit_item'          => __( 'Edit Release' ),
		'new_item'           => __( 'New Release' ),
		'all_items'          => __( 'All Releases' ),
		'view_item'          => __( 'View Release' ),
		'search_items'       => __( 'Search Releases' ),
		'not_found'          => __( 'No releases found' ),
		'not_found_in_trash' => __( 'No releases found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Releases'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our releases and release specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'categories' ),
		'rewrite' => array('slug' => 'releases', 'with_front' => true),
		'has_archive'   => true
	);
	register_post_type( 'analytica_releases', $args );
	flush_rewrite_rules( false );	
}
add_action( 'init', 'my_custom_post_release' );

// PEOPLE CUSTOM POST TYPE

function my_custom_post_people() {
	$labels = array(
		'name'               => _x( 'People', 'post type general name' ),
		'singular_name'      => _x( 'Person', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Person' ),
		'edit_item'          => __( 'Edit Person' ),
		'new_item'           => __( 'New Person' ),
		'all_items'          => __( 'All People' ),
		'view_item'          => __( 'View Person' ),
		'search_items'       => __( 'Search People' ),
		'not_found'          => __( 'No people found' ),
		'not_found_in_trash' => __( 'No people found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'People'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our people and persons specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'categories' ),
		'rewrite' => array('slug' => 'people', 'with_front' => true),
		'has_archive'   => true
	);
	register_post_type( 'analytica_people', $args );	
	flush_rewrite_rules( false );
}
add_action( 'init', 'my_custom_post_people' );

// PRODUCTS CUSTOM POST TYPE

function my_custom_post_product() {
	$labels = array(
		'name'               => _x( 'Products', 'post type general name' ),
		'singular_name'      => _x( 'Product', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Product' ),
		'edit_item'          => __( 'Edit Product' ),
		'new_item'           => __( 'New Product' ),
		'all_items'          => __( 'All Products' ),
		'view_item'          => __( 'View Product' ),
		'search_items'       => __( 'Search Products' ),
		'not_found'          => __( 'No product found' ),
		'not_found_in_trash' => __( 'No product found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Products'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our products and product specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'categories' ),
		'rewrite' => array('slug' => 'products', 'with_front' => true),
		'has_archive'   => true
	);
	register_post_type( 'analytica_products', $args );	
	flush_rewrite_rules( false );
}
add_action( 'init', 'my_custom_post_product' );


// BUSINESS CARDS CUSTOM POST TYPE

function my_custom_post_buscards() {
	$labels = array(
		'name'               => _x( 'Business Cards', 'post type general name' ),
		'singular_name'      => _x( 'Business Cards', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Business Card' ),
		'edit_item'          => __( 'Edit Business Card' ),
		'new_item'           => __( 'New Business Card' ),
		'all_items'          => __( 'All Business Cards' ),
		'view_item'          => __( 'View Business Card' ),
		'search_items'       => __( 'Search Business Card' ),
		'not_found'          => __( 'No business card found' ),
		'not_found_in_trash' => __( 'No business card found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Business Cards'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our business cards and business card specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'categories', 'post-formats' ),
		'rewrite' => array('slug' => 'buscards', 'with_front' => true),
		'has_archive'   => true
	);
	register_post_type( 'analytica_buscards', $args );	
	flush_rewrite_rules( false );
}
add_action( 'init', 'my_custom_post_buscards' );


// ALLOW VCF extension files to be uploaded 
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	// add your extension to the array
	$existing_mimes['vcf'] = 'text/x-vcard';
	return $existing_mimes;
}
