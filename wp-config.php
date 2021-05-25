<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schlegelj_comschlegelj' );

/** MySQL database username */
define( 'DB_USER', 'schlegelj_comschlegelj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ilovefaketan123' );

/** MySQL hostname */
define( 'DB_HOST', 'schlegelj.com.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4R[2Z>K!r3DuEg.aP] ]Y?5fLaAm`JA|J]?+>#1MY.{Pk0>78=q*yT>cLsA7S:|K' );
define( 'SECURE_AUTH_KEY',  '7b=G(>7+M ,u6KT7F>X-1`^-y*V]kVlM98$HMY[F/kvE6LR7LVHNov8PF:?_9rAr' );
define( 'LOGGED_IN_KEY',    ')WiHl6rt(Ol=jC/>g>*n5j_ZXHXg;AlTC*DrPud_8&1c;7_oUd(1LH3!N%w;pZ:5' );
define( 'NONCE_KEY',        '13T~hSfy;$; <nhdXSs-h~M|5pl8/5]Ah,k{D(C0{d+zK_R^~{2d4_&*?D7C<q5H' );
define( 'AUTH_SALT',        '3zeA0K<qtXfvs_rBfZ{H@>%pVY,#[Y;<f0HOgy<bYJ-gl6.I8Wf-kY6mQqLpH-n%' );
define( 'SECURE_AUTH_SALT', 'c,a2 >SmVQW1DjD.HH_1@4xAph,G=f8*(SrG`-b4~TFPmOGh<s^-hA+0P$3&dBBq' );
define( 'LOGGED_IN_SALT',   'h%|+{D63J~Ih7B`oD}k%m-Uqk@reKefDM}^ABmp88x<i1B`;<P}[=KkLe1s)d+Zl' );
define( 'NONCE_SALT',       'i^+D.6Q^G|vzNuy_Vw+F7NF#XZ(C%*5JS{]L7.|-Lu4U8?FH^G.0ObRrrCAEjv}n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cheeme_2021';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
