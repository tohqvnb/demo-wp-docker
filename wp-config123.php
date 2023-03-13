<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */

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



// define('DB_NAME', 'vnbking_com');
define('DB_NAME', 'vnbking');

/** MySQL database username */
// define('DB_USER', 'vnbking_com');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'gYVqNRO0');
define('DB_PASSWORD', '');

/** MySQL hostname */
// define('DB_HOST', '192.168.2.117');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1!+~[q=(p.+J<4%`hS{zsy]=ds)$}e/C:Yfoim6`lA9KagY(}/+J?%6iBx/Urch%');
define('SECURE_AUTH_KEY',  '}=Xr<Vj8D9Tp;&>y_79J*=;{ VZ2U|TdUm+RJrZtic&s4@Tct_:xG66(zI8vzWGl');
define('LOGGED_IN_KEY',    'd:SI08@mGcfz/B7M,I]$HNnrgxoAO5~7>XCW^k,O{b#4dQ9&u&L`ZNAAE+lTdj@w');
define('NONCE_KEY',        'rJ*`l{x[VieJX:z|%NZXL&[:<.s?S)H}@Vua<Tm0~Ov?)-FOd(wS8s`Ux_+#;wIm');
define('AUTH_SALT',        'Dz>gvgp?c3=N7bKv|a*5=DK$:i^i!&<9T-9NW_#^Y93RF`e1mlH@/G6R-9S%1aSt');
define('SECURE_AUTH_SALT', 'mll{d[>rY vx-p*}BTisYv:,T5+i36)`lR#6;=N=cH@(2u@F0>zjLW0yUTH3pyW ');
define('LOGGED_IN_SALT',   'CGD~8MWc(gCp%1SncJqO/|M#lg[_t9qu$(=H?6Ajp:zzv;x~:}A`IubA1Bk$w!p7');
define('NONCE_SALT',       '|)2|W/nIMUuSkzLoZ|(!*DctVI-y)QiT]N2dW&_^PSXPTaf6o)5eUp;`K+YFhN>)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vietnambookingcom_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
