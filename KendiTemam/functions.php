<?php

function load_stylesheets()
{
    wp_register_style("bootstrap", 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css',array(),false,"all");
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('googleapis','https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext',false,"all");
    wp_enqueue_style('googleapis');
    wp_enqueue_style('bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',false,"all");
    wp_enqueue_style('bootstrapcdn');
    wp_enqueue_style('bootstrapcdn2','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',false,"all");
    wp_enqueue_style('bootstrapcdn2');


    wp_register_style('googleapis2','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',false,"all");
    wp_enqueue_style('googleapis2');
    wp_enqueue_style( 'ft_style', get_stylesheet_uri());



      wp_enqueue_script('bootstrap1',get_template_directory_uri(). '/js/bootstrap1.js',array(),'1.0.0'.true);
        wp_enqueue_script('s',get_template_directory_uri(). '/js/s.js',array(),'1.0.0'.true);

}
add_action('wp_enqueue_scripts','load_stylesheets');
function jquery() {
    echo  '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery-3.2.1.min.js"></script>';
}
add_action('wp_head','jquery');


/* acf */
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/acf/';
    return $path;
}


add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/acf/';
    return $dir;

}

//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/acf/acf.php' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Site Ayarlari',
        'menu_title'	=> 'Site Ayarlari',
        'menu_slug' 	=> 'site-ayarlari',
        'capability'	=> 'manage_options',
        'redirect'		=> false
    ));


    acf_add_options_page(array(
        'page_title' 	=> 'Ana Sayfa Ayarlari',
        'menu_title'	=> 'Ana Sayfa Ayarlari',
        'menu_slug' 	=> 'anasayfa-ayarlari',
        'parent_slug'	=> 'site-ayarlari',
        'capability'	=> 'manage_options',
        'redirect'		=> false
    ));
    acf_add_options_page(array(
        'page_title' 	=> 'Footer Ayarlari',
        'menu_title'	=> 'Footer Ayarlari',
        'menu_slug' 	=> 'footer-ayarlari',
        'parent_slug'	=> 'site-ayarlari',
        'capability'	=> 'manage_options',
        'redirect'		=> false
    ));
    acf_add_options_page(array(
        'page_title' 	=> 'News Ayarlari',
        'menu_title'	=> 'News Ayarlari',
        'menu_slug' 	=> 'news-ayarlari',
        'parent_slug'	=> 'site-ayarlari',
        'capability'	=> 'manage_options',
        'redirect'		=> false
    ));


}

?>
