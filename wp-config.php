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
define( 'DB_NAME', 'Project' );

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
define( 'AUTH_KEY',         '-#L#c!:+M*.8UDT]T]}<un#s@C[kLU_a.Od/MSK6fYQ7Mp&G#/l3Xo}9( 7-/UHE' );
define( 'SECURE_AUTH_KEY',  '<FmO_tI@(N{OpdJ A3{qrNo2TWukgEbE>XVGAtn*FL{+vt}L$p%<]DaQhn$fm[>~' );
define( 'LOGGED_IN_KEY',    '~?&N1awj!:RC?ku2mJLz(9*K,xp8]]dtmPR;{lMFL|>r/H07g*aX 3,m4hDvMR9v' );
define( 'NONCE_KEY',        ';z;Q[#9R5fI8K?s9-m&3li#GNbS$Pm.Y5817[/^e5j6Z#N&xv<Qrxe*hVaWdtHfQ' );
define( 'AUTH_SALT',        '8<UOs%fIOrt:Y!#ap3ApSCcnRm/m24ykIcM<sO|n8f&tdgaN!fjdP*:G9`H*u8x9' );
define( 'SECURE_AUTH_SALT', '#QS?o`?}bk|&7b[ti;/JdR[|{#ZZ7iIC}TyY5XTX$F6A28&,$J^S=%NN_~hup^/>' );
define( 'LOGGED_IN_SALT',   'yWH&{.4)O(7N qV:*z,-hfrl3+Ygg:Sqb@UY%!YkWbDF,-emfg]z_<|~l8Hjr0C5' );
define( 'NONCE_SALT',       'W_`KB1zODI#6*:YOSr;O)g` uSYJI0miPT1>u!cY- sic#_qxKkkKZphk)$Ug^.^' );

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
