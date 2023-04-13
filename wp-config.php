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
define( 'AUTH_KEY',         'AXHwR>$B7SS4c?b.V42n>N2NBiUQqvV_l]OuBKYU-@D7Iy-q(}l/2T)5?khPEs?*' );
define( 'SECURE_AUTH_KEY',  '=4Q*rEB]d[+4C3W{VwUeob?hDMEL3FL3^%TSq;bJ{;,}!9,f(>.mBk<N0~Hf5~~X' );
define( 'LOGGED_IN_KEY',    'O%22&)k!hHatP!GEKG:0=D?V5xy{/.er$%HO4;8,h6,1ikR`9C$j~%R|~/Ts4,7h' );
define( 'NONCE_KEY',        'P`ujp2I.)}/y/[U>-Qbn:7J~Yu>U`*VH:Ygt=;hf)hFcd45&!A*}%@k]~EJyau$M' );
define( 'AUTH_SALT',        '{LE6NasV1[51fee-:Yn;.tGa3Z2so/L5|#nXv LAI5W]GxD(^YxKGoDG$agKcl*2' );
define( 'SECURE_AUTH_SALT', '>r[QBR~tcme1#&Txg>.pcN)BD8AL2d7MFB6WSvvyPk?%o#U_zdFidT_?ZEg7L#SF' );
define( 'LOGGED_IN_SALT',   '~rV2dfb}yv^/1zCI%7C{DyTs}jhBPc#@P~Sv#k^H_4jdZ2!FOx<$5b2]|d7]A/@i' );
define( 'NONCE_SALT',       'UR;;ARDya2=0nWx=bCFqpws7~dqWKAEb0<FN @B/i<%:).IimSVt^3Z`lznp2c8r' );

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
