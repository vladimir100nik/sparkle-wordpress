<?
    add_action('wp_enqueue_scripts', 'piere_styles');

    function piere_styles(){
        wp_enqueue_script('jquery');
        wp_enqueue_style('piere_style', get_stylesheet_uri() );
        //wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css');
        wp_enqueue_script('piere_scripts', get_template_directory_uri() . '/assets/js/sparkle.js', array('jquery'), null, true);
      
     };

     add_theme_support('custom-logo');
     add_theme_support('post-thumbnails');
     add_theme_support('menus');



add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main'){
    $atts['class'] = 'nav-item';

    if ($item->current){
     $atts['class'] .= ' active';
        }
    };
    return $atts;
}


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDszYnXADo49beZSxaUrpg1eMsHluuo3do'; // Ваш ключ Google API

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter( 'wpcf7_validate_configuration', '__return_false' );

?>
