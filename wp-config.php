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
define( 'DB_NAME', 'dbe613050' );

/** MySQL database username */
define( 'DB_USER', 'e613050' );

/** MySQL database password */
define( 'DB_PASSWORD', '94447' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         '^TOZtmAB#[6[:^*)OF|KS/1>#7ivFXI@t9;E(5A|At>uNEs]H>l$Ir5`!vNCJpy5' );
define( 'SECURE_AUTH_KEY',  '@f_]$!C2, )^}_tSOCFVG-y#2bi9?Er%|bP+]!}(Kfj=i(W:PZW{p%KdXoTQC(=u' );
define( 'LOGGED_IN_KEY',    '*(k*+?^@Hs@ S0HTV<GX-!jC;=P0%6[Y}L|?b$w&6~JeX#V}]l8G%a{0(?;;f xo' );
define( 'NONCE_KEY',        'c oW6xFD0 9n,8?f9n_jPLR5;/!Mo>9Uza/B!Xk+uhUT7*J@d=YU3-e+d~/QQO83' );
define( 'AUTH_SALT',        'L9<`+-B@-;`P`fc?vnfuwF!}->H.[ZP:^n-kBc}dbzI089<&}?;7|9v5`5A_#7ea' );
define( 'SECURE_AUTH_SALT', '}s1B!]hu!jx7[___CzvVVrB%2CF;;QqAO_UT BE!F;-L1e0Jt|a]S&V;2KxosYX.' );
define( 'LOGGED_IN_SALT',   'LrnG$8Z|e80yJ:3/vxtU;K zQ_4&KXH3F`@&93#hWuw~3(o2-U5%I.AH`0o5DgD_' );
define( 'NONCE_SALT',       'CIExSA)yQ$!d0`1$u;!!6dezd)N ^Ky+F$g&>eg*2p^GnY/ ,EZq^[ZzpXQjgR/S' );

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

