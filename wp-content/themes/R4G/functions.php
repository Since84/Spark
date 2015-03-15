<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css' );

    wp_enqueue_script( 'spark_child_site', get_stylesheet_directory_uri()."/script/site.js", array('jquery', 'site') );
}
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//   register_post_type( 'donation_lightbox',
//     array(
//       'labels' => array(
//         'name' => __( 'lightbox' ),
//         'singular_name' => __( 'lightboxes' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//     )
//   );
// }
