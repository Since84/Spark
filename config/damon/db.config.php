<?php 
// ** MySQL settings - You can get this info from your web host ** //
	$host = $_SERVER['HTTP_HOST'];

	if ( strpos( $host, 'r4g.local' ) ){

		/** The name of the database for WordPress */
		define('DB_NAME', 'r4g');

		/** MySQL database username */
		define('DB_USER', 'root');

		/** MySQL database password */
		define('DB_PASSWORD', 'galaxy1');

		define( 'SITE_SLUG', 'r4g' );

	} elseif ( strpos( $host, 'ggf.local' ) ){

		/** The name of the database for WordPress */
		define('DB_NAME', 'ggf');

		/** MySQL database username */
		define('DB_USER', 'root');

		/** MySQL database password */
		define('DB_PASSWORD', 'galaxy1');

		define( 'SITE_SLUG', 'r4g' );

	} elseif ( strpos( $host, 'tap.local' ) ){

		/** The name of the database for WordPress */
		define('DB_NAME', 'tap15');

		/** MySQL database username */
		define('DB_USER', 'root');

		/** MySQL database password */
		define('DB_PASSWORD', 'galaxy1');

		define( 'SITE_SLUG', 'tap' );

	}

	
