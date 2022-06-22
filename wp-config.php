<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ajk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Cerp@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kVe^/llSPlx=I]JfxVO[cGe#[O-hTlj!8oM|Zv7HOY(5}M?S{V7i5E4zY5,uzNeC' );
define( 'SECURE_AUTH_KEY',  '_c5b% hoWLaIK?|z-k%emWQLNn/YNV^2xqS>ue%I)B$Q#T:4SUVRLbfEigxM,_Q?' );
define( 'LOGGED_IN_KEY',    '#2]16chhEZ,k:~zn($N;AM[.WujCZ0&h%,euQ61l7;1$i_ywCm<%/?A,hih mzL8' );
define( 'NONCE_KEY',        'UA89;|.{1ewn,U yiu|vo~#0T&!$vTf__!#LEy]rtZ%&A&d+:~/R@3IOxHAzS|Go' );
define( 'AUTH_SALT',        'NrNn jG8%^,(e#=^aA=k{qr$W,R.&ZZGo(fo;@/EXZpdj1jH3bq,$8Q<4#Un5>lX' );
define( 'SECURE_AUTH_SALT', 'sgfJFv>|Qkr!!A%~P<^:Tj.M@hUYsw9MF_My4Fjkhp**u4&n#<&cazklhKsGMU#X' );
define( 'LOGGED_IN_SALT',   'gM,[xeB%BMCs)_7CN4/-^Izf}W3:yLIAx?4?h*i|On9O%6z9?trKw^~E4cCA,kg=' );
define( 'NONCE_SALT',       'x)/3(#unNn9s<|cZ]jrMa3I@@U9,A}sghZ??<Ff7p#96L&M6DO_d`g|V-n=d]z~C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
