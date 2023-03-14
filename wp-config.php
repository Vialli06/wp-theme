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
define( 'DB_NAME', 'wp-db' );

/** Database username */
define( 'DB_USER', 'Vialli' );

/** Database password */
define( 'DB_PASSWORD', 'fbrules06' );

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
define( 'AUTH_KEY',         '4U`(`q{3hA,lX$F}:w,SEnD>A2_EvN:Y$#/Jx>|^cU{G!ig/]h((0;PNO>txB4}u' );
define( 'SECURE_AUTH_KEY',  'EB_!o=RK~y9,9Df%05URIm*.Ri-r)^M2R{N&MSX0]MeQk96M~F7dBo(q@=YgvDw6' );
define( 'LOGGED_IN_KEY',    'Jvf58h;5~o`;jKAPWB[@/4:9,T0~1oZ`!V9a<xHfJ&-w)*XE{.Gtm@8;s#~=g8lH' );
define( 'NONCE_KEY',        '_dUjb&;6A.SdvEz(b:a[p_3If>nG>:%jioy{G32[%?H&_eDh XBexBLwr|sU!w++' );
define( 'AUTH_SALT',        'v!TO0i(Kh~~P*Dapn<Ly)lu7zjje<).T%6psW^ei(+0TfOVvKKW4#]H|WaW#8+7c' );
define( 'SECURE_AUTH_SALT', 'nhIzD:&I9B5=_%6OG!]s,%S`I!Sxeu]:_Gt#fJK[;h^@-dU%6v{xvl<[?.e<90-k' );
define( 'LOGGED_IN_SALT',   'bd-UPvOy}{+9qmDuWA2R4M*ga6eSb_kK}.&y;3jJl/ i=8+Zk4~DimH+]>{eM007' );
define( 'NONCE_SALT',       'U]CHfc=~OP,T6L<(3nT9wf%7?VXI%8DeY^edF]#O1fM1a*51k@I&Bx@(]WM7>rY.' );

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
