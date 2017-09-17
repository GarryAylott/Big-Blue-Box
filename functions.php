<?php
if ( ! isset( $content_width ) ) {
	$content_width = 1100; /* pixels */
}

// Theme support for post thumbnails and featured images
function custom_image_setup () {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 260, 180 );
    add_image_size( 'post-feat-small', 230, 157, true );
    add_image_size( 'post-feat-large', 1920, 9999 );
}
add_action( 'after_setup_theme', 'custom_image_setup' );

// Add SVG support
  function cc_mime_types( $mimes ) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
  }
 add_filter( 'upload_mimes', 'cc_mime_types' );

// SVG support latest
function bodhi_svgs_disable_real_mime_check( $data, $file, $filename, $mimes ) {
	$wp_filetype = wp_check_filetype( $filename, $mimes );

	$ext = $wp_filetype['ext'];
	$type = $wp_filetype['type'];
	$proper_filename = $data['proper_filename'];

	return compact( 'ext', 'type', 'proper_filename' );
}
add_filter( 'wp_check_filetype_and_ext', 'bodhi_svgs_disable_real_mime_check', 10, 4 );

// Stop WP compressing images to 90% as already optimised pre-upload and also using WPSmush.it
add_filter( 'jpeg_quality', function($arg){return 100;} );
add_filter( 'wp_editor_set_quality', function($arg){return 100;} );

// Remove WP version generator from head and RSS feed
	function my_remove_version_info() {
	return '';
}
add_filter('the_generator', 'my_remove_version_info');

// Add featured image to RSS feed
function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '<p>' . get_the_post_thumbnail($post->ID) .
		'</p>' . get_the_content();
	}
	return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

// Stop WP from wrapping images in <p> tags
function filter_ptags_on_images($content)
{
$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// Add class to last post
function my_post_class($classes) {
	global $wp_query;
	if(($wp_query->current_post+1) == $wp_query->post_count) $classes[] = 'last';
	return $classes;
}
add_filter('post_class', 'my_post_class');

// Add subscribe link to Powerpress section
function themename_powerpress_player_links($content, $media_url, $ExtraData = array())
{
	$content .= '<a href="https://itunes.apple.com/gb/podcast/doctor-who-big-blue-box-podcast/id852653886?mt=2" class="powerpress_link_sub" target="_blank">Subscribe on iTunes</a>';
	return $content;
}
add_filter('powerpress_player_links', 'themename_powerpress_player_links', 100, 3);

// Remove pages from search results
function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');

// Remove inline width and height from images
function remove_thumbnail_dimensions( $html ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );


// Limit sidebar archives to 12 months max
function my_limit_archives( $args ) {
    $args['limit'] = 12;
    return $args;
}
add_filter( 'widget_archives_args', 'my_limit_archives' );
add_filter( 'widget_archives_dropdown_args', 'my_limit_archives' );

// Add Home link to menu
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

// Limit database revisions to keep it in check
define( 'WP_POST_REVISIONS', 2 );

// Load Google Font
function load_fonts() {
wp_register_style('et-googleFonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,600,700');
wp_enqueue_style( 'et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');

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

// Excerpt length
function my_excerpt_length() {
	global $myExcerptLength;

	if ($myExcerptLength) {
		return $myExcerptLength;
		} else {
		return 30;
	}
}
add_filter('excerpt_length', 'my_excerpt_length');

// Custom continue buttons
function new_excerpt_more($more) {
	if (in_category ('podcasts')) {
		return '... <div class="post-cta-audio"><a class="btn-medium btn-audio" href="' . get_permalink() . '">Listen now</a></div>';
		} else {
		return '... <div><a class="btn-medium" href="' . get_permalink() . '">Read more</a></div>';
	  }
}
add_filter('excerpt_more', 'new_excerpt_more');

// Remove archive title prefixes
/**
 * @param  string  $title  The archive title from get_the_archive_title();
 * @return string          The cleaned title.
 */
function grd_custom_archive_title( $title ) {
	// Remove any HTML, words, digits, and spaces before the title.
	return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'grd_custom_archive_title' );

// Custom login page stylesheet
function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Big Blue Box Podcast';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Load jQuery
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
	wp_enqueue_style('bigbluebox-style', get_stylesheet_uri() );

	wp_register_script('fitvids-js', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), '', true);
	wp_register_script('swiper-js', get_template_directory_uri() . '/js/swiper.jquery.js', '', '3.4.1', true);
	wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', '', '', true);

	wp_enqueue_script('bigbluebox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script('bigbluebox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script('fitvids-js');
	wp_enqueue_script('swiper-js');
	wp_enqueue_script('main-js');
}
add_action( 'wp_enqueue_scripts', 'bigbluebox_scripts' );

?>
