<?php
/**
 * Custom WP Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Redo_Theme
 */

if ( ! defined( 'REDO_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'REDO_THEME_VERSION', '1.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function redo_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'redo-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'redo-theme' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'redo-theme' ),
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
add_action( 'after_setup_theme', 'redo_theme_setup' );

/**
 * Register widget area.
 */
function redo_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'redo-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'redo-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'redo-theme' ),
			'id'            => 'footer-sidebar',
			'description'   => esc_html__( 'Add widgets here for the footer.', 'redo-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'redo_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function redo_theme_scripts() {
	// Standard Theme Style
	wp_enqueue_style( 'redo-theme-style', get_stylesheet_uri(), array(), REDO_THEME_VERSION );
	
	// Ported Styles
	wp_enqueue_style( 'redo-utils', get_template_directory_uri() . '/assets/css/redo-utils.css', array(), REDO_THEME_VERSION );
	wp_enqueue_style( 'redo-main', get_template_directory_uri() . '/assets/css/redo-style.css', array( 'redo-utils' ), REDO_THEME_VERSION );

	wp_style_add_data( 'redo-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'redo-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), REDO_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'redo_theme_scripts' );
/**
 * Add Customizer settings.
 */
function redo_theme_customize_register( $wp_customize ) {
	// Sidebar Section
	$wp_customize->add_section( 'redo_theme_sidebar_options', array(
		'title'    => __( 'Sidebar Options', 'redo-theme' ),
		'priority' => 30,
	) );

	// Action 1 Text
	$wp_customize->add_setting( 'redo_sidebar_action_1_text', array(
		'default'   => __( 'Download kit', 'redo-theme' ),
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'redo_sidebar_action_1_text', array(
		'label'    => __( 'Action 1 Text', 'redo-theme' ),
		'section'  => 'redo_theme_sidebar_options',
		'settings' => 'redo_sidebar_action_1_text',
		'type'     => 'text',
	) );

	// Action 1 Link
	$wp_customize->add_setting( 'redo_sidebar_action_1_url', array(
		'default'   => '#',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'redo_sidebar_action_1_url', array(
		'label'    => __( 'Action 1 URL', 'redo-theme' ),
		'section'  => 'redo_theme_sidebar_options',
		'settings' => 'redo_sidebar_action_1_url',
		'type'     => 'url',
	) );

	// Action 2 Text
	$wp_customize->add_setting( 'redo_sidebar_action_2_text', array(
		'default'   => __( 'Contact us', 'redo-theme' ),
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'redo_sidebar_action_2_text', array(
		'label'    => __( 'Action 2 Text', 'redo-theme' ),
		'section'  => 'redo_theme_sidebar_options',
		'settings' => 'redo_sidebar_action_2_text',
		'type'     => 'text',
	) );

	// Action 2 Link
	$wp_customize->add_setting( 'redo_sidebar_action_2_url', array(
		'default'   => '#',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'redo_sidebar_action_2_url', array(
		'label'    => __( 'Action 2 URL', 'redo-theme' ),
		'section'  => 'redo_theme_sidebar_options',
		'settings' => 'redo_sidebar_action_2_url',
		'type'     => 'url',
	) );
}
add_action( 'customize_register', 'redo_theme_customize_register' );

/**
 * Register Block Patterns.
 */
function redo_theme_register_block_patterns() {
	register_block_pattern_category(
		'redo-theme',
		array( 'label' => __( 'Redo Theme', 'redo-theme' ) )
	);

	register_block_pattern(
		'redo-theme/full-guidelines',
		array(
			'title'       => __( 'Full Brand Guidelines', 'redo-theme' ),
			'description' => _x( 'The complete brand guidelines layout.', 'Block pattern description', 'redo-theme' ),
			'categories'  => array( 'redo-theme' ),
			'content'     => '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --><figure class="wp-block-image size-full"><img src="' . get_template_directory_uri() . '/assets/images/Hero.png" alt=""/></figure><!-- /wp:image --> <!-- wp:group {"tagName":"section","className":"guidelines p-32","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><section class="wp-block-group guidelines p-32"><!-- wp:group {"className":"guide-heading","layout":{"type":"constrained"}} --><div class="wp-block-group guide-heading"><!-- wp:heading {"level":1,"className":"heading-1"} --><h1 class="wp-block-heading heading-1">Brand <br>Guidelines</h1><!-- /wp:heading --></div><!-- /wp:group --> <!-- wp:group {"className":"guide-content paragraph-1","layout":{"type":"constrained"}} --><div class="wp-block-group guide-content paragraph-1"><!-- wp:paragraph --><p>This guide defines the visual language, design style, and principles that shape a clear and consistent brand experience, no matter the team or area of expertise.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>At its core, Redo is about precision and clarity—just like our mission to correct financial errors and optimize balance sheets.</p><!-- /wp:paragraph --></div><!-- /wp:group --></section><!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'redo_theme_register_block_patterns' );

/**
 * Filter the nav menu link attributes to add classes.
 */
function redo_theme_nav_menu_link_attributes( $atts, $item, $args ) {
	if ( property_exists( $args, 'theme_location' ) ) {
		if ( 'menu-1' === $args->theme_location ) {
			$atts['class'] = ! empty( $atts['class'] ) ? $atts['class'] . ' nav-link paragraph-1' : 'nav-link paragraph-1';
		} elseif ( 'footer-menu' === $args->theme_location ) {
			$atts['class'] = ! empty( $atts['class'] ) ? $atts['class'] . ' link' : 'link';
		}
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'redo_theme_nav_menu_link_attributes', 10, 3 );

/**
 * Add numbers to menu items to match design.
 */
function redo_theme_nav_menu_item_title( $title, $item, $args, $depth ) {
	if ( property_exists( $args, 'theme_location' ) && 'menu-1' === $args->theme_location ) {
		static $count = 0;
		$count++;
		$number = str_pad( $count, 2, '0', STR_PAD_LEFT );
		$title .= '<sup class="display">' . $number . '</sup>';
	}
	return $title;
}
add_filter( 'nav_menu_item_title', 'redo_theme_nav_menu_item_title', 10, 4 );

