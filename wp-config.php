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
define('DB_USER', 'joy');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '}i-+DFCxq?Z2jMIB$yPEW)Jkzh(to,Lp-b-HH.O5G%hK/@D@0D&BA-%R{Xr-~.j2');
define('SECURE_AUTH_KEY',  'IilECE&5Nf|[ Z|`8VbqdATS@ZxNtUrer7KSL65jZDc)!Oo/iE?g>7-@Z=06{irL');
define('LOGGED_IN_KEY',    '<9wQphkG `oB)2YaD1)asEX{dS[{-E, q/+``DIbVPyhK+0=E*cD9|$%}WN-j!Wg');
define('NONCE_KEY',        'm.;<HspYO}o*vn+vM%vDRr3a9E|u+In]t? EN|+i,j`4jZM-opt[L9g%)gOjfC|S');
define('AUTH_SALT',        'bN+MP9X7i-12TxfN`EPNG-, >PWy(m{=Yn|d&GO%y-=SQ[ Mce:{XJ]nVhM(QUUR');
define('SECURE_AUTH_SALT', 'zKV-Qji_mVzMJ7(yaHXLcXbR.R#Z9Pljj#s{munxCP!|=cT8=:_8Fb=R9 req>Fi');
define('LOGGED_IN_SALT',   '?_G3U-[x@|mrHmY+a0)L,f ]=*A69:z[w >@K-e94&|V^J(>`80uGgV|+%@h}G|%');
define('NONCE_SALT',       ',9@ljV!$!]7+MwG=qQF{qSX2Bj;~[a1GZGE(QZfzPpPA:E(-{8<!qE-??3c=#RJJ');

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
