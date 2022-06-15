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
define( 'DB_NAME', 'b401' );

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
define( 'AUTH_KEY',         '8O2yc4|Ibi(?B`zG<Ci5rhG/HmV!/_&ydbs/O3xm<672I-<*pkm:o@8(U_n)8u^S' );
define( 'SECURE_AUTH_KEY',  '7a4p~d?9=*N`AalH}`VzJJ,W+Ok491NPPs7D0R$HJZSBYClFEMoJXD$te$yCF7E+' );
define( 'LOGGED_IN_KEY',    '!.W`@CdS?3<Fky!]o)]hyVY$:Le7[2Uq|Ke=Jw{PV4BV_i]GNf684*2(QqsjBX_@' );
define( 'NONCE_KEY',        'eBpM/lia)(M6{Bm>k$@%=UE=F^q{`jToU~_y?DC8dr/SR}0+yK2 j<>Ad50|u]Z9' );
define( 'AUTH_SALT',        'TJN_osCxV]?L%@m&z?5OH=pewp6x6:ziSDN9d_h,Z?0L9RQIm%/dU#fK!xd>s#~7' );
define( 'SECURE_AUTH_SALT', 'JT{ry`4IyAjxGMAla/eHW3bNJT=Q|5bPlGq[ 6GU|W/G!S&1_h4W4J7Z,L|a1}g~' );
define( 'LOGGED_IN_SALT',   'u>B=tx!TkaEFl$=q,$xjtN<twG-Pm:fK}mf1uvsAPqoYA t_9&-LPP@Y&K+3@I<V' );
define( 'NONCE_SALT',       ']85Yg_UMHFHpxKyXvi?fb4+&*P35Nr,9,{JMZ6tP5XO@-uZ$e[,]bB2jWro<bGRy' );

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
