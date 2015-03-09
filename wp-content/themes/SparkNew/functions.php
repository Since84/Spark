<?php
function newspark_enqueue() {
		wp_enqueue_style( 'newspark_css', get_stylesheet_directory_uri()."/style.css", array("spark_css"));
	}

add_action('wp_enqueue_scripts', 'newspark_enqueue');