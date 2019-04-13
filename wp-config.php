<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'raeboss' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b&.)3:_H4HjR-[WF4C9u#}E;YxJ8*o<Ezk)x3IItO}vp>H_>XP8^-{;2mmtd Hqc');
define( 'SECURE_AUTH_KEY',  'X75=Uh}-+igC[X*gsn(_-7-p9x<Ws+8s0b<p[@%>M$HO.!?Bi4[}j5$RgP-u@J<,');
define( 'LOGGED_IN_KEY',    '6EE{0:Te#d.Apd0d#Y<<&{S(INWpkSo+*5GMD)fuw)y.G!Y^}`,*%_q7e<DT*xQ3');
define( 'NONCE_KEY',        'j}r|M|#E-<B!-1U_?x6gTQrCGr-{<_HLUOAiI<g!o+U-67g,j>Mp:3A CEl>/a{-');
define( 'AUTH_SALT',        'I42QQXhDPj}|7QgEusU`(97$w{/.Dmkn^^zc7mX#W}2D48F qx+-VhI[7ary[<+l');
define( 'SECURE_AUTH_SALT', '~S|1/6(6OBr %o[![]na0U30zp@HkHiW3bJu2-(u)<@j),^6F:[YRb!rhl+M}BN2');
define( 'LOGGED_IN_SALT',   'W7)vhd}|cq}2%5a-ol1=WIgtr7rW/0C|qfiw!G&1t>^66gy8WRTm<A59$8TcW[u1');
define( 'NONCE_SALT',       'y:Im3O#n{j*lC1|SI7<X4W&aKB2HEj #yBUvAq<U8d^7*cnG>}W?[G/YiP+LiVb=');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', FALSE );
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
