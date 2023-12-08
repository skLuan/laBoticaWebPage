<?php
//require dirname(__FILE__) . '/vendor/autoload.php';
//require dirname(__FILE__) . '/inc/INFO_CONST.php';
//require dirname(__FILE__) . '/inc/replacement_functions/load.php';
//require dirname(__FILE__) . '/inc/post_types.php';

function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    //add_theme_support('woocommerce');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal',
            'footer_menu_one' => 'Menú Footer Uno',
            'footer_menu_two' => 'Menú Footer Dos',
        )
    );

    // ---------------------- Register Styles ----------------------
    //wp_enqueue_style('swiper_styles', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', '', '1.8.1', 'all');

    //wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap', '', '1.0', 'all');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css', 'custom', '1.0', 'all');
    if (!is_admin()) {
        wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/css/style_output.css', ['fonts', 'bt_zoom_feature'], '1.0', 'all');
    }
    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    //wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', '', '1.8.1', 'all');
}
add_action('after_setup_theme', 'init_template');
function RQ_add_sidebar()
{
    register_sidebar(
        array(
            'name' => 'shop',
            'id' => 'shop',
            'description' => 'Widgets Zone',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''
        )
    );
}
// add_action( 'widgets_init', 'RQ_add_sidebar' );
