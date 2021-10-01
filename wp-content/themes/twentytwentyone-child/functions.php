<?php

require_once('functions/casinoCustomPostType.php');

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

  wp_enqueue_style( 'child-style', get_stylesheet_uri(), ['twenty-twenty-one-style']);

}


add_action( 'elementor/controls/controls_registered', function() {

	require_once get_stylesheet_directory() . '/custom_controls/post_select.php';
	\Elementor\Plugin::instance()->controls_manager->register_control('wpc-post-select', new \WPC\Post_Select);

});


add_action( 'elementor/widgets/widgets_registered', function() {

	require_once get_stylesheet_directory() . '/custom_components/single_post.php';
	\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \WPC\Single_Post() );

} );


add_action('wp_ajax_get_post_types', function() {
   
	$posts = get_post_types();

    $response = [];
    foreach(array_values($posts) as $index => $post){
        $response[] = [
            "id" => $post,
			      "text" => $post,
        ];
    }

    wp_send_json($response);

});