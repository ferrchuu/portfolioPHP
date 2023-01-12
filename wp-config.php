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
define( 'DB_NAME', 'fernando_db' );

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
define( 'AUTH_KEY',         'up$c.3~TeoGFEOZo;%U~YeD0XrUi5Wfz|Llbhfv!-IN~ 7YpB,J?%cRiZ#DTyf!#' );
define( 'SECURE_AUTH_KEY',  'RRzc!d|+!p41V/Wg}oci&hN`OuIeh[X:)i_RjHdq2,#v2H<y+tmQt]s5qYI5,M:f' );
define( 'LOGGED_IN_KEY',    'pS@)KsF~2/RpdE[RAb!+UJZ<=GzBR(]7?xr]qgx^B]@yj;,{gwSra9~0[#EFK9bK' );
define( 'NONCE_KEY',        'ff,%{Q/<tsp%Dda=U/m6~9}c|zfrrTtNGm]F;7H0qU^z*bJ!0Q/]5*$!?x&o%=6z' );
define( 'AUTH_SALT',        'K~bz$ Y|s<WgH5PST-+Cac#j8ptoP/z<&rbO3~73+Okx4Q{V;in7IU<b!/U!LTjy' );
define( 'SECURE_AUTH_SALT', '*^VA>l*sP,Pi^2B>+$Ekq?QOOt) W=c~]Ql)4aFIbA1Q)Y1pHQuJy[k`O&4RDkgA' );
define( 'LOGGED_IN_SALT',   'Wx9@}Sn@#EW65GcgunFl8IJgu(}%[:f^CU.9jEoT8?*K>e6~oNW]tDS;.iG#A+ht' );
define( 'NONCE_SALT',       'n1XXPMQTdrga*G?bDyX>L(w{LLfn+U;]/A[gr0J#]v&:9Rcx%w&I,t<?~nF~yp9|' );

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
