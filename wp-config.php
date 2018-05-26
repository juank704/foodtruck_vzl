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
define('DB_NAME', 'foodtruck_vzl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_3=!Oymrw~_T@W0x)HH?Qs^4R7j{rWK},?G>?|E<T,s$,O*P2w3MucWn~L@a19[Y');
define('SECURE_AUTH_KEY',  '}gO%d0}L:@_Pe+|u21rx)pI<w<IPpn5Z`i`0D{g-RcK$m/]Yft+XB3No.<V$8PK1');
define('LOGGED_IN_KEY',    '?4g7IXE.z-61][P0=yO4T*bQc!p$,d4rlg=okqK7~t2kR0_u USyr]Vx41AsaFT<');
define('NONCE_KEY',        '-Uy2:[@|/iLL4.p[Y$R)% MU5HpC7^<CPJ4m-1+]DWUE==!AZ+S~RfVO{[YcVL0s');
define('AUTH_SALT',        '5H|U#Z`PwbG17nvh^ev(zl%vJk]Z<Ox aG,]HD1`noJYMHA9y*pNz/p}fYr[4sd?');
define('SECURE_AUTH_SALT', '2>{|Vi+=+M{5&Ozzn3h:9Mj;;*VYI@ i!{_qHblHgeS}@_cDKX,lxVJ@_;M?S%Kl');
define('LOGGED_IN_SALT',   'L(}.b,dB][N~;sAUzD;iLH8%7cRIeNL1-P YF3X0Sd$I{#>TF[l&!ucMN+(}3,dW');
define('NONCE_SALT',       '4B,}]U,W:=(}OQg4GW;Qh4JkyBY5I]$,V%[l$ynJT2+>!hiC*Ydyu}3}{W:_*Dk1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
