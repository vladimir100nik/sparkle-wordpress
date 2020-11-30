<?
    add_action('wp_enqueue_scripts', 'piere_styles');

    function piere_styles(){
        wp_enqueue_script('jquery');
        wp_enqueue_style('piere_style', get_stylesheet_uri() );
        //wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css');
        wp_enqueue_script('piere_scripts', get_template_directory_uri() . '/assets/js/sparkle.js', array('jquery'), null, true);
      
     };

?>
