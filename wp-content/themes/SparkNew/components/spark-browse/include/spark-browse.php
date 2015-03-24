<?php
// Spark Browser
// Version: 1.0
add_action( 'wp_enqueue_scripts', 'spark_browse_enqueue_styles' );
function spark_browse_enqueue_styles() {
	wp_enqueue_style( 'spark-browse-css', get_stylesheet_directory_uri().'/components/spark-browse/style/spark-style.css' );
	wp_enqueue_script( 'spark-browse-js', get_stylesheet_directory_uri().'/components/spark-browse/script/spark-browse.js' );
}
?>