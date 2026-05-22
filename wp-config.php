<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'K9lsSeOFvUrgBpYnV16t6qGdm6mMUXCLjSa8gXEVT4MIQSNx7SsqNk6jRrXTJUHu');
//END Really Simple Security key
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coeducadamente' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@P 7$)pJ{)WR`S7FDKJ%(vy^fB~<C;L{bOp7}eh;@ 0A+$SF;q6]Yv4PJ~z@2Ob&' );
define( 'SECURE_AUTH_KEY',  ']Q<5/^OD~J.R$rCy|diRFliiWvxLA}xHkv^|7c=~0t_ jX1x{~3n,vh5UR`@l&h#' );
define( 'LOGGED_IN_KEY',    '#Iw7dKQ#nj)||=lJq@]<SG4bb__p^{uSg/6n=$d2D,<yS1FP)q5].~Z gk4fd+7{' );
define( 'NONCE_KEY',        '7t#WE75q]WpY+9&#?ar^_RZ![!|t$RS8J[uQ5~n1=/T)_[Au?CPc6E=!s*__RAJN' );
define( 'AUTH_SALT',        'l2>,Dol4fO,j{doGSj|s)S$@^Up0UIR  n|wUJJ>_=]$S5d-`rtWrMr7U0Kc}n8-' );
define( 'SECURE_AUTH_SALT', 'OfL9oEuC%hB|5+=[%j[1k~{&@0Jv_%^Ki@y*k#^A#RrG21ytVtC?HY:?uMI RE[X' );
define( 'LOGGED_IN_SALT',   'A=9A%js;N4+Nfw-8+nE:iT>?[iFL[-TyFGZ%kvz}lBrEpJI?siWRBuq74+g+uNET' );
define( 'NONCE_SALT',       'MR:8a}cMuY~UPjKseP5jq?Z*at.WA#!|,`~<KeH@=2Tqs$`-`EYx#2 #0kl>g|^{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
