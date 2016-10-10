<?php
/**
 * Woo E-commerce functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Woo_E-commerce
 */

if ( ! function_exists( 'woo_e_commerce_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function woo_e_commerce_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Woo E-commerce, use a find and replace
	 * to change 'woo-e-commerce' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'woo-e-commerce', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable WooCommerce to use this theme
	add_theme_support("woocommerce");

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
		'primary' => esc_html__( 'Primary', 'woo-e-commerce' ),
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
	add_theme_support( 'custom-background', apply_filters( 'woo_e_commerce_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'woo_e_commerce_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woo_e_commerce_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woo_e_commerce_content_width', 640 );
}
add_action( 'after_setup_theme', 'woo_e_commerce_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woo_e_commerce_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'woo-e-commerce' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'woo-e-commerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="cate">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'woo_e_commerce_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function woo_e_commerce_scripts() {
	wp_enqueue_style( 'woo-e-commerce-style', get_stylesheet_uri() );

	wp_enqueue_script( 'woo-e-commerce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'woo-e-commerce-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woo_e_commerce_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
 * Redesign the breadcrump
 */

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
	return array(
		'delimiter'   => ' &#47; ',
		'wrap_before' => '<div class="breadcrumbs" itemprop="breadcrumb"><div class="container"><ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">',
		'wrap_after'  => '</div></ol></div><script>$(".breadcrumbs ol li").first().prepend("<span class=\"glyphicon glyphicon-home\"></span>").end().last().addClass("active")</script>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
		'delimiter'	  => ''
	);
}

/*
 * Move the breadcrumbs outside the wrapper
 */

//Reposition WooCommerce breadcrumb 
function woocommerce_remove_breadcrumb(){
	remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}

add_action('woocommerce_before_main_content', 'woocommerce_remove_breadcrumb');

function woocommerce_custom_breadcrumb(){
	woocommerce_breadcrumb();
}

add_action( 'woo_custom_breadcrumb', 'woocommerce_custom_breadcrumb' );

/*
 * Removing ordering sys
 */
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

/*
 * Removing result count
 */
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

/*
 * Redesign the title
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

/* Fix WooCommerce Loop Title */
if (  ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
	function woocommerce_template_loop_product_title() {
		echo '<h3 class="name product-title"><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h3>';
	}
}

/*
 * change ordering
 */

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 9);

/*
 * Removing taps at single product
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

/*
 * Removing up sells section
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}

add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
	if (is_user_logged_in() && $args->theme_location == 'primary') {
		$items .= '<li><a href="'. site_url('/my-account') .'">My Account</a></li>';
	}
	elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
		$items .= '<li><a href="'. site_url('/my-account') .'">Sign In</a></li>';
	}
	return $items;
}