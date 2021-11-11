<?php
/**
 * erase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package erase
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'erase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function erase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on erase, use a find and replace
		 * to change 'erase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'erase', get_template_directory() . '/languages' );

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
				'primary_menu' => esc_html__( 'Primary', 'erase' ),
				'footer_menu'  => __( 'Footer Menu', 'erase' ),
				'footer_menu1'  => __( 'Footer Menu1', 'erase' ),
				'my-custom-menu'  => __( 'My Custom Menu', 'erase' ),
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
				'erase_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'erase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function erase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'erase_content_width', 640 );
}
add_action( 'after_setup_theme', 'erase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function erase_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'erase' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'erase' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'erase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function erase_scripts() {

	global $post;
  	// styles files css
	wp_enqueue_style( 'maicons', get_template_directory_uri(). '/css/maicons.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css');

	wp_enqueue_style( 'owlcarousel', get_template_directory_uri(). '/vendor/owl-carousel/css/owl.carousel.css');
	wp_enqueue_style( 'animate', get_template_directory_uri(). '/vendor/animate/animate.css');

	wp_enqueue_style( 'erase_style', get_stylesheet_uri());

	// calling JS files

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'jquery-3.5.1', get_template_directory_uri(). '/js/jquery-3.5.1.min.js');
	wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri(). '/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'vendor/owl-carousel', get_template_directory_uri(). '/vendor/owl-carousel/js/owl.carousel.min.js');
	wp_enqueue_script( 'wow', get_template_directory_uri(). '/vendor/wow/wow.min.js');
	wp_enqueue_script( 'js/theme', get_template_directory_uri(). '/js/theme.js');
}
add_action( 'wp_enqueue_scripts', 'erase_scripts' );

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

/*-----------------------------------------------------------------------------------*/
		/* to add custom class to anchor in footer
		/*-----------------------------------------------------------------------------------*/
		
		
		function erase_add_additional_class_on_a($classes, $item, $args)
		{
			if (isset($args->add_a_class)) {
				$classes['class'] = $args->add_a_class;
			}
			return $classes;
		}
		
		add_filter('nav_menu_link_attributes', 'erase_add_additional_class_on_a', 1, 3);
		
		require_once('bs4navwalker.php');
		
	/*-----------------------------------------------------------------------------------*/
			/* to add custom class to anchor in footer
			/*-----------------------------------------------------------------------------------*/
		function year_shortcode () {
			$year = date('Y');
			return $year;
			}
			add_shortcode ('year', 'year_shortcode');


			function wpbeginner_numeric_posts_nav() {
 
				if( is_singular() )
					return;
			 
				global $wp_query;
			 
				/** Stop execution if there's only 1 page */
				if( $wp_query->max_num_pages <= 1 )
					return;
			 
				$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
				$max   = intval( $wp_query->max_num_pages );
			 
				/** Add current page to the array */
				if ( $paged >= 1 )
					$links[] = $paged;
			 
				/** Add the pages around the current page to the array */
				if ( $paged >= 3 ) {
					$links[] = $paged - 1;
					$links[] = $paged - 2;
				}
			 
				if ( ( $paged + 2 ) <= $max ) {
					$links[] = $paged + 2;
					$links[] = $paged + 1;
				}
			 
				echo '<div class="Page Navigation"><ul class="pagination justify-content-center">' . "\n";
			 
				/** Previous Post Link */
				if ( get_previous_posts_link() )
					{
					printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('alaa') );
					// previous_posts_link( 'Newer Entries' );
					// printf( '<li class="page-item disabled"'.previous_posts_link( 'Newer Entries' ).'</li>');
					// printf( '<li class="page-item disabled">%s</li>' . "\n", previous_posts_link( 'Newer Entries' ) );
					// echo '<li class="page-item disabled">'.previous_posts_link( 'Newer Entries' ).'</li>';
						// echo '<li class="page-item"><a class="page-link" href="';
						// previous_posts();
						// echo '"> Previous </a></li>';
					}
			 
				/** Link to first page, plus ellipses if necessary */
				if ( ! in_array( 1, $links ) ) {
					$class = 1 == $paged ? ' class="page-item active"' : '';
			 
					printf( '<li%s class="page-item"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
			 
					if ( ! in_array( 2, $links ) )
						echo '<li class="page-item">…</li>';
				}
			 
				/** Link to current page, plus 2 pages in either direction if necessary */
				sort( $links );
				foreach ( (array) $links as $link ) {
					$class = $paged == $link ? ' class="page-item active"' : '';
					printf( '<li%s class="page-item"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
				}
			 
				/** Link to last page, plus ellipses if necessary */
				if ( ! in_array( $max, $links ) ) {
					if ( ! in_array( $max - 1, $links ) )
						echo '<li class="page-item">…</li>' . "\n";
			 
					$class = $paged == $max ? ' class="page-item active"' : '';
					printf( '<li%s class="page-item"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
				}
			 
				/** Next Post Link */
				if ( get_next_posts_link() )
					{
						echo '<li class="page-item"><a class="page-link" href="';
						next_posts();
						echo '"> Next </a></li>';
					}
					// printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link() );
			 
				echo '</ul></div>' . "\n";
			 
			}

