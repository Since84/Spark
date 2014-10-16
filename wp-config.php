<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'spark');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'galaxy1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2YeaKio.3jl=jMD`?&l`4H5z3YrD_q/4%l9QQgL|ncZJXX=Ny@D(4Mc B{Baa%+~');
define('SECURE_AUTH_KEY',  'mo(5`V.+L0p1F=I%Yy|EH&a: Dn|H 9&up(R.*=+DtOY4xx5/Tki%{2>Z!n+d`Ko');
define('LOGGED_IN_KEY',    'wP_f2Ll%3D/4+k.2/xL`XJiVXimI7 0z,@Uz4 tKv|Da={QN<3};fKs-a*6_6sAD');
define('NONCE_KEY',        '(>yz+7!6S|FZl7T<{GP%ox :9`q2MX|sg5A?`sA_IcegPtd4BR9C{4MoHwA*h1+i');
define('AUTH_SALT',        'K>#%}79mf$l@u+poHvW40L^h4(e6A,{/0(8VU]`8~7pfbZM:5#}G>$;-U9hFWhJD');
define('SECURE_AUTH_SALT', ']Ez:7y-WjhyXJkvMBE-MA-|Vfkp!E88]|,>9FIB>,=y#7s/VRx6N)~Gbayf+ P<[');
define('LOGGED_IN_SALT',   '+>ybd2 U& u&0CT0u@QCm+%8-6G6d:wgO1W;]r;_}-l[1&*D`a;C=B<;<hpwB I#');
define('NONCE_SALT',       'sfwlbYW4-]#fwE38(nm7LUBJPT]D%ny#5g!hZrN1Ap)}|vb+aslU%ZQ{iAd;4A/^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
