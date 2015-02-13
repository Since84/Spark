<?php

/*
 *	Enqueue all Scripts for AG
 */

	function tap_enqueue() {
		wp_enqueue_script( 'spark_child_site', ''.get_stylesheet_directory_uri()."/script/site.js", array('jquery','site') );
		wp_enqueue_style( 'tap_css', get_stylesheet_directory_uri()."/style.css", array('spark_css') );
	}

	add_action('wp_enqueue_scripts', 'tap_enqueue');

	if ( strpos($_SERVER['HTTP_HOST'], 'host') )
		add_filter("stylesheet_uri", "terence_stylesheet_uri");

	/** This changes the stylesheet to style.php instead of style.css */
	function terence_stylesheet_uri(){
	$stylesheet_dir_uri = get_stylesheet_directory_uri();
	$stylesheet_uri = "/wp/Spark15/Site/".$stylesheet_dir_uri;
	return $stylesheet_uri;
	}



	//Course Post Type

	add_action('init','create_post_type' );
	function create_post_type(){
		register_post_type('course_page',
			array(
				'labels' => array(
					'name'=>__('Courses'),
					'singular_name' =>__('Course')
					),
				'public'=> true,
				'has_archive'=> true,
				)
		);
		}




