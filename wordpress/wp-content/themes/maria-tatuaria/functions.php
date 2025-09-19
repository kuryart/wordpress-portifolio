<?php

/**
 * Maria Tatuaria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maria_Tatuaria
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maria_tatuaria_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Maria Tatuaria, use a find and replace
		* to change 'maria-tatuaria' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('maria-tatuaria', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'maria-tatuaria'),
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
			'maria_tatuaria_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'maria_tatuaria_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maria_tatuaria_content_width()
{
	$GLOBALS['content_width'] = apply_filters('maria_tatuaria_content_width', 640);
}
add_action('after_setup_theme', 'maria_tatuaria_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maria_tatuaria_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'maria-tatuaria'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'maria-tatuaria'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'maria_tatuaria_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function maria_tatuaria_scripts()
{
	wp_enqueue_style('maria-tatuaria-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('maria-tatuaria-style', 'rtl', 'replace');

	wp_enqueue_script('maria-tatuaria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'maria_tatuaria_scripts');

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

/**
 * ==============
 * === CUSTOM ===
 * ==============
 */
/**
 * Enqueue styles.
 */
function maria_tatuaria_enqueue_style()
{
	// Bootstrap
	wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

	// Parisienne Google Font
	wp_enqueue_style(
		'parisienne-google-fonts',
		'https://fonts.googleapis.com/css2?family=Parisienne&display=swap',
		false
	);

	// Animate.css
	wp_enqueue_style(
		'animate-css',
		'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
		false
	);
}
add_action('wp_enqueue_scripts', 'maria_tatuaria_enqueue_style');

/**
 * Add a metabox for gallery
 */
function maria_tatuaria_register_gallery()
{
	/**
	 * Repeatable Field Groups
	 */
	$cmb = new_cmb2_box(array(
		'id'           => 'gallery_metabox',
		'title'        => esc_html__('Imagens da Galeria', 'cmb2'),
		'object_types' => array('page'),
	));

	$cmb->add_field(array(
		'name' => 'Galeria',
		'desc' => 'Galeria de imagens que aparecerão no site.',
		'id'   => 'gallery_images',
		'type' => 'file_list',
		// 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'query_args' => array('type' => 'image'), // Only images attachment
		// Optional, override default text strings
		'text' => array(
			'add_upload_files_text' => 'Adicionar Imagens', // default: "Add or Upload Files"
			'remove_image_text' => 'Remover Imagem', // default: "Remove Image"
			'file_text' => 'Arquivo:', // default: "File:"
			'file_download_text' => 'Baixar', // default: "Download"
			'remove_text' => 'Remover', // default: "Remove"
		),
	));
}
add_action('cmb2_admin_init', 'maria_tatuaria_register_gallery');
