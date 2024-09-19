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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yT7wzp4N(~^HE:z=yG2rhG[8UVQg@J4J=v1mDmz%M+LD!=[DOz{ZI/e[p8,BVOS=' );
define( 'SECURE_AUTH_KEY',  'F-mg^^osHn`uP{Yn!73<BHa%,=%*rrI<pWty{<_V2ni*Zw?%x?%xJbr),jWAB0;=' );
define( 'LOGGED_IN_KEY',    'mtJGSKSUkm++a07!o#DN3K3Fgmm6U0*bVzAI_&wirSKr7:<o$D22xcFB,Vq%yqW$' );
define( 'NONCE_KEY',        ';Scqnu+,TJ_A_0}8|NEay[3c|=/fd5cc#~n!4u&aXh zO;$_lxnj uvyN1Z[5)8b' );
define( 'AUTH_SALT',        'gieKxw@25h(Zd7#(0]|J~r?B-w3kpjrBXy)}b(hZ:C`yFZ{g *MR#1(018z|wb|:' );
define( 'SECURE_AUTH_SALT', '92~xf1){QbujqT]jFw>CXVR!jPsB mw{PZDzrp%@~f@pA8wZ(@xf[J]~HVbBkyk&' );
define( 'LOGGED_IN_SALT',   '&IPKm{6u5ydmPoZQ=^F.J3F(^6m8=n{zaMbX.u7!,IJ0`cFN16m-7lR;T0B9oYRH' );
define( 'NONCE_SALT',       'a#n$~ZnRU{ySE()pCK@VsRsd)b&jiE0j_!|hi]# _6.IdzB*oAN+j8fq(U8&_5t#' );

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
