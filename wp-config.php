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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'LZH!DxYnzzqIg[(mwR]W-/ccO&(yKVl419*b.D2C2(zG1_PN|AIZS@S$PJJ40)0n');
define('SECURE_AUTH_KEY',  'Hq:}OjW;JrIxNODj:aBMI1%fj}vj~UP59IpHF@YB&.&|CzI3<{Se:H*P8Dq4paQ0');
define('LOGGED_IN_KEY',    'S%1UFAmtC)59N>#KYD+/]fUD_3b{ne6lRf!GXY,h3uyxWBW%?97pg4sQ28)%IvCu');
define('NONCE_KEY',        'F# Kx231Wbri^ZS?e79554,M&vSrDu_ZBKw?B.Ey:I;nXd5My~7d`BhGT[K^H}^T');
define('AUTH_SALT',        'JDIJNHX7QvC9^%2qZB;7Js%g;D&3!{rN^C&eL&FU7o,T%e$fj#|%MJ}hktytgLk|');
define('SECURE_AUTH_SALT', 'e+NZF3[f>8W1nv,(8D+47ol>,;tF%kCC3|^9~4reKKRlHcZW=Z&c:/.GD15j2b$I');
define('LOGGED_IN_SALT',   'B[r?a>d_W+CuF-:zJCWgB@?{En407&.]II-L#)l{lkX.,tp0P50n5r{k*6H=p|L;');
define('NONCE_SALT',       '|bJg,vsU f4GuHSg*e]O]|(34;T#rr1|2*KVMigb,J~5%8DhJ[nx4Qf}BI2_2)<#');

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
