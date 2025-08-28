<?php
/**
 * bigbluebox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbluebox
 */

if ( ! function_exists( 'bigbluebox_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bigbluebox_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bigbluebox, use a find and replace
		 * to change 'bigbluebox' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bigbluebox', get_template_directory() . '/languages' );

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
		add_image_size( 'feat-lrg', 750, 250, true );
		add_image_size( 'feat-med', 570, 250, true );
		add_image_size( 'feat-sml', 370, 200, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top-nav' => __( 'Header Menu', 'bigbluebox' ),
			'btm-nav' => __( 'Footer Menu', 'bigbluebox' )
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
		add_theme_support( 'custom-background', apply_filters( 'bigbluebox_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'bigbluebox_setup' );

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

// Force Jetpack Publicize to attach feat image to Twitter instead of Twitter cards
add_filter( 'jetpack_publicize_options', function( $option ) { 
    $option['attach_media'] = true;
    return $option;
} );

// Add category class to body tag for single posts
add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
  if (is_single() ) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      // add category slug to the $classes array
      $classes[] = $category->category_nicename;
    }
  }
  // return the $classes array
  return $classes;
}

// Make featured images (not single posts) link to their post
function link_featured_images( $html, $post_id, $post_image_id ) {
	If (! is_singular()) {
		$html = '<a class="post-card--feat-img-link" href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
		return $html;
	} else {
		return $html;
	}
}
add_filter( 'post_thumbnail_html', 'link_featured_images', 10, 3 );

// Remove admin bar
show_admin_bar(false);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bigbluebox_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bigbluebox_content_width', 1170 );
}
add_action( 'after_setup_theme', 'bigbluebox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bigbluebox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bigbluebox' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bigbluebox' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bigbluebox_widgets_init' );

// Custom excerpt length
function my_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

// Custom ending to excerpt
function excerpt_readmore($more) {
	return '...';
}
add_filter('excerpt_more', 'excerpt_readmore');

// Add Twitter name to user profiles
function modify_contact_methods($profile_fields) {
	// Add new fields
	$profile_fields['twitter'] = 'Twitter Username';
	$profile_fields['twitter-url'] = 'Twitter URL';
	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');

// Archive page pagination
function pagination_nums( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
			'total' => $total_pages,
			'prev_text' => 'Previous',
			'next_text' => 'Next'
        ));
    }
}

// Remove tag prefixes from category, author etc
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});

// Editor styles
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' );

// Custom default avatar for comments
function wpb_new_gravatar ($avatar_defaults) {
	$myavatar = 'https://bigblueboxpodcast.co.uk/wp-content/uploads/2019/12/wpb-default-gravatar-1.png';
	$avatar_defaults[$myavatar] = "Default Gravatar";
	return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

// Include better comments file
require_once get_parent_theme_file_path( '/inc/better-comments.php' );

// Change comment form message text area
function wpsites_customize_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea id="comment" name="comment" placeholder="Your comment here..."cols="45" rows="4" aria-required="true"></textarea></p>';
    return $arg;
}
add_filter('comment_form_defaults', 'wpsites_customize_comment_form_text_area');

// Remove link from author name
add_filter( 'get_comment_author_link', 'remove_comment_author_link', 10, 3 );
function remove_comment_author_link( $return, $author, $comment_ID ) {
	return $author;
}

// Load jQuery
function load_jQuery() {
    if (!is_admin())
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.3.1', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'load_jQuery');

// Google Fonts loading optimisation
function bigbluebox_font_optimisation() {
	echo '<meta http-equiv="x-dns-prefetch-control" content="on"><link rel="dns-prefetch" href="//fonts.googleapis.com" />';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
}
add_action('wp_head', 'bigbluebox_font_optimisation', 0);

/**
 * Enqueue scripts and styles.
 */
function bigbluebox_scripts() {
	wp_enqueue_style( 'bigbluebox-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bigbluebox-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css' );

	// Google Fonts
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700,800|Open+Sans:400,700&display=swap', false );

	// wp_enqueue_script( 'bigbluebox-navigation', get_template_directory_uri() . '/js/vendor/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'bigbluebox-skip-link-focus-fix', get_template_directory_uri() . '/js/vendor/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bigbluebox-vendorjs', get_template_directory_uri() . '/js/vendors.min.js', array(), 'null', true );
	wp_enqueue_script( 'bigbluebox-customjs', get_template_directory_uri() . '/js/custom.min.js', array(), 'null', true );
	wp_enqueue_script( 'bigbluebox-swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), 'null', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigbluebox_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Captivate ACF fields setup
require get_template_directory() . '/inc/acf-fields.php';

// Captivate API Tools (admin menu + sync UI)
require get_template_directory() . '/inc/api-shutdown.php';

// Captivate external audio helpers
require get_template_directory() . '/inc/captivate-external-audio.php';

// Captivate sync tool (batch matching and updating episodes)
require get_template_directory() . '/inc/sync-captivate-episodes.php';