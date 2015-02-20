<?php

function ggf_enqueue() {
		wp_enqueue_script( 'spark_child_site', ''.get_stylesheet_directory_uri()."/script/site.js", array('jquery','site') );
		wp_enqueue_style( 'ggf_css', get_stylesheet_directory_uri()."/style.css", array("spark_css"));
	}

	add_action('wp_enqueue_scripts', 'ggf_enqueue');