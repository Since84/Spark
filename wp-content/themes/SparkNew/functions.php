<?php
function newspark_enqueue() {
		wp_enqueue_style( 'browser', get_stylesheet_directory_uri()."/component/browser/stylesheets/browser.css" );
		wp_enqueue_style( 'newspark_css', get_stylesheet_directory_uri()."/style.css", array("spark_css"));

		wp_enqueue_script( 'underscore', get_template_directory_uri()."/script/external/underscore-min.js" );
		wp_enqueue_script( 'backbone', get_template_directory_uri()."/script/external/backbone-min.js" );
		// wp_enqueue_script( 'imagesloaded', get_template_directory_uri()."/script/external/imagesloaded-master/imagesloaded.pkgd.min.js" );
		wp_enqueue_script( 'isotope', get_template_directory_uri()."/script/external/isotope.pkgd.min.js" );
		// wp_enqueue_script( 'browser', get_template_directory_uri()."/component/browser/script/browser.js", array("isotope") );
		wp_enqueue_script( 'newspark_js', get_stylesheet_directory_uri()."/script/site.js", array("site") );
	}

add_action('wp_enqueue_scripts', 'newspark_enqueue');