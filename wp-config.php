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
define( 'DB_NAME', 'themewdp' );

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
define( 'AUTH_KEY',         'Ed 5OAu7zSX=3@*%7O!(v(`MhWN59yll3GZl%O;Dw=5o8{@NJ.};rN`s[x)eRtOF' );
define( 'SECURE_AUTH_KEY',  'Q]g92n):`(Wo*i{IGg-d>)!fV?2i6z|IVSULmkw9YXCXHzes#NN7@>Ce825<s7PN' );
define( 'LOGGED_IN_KEY',    '[4ex{d&{crB.SVY0otsJ;lxudpo,/$;6c[_y+g8K#@v]/3YA>=0pbNZBiinUUsYG' );
define( 'NONCE_KEY',        '`K(c.X`mFhW7^DK8m#*Z=RSbeW1_(E T1qv-vOSY<tFJWz%c=^R8AJh xSV$/7cj' );
define( 'AUTH_SALT',        '$*PlYz7<tVSEA65Zi++[uEGx_+dh&k1Y|A_Z?iOK6|:J{c=*GFFwU~[_-/ .<i% ' );
define( 'SECURE_AUTH_SALT', 'k|&S r`%}L]UkLnDTW%zuZjW<QK5&EP2VC`J}n#9np=f2?hZ6Uy9(W{fQa*o8FbL' );
define( 'LOGGED_IN_SALT',   'A/-8pE-dzZe|R8V#p_0(79s(7@mG$)TAU&Hkdb^Z0/mkq?j#]+U{jhb pT^~$Hj}' );
define( 'NONCE_SALT',       '3?s+iK3`9tqDQEBZru0_wBt.)clI68ss(IL+@m?f,|L.Ll){i/1~*MuGH=D*?`2O' );

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
