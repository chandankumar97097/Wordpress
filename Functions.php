<?php
/**
 * dynemicwordpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dynemicwordpress
 */

if ( ! function_exists( 'dynemicwordpress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dynemicwordpress_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dynemicwordpress, use a find and replace
	 * to change 'dynemicwordpress' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dynemicwordpress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'dynemicwordpress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'slider',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dynemicwordpress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'dynemicwordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dynemicwordpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dynemicwordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'dynemicwordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dynemicwordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dynemicwordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dynemicwordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dynemicwordpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dynemicwordpress_scripts() {
	wp_enqueue_style( 'dynemicwordpress-style', get_stylesheet_uri() );

	wp_enqueue_script( 'dynemicwordpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dynemicwordpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dynemicwordpress_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
//Redux Frame Work
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/theme-options/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/theme-options/ReduxCore/framework.php' );
}
if ( !isset( $sante ) && file_exists( dirname( __FILE__ ) . '/theme-options/core/theme_option.php' ) ) {
    require_once( dirname( __FILE__ ) . '/theme-options/core/theme_option.php' );
}
//Simple post
function slider() {
	$labels = array(
		'name'                  => _x( 'slider', 'Post Type General Name', 'slider' ),
		'singular_name'         => _x( 'slider', 'Post Type Singular Name', 'slider' ),
		'menu_name'             => __( 'slider', 'slider' ),
		'name_admin_bar'        => __( 'slider', 'slider' ),
		'archives'              => __( 'slider Archives', 'slider' ),
		'parent_item_colon'     => __( 'Parent slider:', 'slider' ),
		'all_items'             => __( 'All slider', 'slider' ),
		'add_new_item'          => __( 'Add New slider', 'slider' ),
		'add_new'               => __( 'Add slider', 'slider' ),
		'new_item'              => __( 'New slider', 'slider' ),
		'edit_item'             => __( 'Edit slider', 'slider' ),
		'update_item'           => __( 'Update slider', 'slider' ),
		'view_item'             => __( 'View slider', 'slider' ),
		'search_items'          => __( 'Search slider', 'slider' ),
		'not_found'             => __( 'Not found', 'slider' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'slider' ),
		'featured_image'        => __( 'Featured Image', 'slider' ),
		'set_featured_image'    => __( 'Set featured image', 'slider' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider' ),
		'use_featured_image'    => __( 'Use as featured image', 'slider' ),
		'insert_into_item'      => __( 'Insert into item', 'slider' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'slider' ),
		'items_list'            => __( 'Items list', 'slider' ),
		'items_list_navigation' => __( 'Items list navigation', 'slider' ),
		'filter_items_list'     => __( 'Filter items list', 'slider' ),
	);
	$args = array(
		'label'                 => __( 'slider', 'slider' ),
		'description'           => __( 'Post Type Description', 'slider' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider', 0 );
