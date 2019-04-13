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
define( 'AUTH_KEY',         '=@Uv#=eU@LKM-[[6TcW(sf(#LVn[Y95+)#Hl*QNl$>+_tX&+PQB@Mw>W]3XNKsaI' );
define( 'SECURE_AUTH_KEY',  'pjGw;tnH?36zF6~x=.:L7IN ){z|AO|+/ws4vd_#p@Gy`>8?<E<]Z:d]2c}+a<cX' );
define( 'LOGGED_IN_KEY',    'ry`IJwmMNDIm(J&7r34<,dPl?3QkvK8FMWhL?dlfSG}hWxjl`N:;Dd$/dn7>fq%b' );
define( 'NONCE_KEY',        'W#s094H`x99/jQ8(|amm Lz7eWrYFI63VCr0y7c8Ovlq& |JdybT|=JcLO<Uay=n' );
define( 'AUTH_SALT',        'HI.&3,=Fgp K[8*&zwqj4c.ic/}i=h{e36+|^UW1))!!?l]%>R#y,IdwpanN@7K.' );
define( 'SECURE_AUTH_SALT', 'p`3F+H)wEBXNrZFULB19topO6 ,pu6CFqT S3JeOX`6g/y#!?%B<Rx[Am>1[+2+E' );
define( 'LOGGED_IN_SALT',   'pNHyNR5,(<[f!QfG~Id`%xjn fRPgo9vjlzJ6KYYkmt(nXNfkIX=B8U?eX#oRm-[' );
define( 'NONCE_SALT',       'Sa,!sPVekv@&mz4yv;ohNqGEYlSlIwbG$ag)}zFp<6t4iGtOF*A//9Rkl#2udi0:' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
