<?php
// connect custom menu class
require __DIR__ . '/inc/anurin-iconopis-menu.php';
require __DIR__ . '/inc/anurin-iconopis-menu-footer.php';
require __DIR__ . '/inc/contact-form7-settings.php';

// debug function
function anurin_iconopis_degug ($array) {
	echo '<pre>' . print_r($array, 1) . '</pre>';
};

/**
 * Painter Yuriy Anurin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Painter_Yuriy_Anurin
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Enqueue Javascript With Type Module
// https://www.faqcode4u.com/faq/232130/enqueue-javascript-with-type-module
function add_type_attribute($tag, $handle, $src) {
	// if not your script, do nothing and return original $tag
	if ( 'anurin_iconopis_script' !== $handle ) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function anurin_iconopis_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Painter Yuriy Anurin, use a find and replace
		* to change 'anurin-iconopis' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'anurin-iconopis', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu_header_start_page' => esc_html__( 'Header Menu Start Page', 'anurin-iconopis' ),
			'menu_header' => esc_html__( 'Header Menu', 'anurin-iconopis' ),
			'menu_footer' => esc_html__( 'Footer Menu', 'anurin-iconopis' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'anurin_iconopis_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'anurin_iconopis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anurin_iconopis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'anurin_iconopis_content_width', 640 );
}
add_action( 'after_setup_theme', 'anurin_iconopis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anurin_iconopis_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'anurin-iconopis' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'anurin-iconopis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'anurin_iconopis_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function anurin_iconopis_scripts() {
	wp_enqueue_style('anurin_iconopis_main', get_template_directory_uri() . '/assets/css/style.css', array(), false);
	wp_enqueue_style('anurin_iconopis_style_wordpress', get_template_directory_uri() . '/assets/css/style-wordpress.css', array(), false);
	wp_enqueue_script('anurin_iconopis_script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'anurin_iconopis_scripts' );

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