<?php
/**
 * futures functions and definitions
 *
 * @package futures
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


if ( ! function_exists( 'futures_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function futures_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on futures, use a find and replace
	 * to change 'futures' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'futures', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	 add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'futures' ),
		'footer' => __('Footer Menu', 'futures')
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'futures_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // futures_setup
add_action( 'after_setup_theme', 'futures_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function futures_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'futures' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'futures_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function futures_scripts() {
	#wp_enqueue_style( 'futures-style', get_stylesheet_uri() );

	wp_enqueue_script( 'futures-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'futures-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style( 'doyle', get_template_directory_uri() . '/css/doyle.css', array(), false, 'all' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, 'all' );

}
add_action( 'wp_enqueue_scripts', 'futures_scripts' );

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

show_admin_bar( false );


function add_postloop() {
	//check to see if ACF is active//
	if ( is_plugin_active( 'advanced-custom-fields/acf.php' ) ) {
		global $post;
		$post_id = $post->ID;

		//Args mapped to ACF fields
		$args = array(
			'cat' => get_field_object('postloop_select_category')['value'],
			'posts_per_page' => get_field_object('number_of_items_to_display')['value'],
		);

		//Instantiate WP_Query
		$postloop = new WP_Query( $args );

		//If show_post_loop is toggled on...
				if(get_field('show_post_loop')){
					if ( $postloop->have_posts() ) {
							// Start looping over the query results.
							while ( $postloop->have_posts() ) {
									$postloop->the_post();
									//Render the template partial 
									get_template_part('partials/content', 'loop');

							}
					}
				}

		// Restore original post data.
		wp_reset_postdata();
	} else {
		return NULL;
	}

}

//EXCERPT OVERRIDES//

function wpdocs_excerpt_more( $more ) {
    return '<br><a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
