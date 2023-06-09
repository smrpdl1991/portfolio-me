<?php
/**
 * portfolio-me functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio-me
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfolio_me_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on portfolio-me, use a find and replace
		* to change 'portfolio-me' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfolio-me', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'portfolio-me' ),
			'menu-2' => esc_html__( 'FooterMenu', 'portfolio-me' ),
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
			'portfolio_me_custom_background_args',
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
add_action( 'after_setup_theme', 'portfolio_me_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_me_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfolio_me_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_me_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_me_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio-me' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio-me' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_me_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function portfolio_me_scripts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null );
	wp_enqueue_style( 'portfolio-me-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'portfolio-me-style-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'portfolio-me-carousel-default', get_template_directory_uri() . '/assets/framework/owl-carousel/owl.default.carousel.css', array(), _S_VERSION );
	wp_enqueue_style( 'portfolio-me-carousel', get_template_directory_uri() . '/assets/framework/owl-carousel/owl.carousel.css', array(), _S_VERSION );
	wp_enqueue_style( 'portfolio-me-style-custom', get_template_directory_uri() . '/assets/css/custom-style.css', array(), _S_VERSION );
	wp_enqueue_script( 'portfolio-me-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'portfolio-me-carouseljs', get_template_directory_uri() . '/assets/framework/owl-carousel/owl.carousel.js', array(( 'jquery' )), _S_VERSION, true );
	wp_enqueue_script( 'portfolio-me-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(( 'jquery' )), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_me_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';


require get_template_directory() . '/inc/image-repeator-portfolio.php';
/**
 * Custom post type for this theme.
 */
require get_template_directory() . '/inc/template-post-type.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


// require get_template_directory() . '/inc/customizer-fields.php';

require get_template_directory() . '/assets/framework/kirki/kirki.php';

require get_template_directory(). '/inc/kirkiCustomizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

?>
