<?php
/**
 * Smart Light functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smart_Light
 */

if ( ! function_exists( 'db_smart_light_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function db_smart_light_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Smart Light, use a find and replace
		 * to change 'db-smart-light' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'db-smart-light', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'db-smart-light' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'db_smart_light_custom_background_args', array(
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
add_action( 'after_setup_theme', 'db_smart_light_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function db_smart_light_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'db_smart_light_content_width', 640 );
}
add_action( 'after_setup_theme', 'db_smart_light_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function db_smart_light_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'db-smart-light' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'db-smart-light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'db_smart_light_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function db_smart_light_scripts() {
	wp_enqueue_style( 'db-smart-light-style', get_stylesheet_uri() );

	wp_enqueue_style( 'db-smart-light-tilda-grid', get_template_directory_uri() . "/css/tilda-grid-3.0.min.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-tilda-blocks', get_template_directory_uri() . "/css/tilda-blocks-2.12.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-tilda-animation', get_template_directory_uri() . "/css/tilda-animation-1.0.min.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-tilda-slds', get_template_directory_uri() . "/css/tilda-slds-1.4.min.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-tilda-zoom', get_template_directory_uri() . "/css/tilda-zoom-2.0.min.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-slick', get_template_directory_uri() . "/slick/slick.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-slick-theme', get_template_directory_uri() . "/slick/slick-theme.css", array(), '2019' );
	wp_enqueue_style( 'db-smart-light-main', get_template_directory_uri() . "/css/main.css", array(), '2019' );

	wp_enqueue_script( 'db-smart-light-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'db-smart-light-jquery', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array(), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-scripts', get_template_directory_uri() . '/js/tilda-scripts-2.8.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-blocks', get_template_directory_uri() . '/js/tilda-blocks-2.7.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-lazyload', get_template_directory_uri() . '/js/lazyload-1.3.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-animation', get_template_directory_uri() . '/js/tilda-animation-1.0.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-slds', get_template_directory_uri() . '/js/tilda-slds-1.4.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-hammer', get_template_directory_uri() . '/js/hammer.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-zoom', get_template_directory_uri() . '/js/tilda-zoom-2.0.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-tilda-forms', get_template_directory_uri() . '/js/tilda-forms-1.0.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-slick', get_template_directory_uri() . '/slick/slick.min.js', array('db-smart-light-jquery'), '20151215', true );
	wp_enqueue_script( 'db-smart-light-main', get_template_directory_uri() . '/js/main.js', array('db-smart-light-jquery'), '20151215', true );

	wp_enqueue_script( 'db-smart-light-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'db_smart_light_scripts' );

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

/**
 * Header menu walker
 */
require get_template_directory() . '/inc/walker.php';

/**
 * TGM
 */
require get_template_directory() . '/tgm/tgm.php';