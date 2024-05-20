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
define('DB_NAME', 'c5reprogensk');

/** MySQL database username */
define('DB_USER', 'c5web');

/** MySQL database password */
define('DB_PASSWORD', 'Unal8090?');

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
define('AUTH_KEY',         'Lo3,=?StqOOr=0-_|OtK?Xe6I<uqrWvk]&n2pe)z7-zf?[M!C]B4/VjXof}~p%[i');
define('SECURE_AUTH_KEY',  'Ix;{dhnr:B3Dm^<Z:6:^9Z@(&B/x--c698B^<*<>m6j2D>r,=`K$x4y(ra>y2d~@');
define('LOGGED_IN_KEY',    'Tk% 94=t*R}QP!lE;%W@K<4k@?E{#&@ jfG;./X8{`Y;J&rTrENP8vG7!Vj3]KCu');
define('NONCE_KEY',        ':MLCW LR~R$?r.,jB_x$`5iD#Rp4 YG.0EcOEcAdAPW{}M?VJsZ&)2Og0;fydB a');
define('AUTH_SALT',        '$7,/=A+-|jlHtA71jdK|:dis96jtJEq [B%4lgxb=C[+^)@-Lsl(R3!d(38jtXw$');
define('SECURE_AUTH_SALT', ' ~n2<}xy6}X0OdL5|@TpKQ^<jmvqS+FC^(@9=ZPu/k%5|fm;Cw?V[g5-?2_i*d95');
define('LOGGED_IN_SALT',   '&I:rMGqF:qBteE i.I`_&}$%*Hods7@S;[:-O^mcQD$&uoB$dN f>  fKDzZb,*+');
define('NONCE_SALT',       'UvX=!rVg@dCsABI#J|5)6`]?yianQqedwNM*zO.[-`yoo5NSm*7tL@*Bxkd-Q(=U');

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
