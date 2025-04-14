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
define( 'DB_NAME', 'adshi5' );

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
define( 'AUTH_KEY',         '+f7Fh^|lkZ-r0t@RkJ8,.JNcR}&n00atS68Dw>Q=MO~B.NUhq_y)?z=nOMBM//`/' );
define( 'SECURE_AUTH_KEY',  '*)iq[! j?$vJQ}NbBE)R_zI>3ZBW[Q8Sd$c=u.q,aB,zu|Ng3w0&t[0`uUI`wx/s' );
define( 'LOGGED_IN_KEY',    'GdS9]rI:K7Py5dr=TO$#F%#jTuh/T<z$+1(7.F;C(Y(i6l(sCNa*baL(g*B?fhOy' );
define( 'NONCE_KEY',        't.KR=k).)WCQcg?hL[]E`sdo3i5)JhLL7mbIW1~VyC/FQ>x^%T#kk,pwAlx?*$s{' );
define( 'AUTH_SALT',        't@h,r734]yPmUV^B!A]4JIus(H<^sEJ0i-QXS9~D7obkBr}!7*W4R>GLp*=I.ZPM' );
define( 'SECURE_AUTH_SALT', 'Kc#@djxpA-6{-pp!RD7ZX^K^x]+js4P)xBW$}>)7|E3:|Z`FrPl!tf$8nTc!PDj^' );
define( 'LOGGED_IN_SALT',   'oN`UY,-xdbo?~EqA{}ClKo6YTrnF{Za  4Nb~.tj]R:]^m4Ev=n:L;mknC.?C:h*' );
define( 'NONCE_SALT',       '@AU|zuu#dIPUv2U8j*/1Dr-,G:z246{}0O7>m2a3R L8V;chMLlg{:woyj^FG>*4' );

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
