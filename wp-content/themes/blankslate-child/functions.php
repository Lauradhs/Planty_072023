<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
//var_dump(get_stylesheet_directory_uri()); die;
function montheme_enqueue_styles() {
    wp_enqueue_style( 'montheme-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'montheme_enqueue_styles' );

function register_footer_menu()
{
  register_nav_menu('footer_menu', __('Footer Menu'));
}
add_action('after_setup_theme', 'register_footer_menu');

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args) {
    if ($args->theme_location == 'main-menu') {
        if (current_user_can('administrator')) {
            $admin_link = '<li><a title="Admin" href="'. admin_url() .'">Admin</a></li>';

            $menu_parts = explode('</li>', $items, 3);

            $items = $menu_parts[0] . '</li>' . $admin_link . $menu_parts[1] . '</li>' . $menu_parts[2];
        }
    }
    return $items;
}

// END ENQUEUE PARENT ACTION