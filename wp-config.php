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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwork' );

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
define( 'AUTH_KEY',         '3x.[%JlsoVuAK5E%e[L#NDIAUti`Lf~kM-h?N:aW6{z4zV;NE>*?J2+,V9KT7*zj' );
define( 'SECURE_AUTH_KEY',  'kR0%t.ua]B$KVfJuV|/_|q/HC}w]epU../U[ Hn.^!?cc7%ReyiJZzqN8Q;W~{)O' );
define( 'LOGGED_IN_KEY',    ':h_OPIg~fuP;rz/sQ4jV/Z,SIg2:L$Pm&PC~tjs+C_-j8#a>!xg]E0.@f63L`2y)' );
define( 'NONCE_KEY',        'Wl 1kQ =xPy,|gd]Lss`_}WFr5[*fLyX3KjLPl@dL|`!U=a?g}Y0,v<k:4NVJju5' );
define( 'AUTH_SALT',        'e?>~G9N<^;{|?V+ SnOVa6ZqN?%gR)={s++C0Zhy|JD{cEEskRr/g:l8{k.&b,JI' );
define( 'SECURE_AUTH_SALT', ':q-]yGC4O^}i_AC3[5+dD=ZW~*)SZ:ei2EC]-|z.AhUBIDGw=hxrH]fy:=ypp:3+' );
define( 'LOGGED_IN_SALT',   'uvJ}:41*AI,c@b0^USUmCL]>9VDS>,=XJA)d0KH;^f2Wy^L?NI;S(9+G`ZTVs8h/' );
define( 'NONCE_SALT',       'C[5ny,y6vz~m}C%qR)_AzAq1_D;Te>o%7W<tDV4 N#Yq#qCP del1;5AxW)oCNV;' );

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
