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
define('AUTH_KEY',         '(o({2Pkn9J lhp0~bR|M>zf*_wmZ+yx`Ee)L|?K4d`_qVoY2!rkrm$;-<BK1x<DP');
define('SECURE_AUTH_KEY',  '*KcOua:[HSm0~]|5o~&{+>%4|8+L:,i)|ezvKMk]*2DjC$rN!H&CdjW<o/c?J+2?');
define('LOGGED_IN_KEY',    'Gp8{~}78c{TTSY-W#znX(lrx&z2c?==XU>Z<ycf>`eO;9M?|`N%f9Kp~p7PkYa#(');
define('NONCE_KEY',        '-wd2]Mp%-T3ur4S_{]SYAY)Zz>{1z^{>|VDl(G`M-iSsH_tz6A#!|^c@-4Ad5aKV');
define('AUTH_SALT',        ')SP=wu5LidVVQX+}AmtU(M^Po>_9!@Fk6Fv}MGA=2R!nkgfSFGOghB-&yQtKKb-S');
define('SECURE_AUTH_SALT', '3}-fw%|`5BxD-[aWFUN]f3%Mu4)g<nf]oRwQE=;T_r}gza`G2ol#VmbMh^/Ev-=v');
define('LOGGED_IN_SALT',   '<R%-hY29|(ZO6O~m+2cM|%Nk|P;P;v~C/__Ho?usDnhHz1:`?0!rUn|t(DvA*JY?');
define('NONCE_SALT',       '%@7,V{^20UK21+Ik-]3):Rw(~M9e3bV37KUcxE)1y!-9yU+S]BZ[;PAy?8WSkrCv');

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
