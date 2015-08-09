<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         'aY0Tfo%O-svoS*m*{%/v$q?i,|d@Y>{o,/,S]>{;$,<)%Uk5xSu-!(t+K]5[U3@J');
define('SECURE_AUTH_KEY',  'U;V?HjwI/z5V#$a5VBj8Qho |.H%?So?`5-~E&FfQBu}ssiD-U7zcKjFL)?GvR3,');
define('LOGGED_IN_KEY',    'NjENz}LcomO@8csA02-=0ClT)x+c$:YCBg_2P&eN8Z8(F;.KQ]uMR!RdEgS:S/-(');
define('NONCE_KEY',        'Iq4{!8+H>+>JOG.k//w6`2?C^s%$5fK2}}pl#z+a?tAAA#|<e~AqUOSp[OhC4d|C');
define('AUTH_SALT',        '>;zR#nmQi~`E}mgk*8E]:@:j-aCZJx(y+o>(1fN%fT(:CA4/n)J,GNod0xURL!SU');
define('SECURE_AUTH_SALT', 'Df$[U=xO|x/5JlS^$cQ*/Yv6$Z*| `!C[H--C:%BRP UY1|iF17;zW!Sg5`G$kQ`');
define('LOGGED_IN_SALT',   'PPb`|(xm)gk%M +IWB@O|(tyEvwNYSHnc&IKs4jzskWeQ:D*vKgNtZv+tT3y-)eu');
define('NONCE_SALT',       '~mx/9Q M,Gr#cyx-N[<Ce|EQ%zpnF{@#!h=*.`UyJiUrOYxqL=Fi`|-ZY83ppXW2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
