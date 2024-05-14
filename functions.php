<?php
function site_files() {
	wp_enqueue_script('main_scripts', get_theme_file_uri('/assets/js/header.js'));
	wp_enqueue_script('font-awesome', ('https://kit.fontawesome.com/574fabade3.js'));
	wp_enqueue_style('open-sans', ('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap'));
    wp_enqueue_style('main_styles', get_theme_file_uri('/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'site_files', 999);

// Creating a custom menu
function custom_new_menu()
{
	register_nav_menu('headerMainMenu', ('Header Main Menu'));
	register_nav_menu('footerMainMenu', ('Footer Main Menu'));
}
add_action('init', 'custom_new_menu');

add_filter('show_admin_bar', '__return_false');
?>
