<?php
/* Enqueue scripts and styles. */
function enqueue_styles() {
    wp_enqueue_style( 'alleksytheme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function register_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js');
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'register_jquery');

if ( ! function_exists( 'example_setup' ) ) :
    /* Sets up theme defaults and registers support for various WordPress features. */
    function alleksytheme_theme_setup() {

        // языковая поддержка
        load_theme_textdomain( 'alleksytheme', get_template_directory() . '/languages' );
        // фиды для rss-подписки
        add_theme_support( 'automatic-feed-links' );
        // добавление миниатюры поста
        add_theme_support( 'post-thumbnails' );
        // html5 форма поиска, форма и список комментариев
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list',
        ) );
        // какие форматы постов будут поддерживаться
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'status',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'alleksytheme_theme_setup' );

/* Menus */
register_nav_menus(array(
    'main_menu' => __('Footer Main Menu')
));

/* Register widget area */
function alleksytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'alleksytheme' ),
        'id'            => 'right-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'alleksytheme' ),
        'before_widget' => '<div class="widget">',
        'before_title'  => '<span class="widget-header">',
        'after_title'   => '</span>',
        'after_widget'  => '</div>',
    ) );
}
add_action( 'widgets_init', 'alleksytheme_widgets_init' );

/* Remove information about version of wordpress */
remove_action('wp_head', 'wp_generator');

/* Hide admin bar */
add_filter('show_admin_bar', '__return_false');

/* Excerpt properties */
function custom_excerpt_length( $length ) {
    return 250;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>