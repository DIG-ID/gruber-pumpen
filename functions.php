<?php
/**
 * Setup theme
 */
function gruber_pumpen_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'      => __( 'Main Menu', 'gruber-pumpen' ),
			'main-mega-menu' => __( 'Main Mega Menu', 'gruber-pumpen' ),
			'secondary-menu' => __( 'Secondary Menu', 'gruber-pumpen' ),
			'copyright-menu' => __( 'Copyright Menu', 'gruber-pumpen' ),
			'footer-menu'    => __( 'Footer Menu', 'gruber-pumpen' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size('training-overview-img', 250, 280, array('center', 'center'));

	add_image_size('training-featured-img', 540, 425, array('center', 'center'));

	add_image_size('products-gallery-thumbs', 282, 187, array('center', 'center'));

}

add_action( 'after_setup_theme', 'gruber_pumpen_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function gruber_pumpen_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'gruber_pumpen_theme_footer_widgets_init' );

if ( ! function_exists( 'gruber_pumpen_get_font_face_styles' ) ):

	/**
	 * Get font face styles.
	 * Called by functions gruber_pumpen_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function gruber_pumpen_get_font_face_styles() {

		return "
			@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap');
		";

	}

endif;

if ( ! function_exists( 'gruber_pumpen_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function gruber_pumpen_preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap">
		<?php
	}

endif;

add_action( 'wp_head', 'gruber_pumpen_preload_webfonts' );

/**
 * Enqueue styles and scripts
 */
function gruber_pumpen_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );
	// Add styles inline.
	wp_add_inline_style( 'theme-styles', gruber_pumpen_get_font_face_styles() );
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );
	//https://use.typekit.net/evg0ous.css first loaded fonts library backup
	//wp_enqueue_style( 'theme-fonts', 'https://use.typekit.net/buy6qwo.css', array(), $theme_version );

	wp_enqueue_script( 'jquery', false, array(), $theme_version, true);
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, true );
	wp_enqueue_script( 'font-awesome-kit', 'https://kit.fontawesome.com/eb1cd80e07.js', array(), $theme_version, true );

	wp_script_add_data( 'font-awesome-kit', 'crossorigin', 'anonymous' );

	if ( is_page_template( 'page-templates/page-contact.php' ) || is_admin() ) :
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo&callback=initMap', array(), $theme_version, true );
	endif;
}

add_action( 'wp_enqueue_scripts', 'gruber_pumpen_theme_enqueue_styles' );

//Google Map Init
function gruber_pumpen_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo' );
	endif;
}

add_action( 'acf/init', 'gruber_pumpen_theme_google_map_init' );

/**
 * Remove <p> Tag From Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function gruber_pumpen_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'gruber_pumpen_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';

// The theme custom menu walker settings.
require get_template_directory() . '/inc/theme-custom-menu-walker.php';


function my_console_log(...$data) {
	$json = json_encode($data);
	add_action('shutdown', function () use ($json) {
		echo "<script>console.log({$json})</script>";
	});
}