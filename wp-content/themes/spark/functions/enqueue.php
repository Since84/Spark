<?php 
	
	/** 
	  * Enqueue Scripts and Styles for Spark
	**/

	//Styles
	wp_enqueue_style( 'sparkcss', get_template_directory_uri() . '/style.css' );

	//Scripts
	wp_enqueue_script( 'underscore', get_template_directory_uri() . '/scripts/include/underscore.js', array('jquery') );
	wp_enqueue_script( 'backbone', get_template_directory_uri() . '/scripts/include/backbone.js', array('underscore') );
	
	wp_enqueue_script( 'application', get_template_directory_uri() . '/scripts/spark.backbone.js', array('backbone') );


?>