<?php
/**
 * Analytica functions and definitions
 *
 * @package Analytica
 */

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

	wp_enqueue_script( 'analytica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'analytica-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

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

/* CUSTOM POST TYPES */

add_action( 'init', 'create_post_type_news' );
function create_post_type_news() {
  register_post_type( 'analytica-releases',
    array(
      'labels' => array(
        'name' => __( 'Releases' ),
        'singular_name' => __( 'Release' )
      ),
      'public' => true,
      'has_archive' =>true,
      'rewrite' => array('slug' => 'releases'),
      'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields','revisions'),
      'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    ));
}
