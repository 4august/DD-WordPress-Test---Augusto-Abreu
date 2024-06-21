<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_deer_test' );

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
define( 'AUTH_KEY',         'y/*zVcHW17WFpTNH|uLKJ|y<y0ABd}{8:erMW?E=}>]MeJ=sJjk_]lRP:*Jar|55' );
define( 'SECURE_AUTH_KEY',  ';>h~%)+#r8z,,{%3y(9%a?AW<E|ozI_hizt_aqems6|GjKUk$t.@#QR$]_k^(RCp' );
define( 'LOGGED_IN_KEY',    'hui~R]*79ibnaPhfoLoBjb&FLdpz_8ww/?RA{UJAT;CVEf+,tSgx5<TxSr!]V_e(' );
define( 'NONCE_KEY',        'wc*c|xJv|r>*VA^v%dLZ0:Q*MgPkCb/(#x*io3p]f593=KxR[Y@^Rh@Rmv#|w:gj' );
define( 'AUTH_SALT',        'EmG}`x)WfyV4j:_[5AoO#FvGX2hz!HvoD4~=qm#oi>bN3h;2~n)5sPl!Y 1O)E7o' );
define( 'SECURE_AUTH_SALT', '@o?n<sqt5@_rsPTRXv_AFE)$:mgi*3.{lwZ5[o<tYM%LjWXT 2jc*i#q3JjwIL&x' );
define( 'LOGGED_IN_SALT',   '!Z%#Y_$@k%q[_bDLE(@_KDgN!ZzW>4li3zI6OKk/c4DUH4g@@9^^d.1iiaXaA6rE' );
define( 'NONCE_SALT',       'B59Hr9x{FJ5:S71oiDl4ACHU3T#|zBH?@;G XmK]Vj4]3RRwJS(q3P~P+`kV:2V9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
