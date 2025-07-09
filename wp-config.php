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
define( 'DB_NAME', 'saeed' );

/** Database username */
define( 'DB_USER', 'saeed' );

/** Database password */
define( 'DB_PASSWORD', 'saeed' );

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
define( 'AUTH_KEY',         'AevGbV&XLS,4]#1#Cg2y*SG+DX8{Bm0V)Cl0!T;J2Tq0)=N*&AiwSO}XA,&a3OrV' );
define( 'SECURE_AUTH_KEY',  'sE5l-$I#^>KjIo:llDH*`Ne8<lbT<,JY|RnL-`Fy4={~om:|1bZv` ry/d;@Q1;q' );
define( 'LOGGED_IN_KEY',    'an3vfhu?4of32[n0.oeDy(^@idc+F1e5(F#ChpAV3bwF2@4C 55 x=i<-fahqIO>' );
define( 'NONCE_KEY',        '@@]H?xD&;JUM1-U/s)@js|~rNqR>M<Sw6/q6L6;)YT@H,tI6i[?e{IQ_FKmx.]+:' );
define( 'AUTH_SALT',        'R{.+A.:XezPDj2DwM/yu#8Yku]@m`{/{~?Jb-6RzpJT6btl:Kbrn~]Kl9+DN7*NU' );
define( 'SECURE_AUTH_SALT', '6u`q/6DZ`XmtRU>:h>rl~g|oeuc5ky7Y(jXSZ^<mE>-tBB};D3z?7)$qYc.vJ&p5' );
define( 'LOGGED_IN_SALT',   'b0[}s3PGsPaql:@p]<$PX(v,3%I?zJx#$4i{Qli2I%ZN*R&5IZah:cm169OsFPhK' );
define( 'NONCE_SALT',       '~#4dmL(?Y&}3Gx+goLs0?_Zfa]kSrWMv/l)>>_)o<#_;/9fMkMWjS|)bs?]r5SM|' );

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
