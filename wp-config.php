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
define('DB_NAME', 'eroof');

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
define('AUTH_KEY',         'R7tM-WPv K%}uC5d=XW!:pyjS}},,a_3VI~C5d:@dJ3w:uiURWZiSc4cw=:1Ze8k');
define('SECURE_AUTH_KEY',  ')%!S7wZgS:?J<iEf|iikx%)9 P-]+R#C>|YaI5;H03 @a]_dt#r%^_lh)GUEGBG6');
define('LOGGED_IN_KEY',    'cj6{PaGDot=f 4)Kwy9l(V/m}7&It`q^uF>hx*hkv8Yd4 !-?o.;Oj:.yDEBU~%-');
define('NONCE_KEY',        'XaKdLp~OPi+eeC=NkeO^KQIk^J]W^SUj!tar@;YB_0cO8:0}u,[=|?V4@ubet.2$');
define('AUTH_SALT',        'W?*~mk;=k>7F1}4 U,!RI/FE239Cx:Tr4 56?[kSFv>Hj#yTQ20M(7k-?B&%+Zu1');
define('SECURE_AUTH_SALT', '{DhU]$_xwi;:$?:@0]u(UR[,CN_0x*dgB:9_Bn;?FE86kv%YS(V=o63QHsb#!}l)');
define('LOGGED_IN_SALT',   'IjKwNLb=%/0<$w!=hu$r;SrXSa8v9=>^:oX!Wc4}`urqHZ9qVjV5F+J_NFLK)o?t');
define('NONCE_SALT',       'n)5ei*3i~xh{IjNU-Mh|!7nP[bG=V0[g*lW6hdG#;jo}K9[9tb2fQ _KWox@8Ioz');

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

