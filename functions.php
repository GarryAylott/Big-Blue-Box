<?php
/**
 * @package Big Blue Box
 */

if ( ! isset( $content_width ) ) {
	$content_width = 1100; /* pixels */
}

if ( ! function_exists( 'bigbluebox_setup' ) ) :

function bigbluebox_setup() {

	load_theme_textdomain( 'bigbluebox', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Header Menu', 'bigbluebox' ),
		'secondary' => __( 'Footer Menu', 'bigbluebox' )
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
}

endif; // bigbluebox_setup
add_action( 'after_setup_theme', 'bigbluebox_setup' );

function bigbluebox_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bigbluebox' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s sidebar-items">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'bigbluebox_widgets_init' );

// Remove admin bar
show_admin_bar(false);

// Post offsets and pagination/navigation fix
add_action( 'pre_get_posts', function( \WP_Query $query )
{
    // Nothing to do if backend or not home page or not the main query
    if ( is_admin() || ! $query->is_home() || ! $query->is_main_query() )
        return;

    // Get current pagination
    $paged = get_query_var( 'paged', 1 );

    // Modify sticky posts display
    $query->set( 'ignore_sticky_posts', true );

    // Modify post status
    $query->set( 'post_status', 'publish' );

    // Edit to your needs
    $pp_fp      = 10; // posts per first page
    $pp_op      = 10; // posts per other pages
    $offset_fp  = 3;  // offset for the first page

    // Offset for other pages than the first page
    $offset_op = ( $paged - 2 ) * $pp_op + $pp_fp + $offset_fp;

    // Modify offset
    $query->set( 'offset', $query->is_paged() ? $offset_op : $offset_fp );

    // Modify posts per page
    $query->set( 'posts_per_page', $query->is_paged() ? $pp_op : $pp_fp );
} );

//Load jQuery
function load_jQuery() {
    if (!is_admin())
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', false, '3.1.0', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'load_jQuery');

// Enqueue scripts and styles
function bigbluebox_scripts() {
	wp_register_script('add-fitvids-js', get_template_directory_uri() . '/js/fitvids.js', array('jquery'),'',true);
	wp_register_script('add-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'),'',true);

	wp_enqueue_script('add-fitvids-js');
	wp_enqueue_script('add-custom-js');
	wp_enqueue_script('bigbluebox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script('bigbluebox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css', null, '4.0.1' );
	wp_enqueue_style('bigbluebox-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigbluebox_scripts' );

?>
