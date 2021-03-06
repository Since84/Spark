<?php
function ggf_enqueue() {
		wp_enqueue_script( 'file-download', get_stylesheet_directory_uri().'/script/jquery.fileDownload.js', array('jquery') );
		wp_enqueue_script( 'smooth-scroll', ''.get_stylesheet_directory_uri()."/script/smooth-scroll/jquery.smooth-scroll.min.js", array('jquery'));
		wp_enqueue_script( 'spark_child_site', ''.get_stylesheet_directory_uri()."/script/site.js", array('jquery','site', 'smooth-scroll') );
		wp_enqueue_style( 'ggf_css', get_stylesheet_directory_uri()."/style.css", array("spark_css"));
	}

add_action('wp_enqueue_scripts', 'ggf_enqueue');