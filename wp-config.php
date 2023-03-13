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
define( 'DB_NAME', 'wp43' );

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
define( 'AUTH_KEY',         'vhDmcTd$YR`,(%(C#D7e^0O0H,WK-]]b#,]^>LrgkJs@hOwnxN &nUOpU35xMdwf' );
define( 'SECURE_AUTH_KEY',  '1|WsP)Zd%}<FLSL:%_PzJv&s:(|$XV%rp[$F#.?p`gC/mf*E6VHI.!P[6U0nm?rl' );
define( 'LOGGED_IN_KEY',    '|$amYwVAY+fE)m-<`sSW}{.D^7#3TX/6x6q(G+ $?,V>B|;%{8jcO 26]d}N^+hz' );
define( 'NONCE_KEY',        'sHKE_C+%d%mW9h*DPiP=YU>}msjCqk4xUS@>EMt@@P[ct??:~7$ZDvp>RJ]yAsM$' );
define( 'AUTH_SALT',        'TJ)Qr<C3N!!!V R<TSwS;uYJjf:8<ZQcI^Xo)g9, #Y f{1JnSW.&Om)BU4yvK:v' );
define( 'SECURE_AUTH_SALT', '!E$kU_E.|.w|w]t8xSHRZ/A(y+Vo_(9db9hvn+[k5T5e`!U1Nt>?(B>a@P1hIQ5{' );
define( 'LOGGED_IN_SALT',   '5<xw?LEQ^ATb=F-HAUetYTLE3~JDI>xku^2e~;.9qLC]lhxW,{|F10mRa`L}h$nh' );
define( 'NONCE_SALT',       '&qnyRC_3,0,h3C$& 1{Lq/%Oz~`B_4qp=~0n/^NGSZqLS!JR/wloGjbA4$D[76l$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp43_';

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
