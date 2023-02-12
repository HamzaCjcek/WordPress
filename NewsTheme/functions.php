<?php
function chlange_setup(){
    register_nav_menu('anamenu',__('Ana Menu','News'));
    register_nav_menu('footer',__('Footer Menu','News'));
}

add_action('after_setup_theme','chlange_setup');
function load_stylesheets()
{

    wp_enqueue_style('bootstrapcdn','https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css',false,"all");
    wp_enqueue_style('bootstrapcdn');

    wp_enqueue_style( 'ft_style', get_stylesheet_uri());



    wp_enqueue_script('iconify',get_template_directory_uri(). '/js/iconify.js',array(),'1.0.0'.true);
      wp_enqueue_script('jquery',get_template_directory_uri(). '/js/jquery.js',array(),'1.0.0'.true);
      wp_enqueue_script('popper',get_template_directory_uri(). '/js/popper.js',array(),'1.0.0'.true);
      wp_enqueue_script('b',get_template_directory_uri(). '/js/b.js',array(),'1.0.0'.true);


}
add_action('wp_enqueue_scripts','load_stylesheets');
function jquery() {
    echo  '<script type="text/javascript" src="'.get_template_directory_uri().'/jquery/jquery-3.3.1.min.js"></script>';
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



}

?>
