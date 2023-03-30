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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'oVo!u)]m?Qe9>^}p+PYG>v<H#tuf*mHLdiSoNgV T;dOB#g.b<098m8Z^[mjau@[' );
define( 'SECURE_AUTH_KEY',  ' <b|`bXGh 3%TZT?,QT:iL^< X2p#(5.56SpV3]q{8^3~D[$%ysyy$d1xWW]s/,d' );
define( 'LOGGED_IN_KEY',    'j%}dVO$s^uL]veam{ffYmQVp(sn[P[ iQ+pmsINKLz*0) aSyR w*@#Og]f,e$uu' );
define( 'NONCE_KEY',        '@iLw87fl r5O2l,QwQ>t@@0QI#[Kv`g6Q-}JnAjBW($Eu(%/)Q0v4o<>6P~B&bo1' );
define( 'AUTH_SALT',        'rLm#6YXV<zu2FTAE()G[cloPbC)v9F;%_9yQsp@Uc05BW`VhyOgoyg?X+-yIY/br' );
define( 'SECURE_AUTH_SALT', '/>~^1Qxk6tXdGT>zRaBp)`$NG|IH!=DR6.R({t}VCHqD[GC[++t!:A;U{E[4#KMe' );
define( 'LOGGED_IN_SALT',   'iQiBHq?M5I6({rwh {}&4GTwL>e{V=][qoG~z[JXah9NKZX]ME{9uWHA@F|%qx]h' );
define( 'NONCE_SALT',       '2xSk]?#}7Id<F ^YF<wGit^lv]68-DiRMAbwlLt!!rE0qUOv~>EM:TMfG=Oe=Am_' );

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
