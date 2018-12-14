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
define('DB_NAME', 'truheadz_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yoGBM,Z_YQ{Cx@1X?`MtO|+kAYO]dH|Q9ASF_ct.z/29(mmKfNpdA^vO1k4g}eB#');
define('SECURE_AUTH_KEY',  'C/<*wuC0sQH>==)0>y,dvj2zn7:+p% aX8Y_U~^WX-nHZWYt->!ZNo{G]^8jonGd');
define('LOGGED_IN_KEY',    '*E8Up1l<#0XWKZ~uMR(3^K3.lq7;785|F~NOw&rj:hdN563BN}z(NqXcBh NJu/]');
define('NONCE_KEY',        '~cYqTK&Wb./eJzvnB/QROZSkp*ICo6oj0; devGN+;KV$$*hOa>Zf#=oW)0,<0_x');
define('AUTH_SALT',        'au7ud/9_1#j/oF(R9cPR~%30)Lm:|/#}@H7CF*F[barP-wM4$s4{p%FC4NHqSa,W');
define('SECURE_AUTH_SALT', 'n&2rX%]S_P20$6AbsaueK/LhP?6FdzzzDZx6o{ABVBKL|%.IL9#V 9Cquw0b`f~&');
define('LOGGED_IN_SALT',   'tpl^^Tt6gci|F7I`>v6by`9x_)Rx6: *kaJTQX?Hd{f!wO,4SA:x_alvD{&5KFPi');
define('NONCE_SALT',       '%FGOk5^1C,]/7E!<*WED2(9KP_U!hL/AgRezkx,z]]@TI)|{mk.&!kdA(uzn|-DJ');

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
