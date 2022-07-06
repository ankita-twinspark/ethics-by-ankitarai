<?php
/**
 * nova functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nova
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
function nova_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on nova, use a find and replace
		* to change 'nova' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nova', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nova' ),
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
			'nova_custom_background_args',
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
add_action( 'after_setup_theme', 'nova_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nova_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nova_content_width', 640 );
}
add_action( 'after_setup_theme', 'nova_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nova_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nova' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nova' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nova_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nova_scripts() {
	wp_enqueue_style( 'nova-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nova-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nova-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nova_scripts' );

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

//custom post
add_action('init', 'affiliation_custom_post_type');

function affiliation_custom_post_type() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('affiliations', 'plural'),
'singular_name' => _x('affiliation', 'singular'),
'menu_name' => _x('affiliation', 'admin menu'),
'name_admin_bar' => _x('affiliation', 'admin bar'),
'add_new' => _x('Add affiliation', 'add affiliation'),
'add_new_item' => __('Add affiliation'),
'new_item' => __('New affiliation'),
'edit_item' => __('Edit affiliation'),
'view_item' => __('View affiliation'),
'all_items' => __('All affiliation'),
'search_items' => __('Search affiliation'),
'not_found' => __('No affiliation found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our affiliation and specific data',
'public' => true,
'taxonomies' => false,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'affiliation'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-admin-page',
);

register_post_type('affiliation', $args); // Register Post type
}


//custom field
function wporg_add_custom_box() {
    $screens = [ 'affiliation' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Title',      // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function wporg_custom_box_html( $post ) {
    $value = get_post_meta( $post->ID, '_wporg_meta_key', true );
    ?>
    <label for="wporg_field">Unde perspiciatis ut repellat dolorem</label>
<!--     <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something" <?php selected( $value, 'something' ); ?>>Something</option>
        <option value="else" <?php selected( $value, 'else' ); ?>>Else</option>
    </select> -->
    <input type="text" name="wporg_field" value="<?php echo $value;?>">
    <?php
}

function wporg_save_postdata( $post_id ) {
    /*echo "<pre>";
    print_r($_POST);die;
echo "</pre>";*/
    if ( array_key_exists( 'wporg_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_wporg_meta_key',
            $_POST['wporg_field']
        );
    }
}
add_action( 'save_post', 'wporg_save_postdata' );


//custom field for service post type start 
function services_custom_post_type_init() {
  	register_post_type( 'services',
					  		array(
								'labels' => array('name' => ( 'services' ), 'singular_name' => __( 'service' ) ),
								'public' => true,
								'has_archive' => true,
								'supports' => array('title', 'editor', 'thumbnail')
							)
  	);
}
add_action( 'init', 'services_custom_post_type_init' );

function services_add_custom_fields() {
    $screens = [ 'services' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'services_box_id',                 // Unique ID
            'Services Icon',      // Box title
            'services_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'services_add_custom_fields' );

function services_custom_box_html( $post ) {
$value = get_post_meta( $post->ID, 'services_meta_key', true );
?>
    <label for="services_field">Service Fa Icon Class </label>
    <input type="text" name="services_field" value="<?php echo $value;?>">
    <?php
}

function services_save_postdata( $post_id ) {
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	die('ss');*/
    if ( array_key_exists( 'services_field', $_POST ) ) {
        update_post_meta($post_id, 'services_meta_key',$_POST['services_field']);
    }
}
add_action( 'save_post', 'services_save_postdata' );
//custom field for service post type end
