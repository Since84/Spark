<?php

class SparkTheme {
	
	function __construct() {

		//Add Actions
		add_action('init', array($this, 'initAction'));
		add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
	}

	/** FUNCTION initAction
	  * applies actions to be run at init
	**/
	function initAction(){
		// Register Post Types ( custom, nav, sidebars, etc.)
		require_once(get_template_directory().'/functions/nav.php');
		require_once(get_template_directory().'/functions/sidebars.php');
		require_once(get_template_directory().'/functions/post_types.php');

		// Theme Support
		add_theme_support( 'custom-header' );
	}

	/** FUNCTION adminInitAction
	  * applies actions to be run at admin init
	**/
	function adminInitAction(){

	}

	/** FUNCTION sparkEnqueueScripts
	  * applies actions to be run at admin init
	**/
	function enqueueScripts(){
		require_once(get_template_directory().'/functions/enqueue.php');
	}


}
