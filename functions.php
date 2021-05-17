<?php
/**
 * JazzClubTownsville functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JazzClubTownsville
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('jazzclubtownsville_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jazzclubtownsville_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JazzClubTownsville, use a find and replace
		 * to change 'jazzclubtownsville' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('jazzclubtownsville', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'jazzclubtownsville'),
				'footer-menu' => esc_html( 'Footer Menu', 'jazzclubtownsville' ),
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
				'jazzclubtownsville_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 1000,
				'width' => 250,
				'flex-width' => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'jazzclubtownsville_setup');

/**
 * Register custom fonts.
 */
function jazzclubtownsville_fonts_url()
{
	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro and Source Serif Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x('on', 'Source Sans Pro font: on or off', 'jazzclubtownsville');
	$source_serif_pro = _x('on', 'Source Serif Pro font: on or off', 'jazzclubtownsville');

	$font_families = array();

	if ('off' !== $source_sans_pro) {
		$font_families[] = 'Source Sans Pro:400,400i,700,900';
	}

	if ('off' !== $source_serif_pro) {
		$font_families[] = 'Source Serif Pro:400,400i,700,700i';
	}


	if (in_array('on', array($source_sans_pro, $source_serif_pro))) {

		$query_args = array(
			'family' => urlencode(implode('|', $font_families)),
			'subset' => urlencode('latin,latin-ext'),
		);

		$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
	}

	return esc_url_raw($fonts_url);
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jazzclubtownsville_content_width()
{
	$GLOBALS['content_width'] = apply_filters('jazzclubtownsville_content_width', 640);
}

add_action('after_setup_theme', 'jazzclubtownsville_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jazzclubtownsville_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'jazzclubtownsville'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'jazzclubtownsville'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}

add_action('widgets_init', 'jazzclubtownsville_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function jazzclubtownsville_scripts()
{
	// Enqueue Google Fonts: Source Sans Pro and Source Serif Pro
	wp_enqueue_style('jazzclubtownsville-fonts', jazzclubtownsville_fonts_url());

	wp_enqueue_style('jazzclubtownsville-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	wp_style_add_data('jazzclubtownsville-style', 'rtl', 'replace');

	wp_enqueue_script('jazzclubtownsville-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true);

	wp_localize_script('jazzclubtownsville-navigation', 'jazzclubtownsvilleScreenReaderText', array(
		'expand' => __('Expand child menu', 'jazzclubtownsville'),
		'collapse' => __('Collapse child menu', 'jazzclubtownsville')
	));

	wp_enqueue_script('jazzclubtownsville-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), _S_VERSION, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'jazzclubtownsville_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

