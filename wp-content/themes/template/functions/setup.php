<?php 

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 7);

function addJquery() {
  if(!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', false, '3.1.0');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'addJquery');




function load_style(){
  wp_enqueue_style('styles', get_template_directory_uri() . '/build/css/styles.css', array());
  wp_enqueue_script('bodymovin', "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.8/lottie.js", array());
  wp_enqueue_script('my-script', get_template_directory_uri() . '/build/js/app.js', array(), null, true);
  $translation_array = array("templateUrl" => get_stylesheet_directory_uri() );
  wp_localize_script("my-script", "url_object", $translation_array);
  
  

}
add_action('wp_enqueue_scripts','load_style');