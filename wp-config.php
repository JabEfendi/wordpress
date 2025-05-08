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
define( 'AUTH_KEY',         'Tg[[G+.``S/JlrsN5D*eH:!<mC![p5g;`W&mhX?|YWKL!2f~R?*C+Xn+%O~LB(H[' );
define( 'SECURE_AUTH_KEY',  '3{&s{qF7 Gh:6/f&^tiL.0qH2|+QP~Z1%q0tlOosubPxc;_F BdlP_wHm^grwIA{' );
define( 'LOGGED_IN_KEY',    '_-rH&wcYmZs1;zBSxv#Z8$iG!8 ;?p%1Jm6d&MO0?dj :]DlJo$j|26F+=E_-31#' );
define( 'NONCE_KEY',        'nfG=1,`9IWfcP:CN3;ss!]aK]}piX/h{E|$VA3L6QqT/B>]%dvF*`-^&jAlc[r0W' );
define( 'AUTH_SALT',        '/;HU(U<|w;1+w-G7KTT|r>$zp}y%8e7&99I=MziQ8nN%7zo@+a[4|ra=xc2f%/l0' );
define( 'SECURE_AUTH_SALT', 'lk`CRgf(66Z&x)8.t5vI1)k!)u#?[0TpG:mS`$Ad?rb0@_-w]53(aC7!HwwGYdV}' );
define( 'LOGGED_IN_SALT',   ']XC d8NHM^6{S(kEy|+&zRs[@~+tQSp.V_B6kT > %{Mje11>ET:=[WTdC!g+hu2' );
define( 'NONCE_SALT',       '/4W4%pwOECa^qL{(,!1<DY2BEmw2=w*vZ>$@$~L$^LT8BDK.b&{i;<bloXws2(sK' );

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
