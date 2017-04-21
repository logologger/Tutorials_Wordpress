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
define('DB_NAME', 'wordpress2');

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
define('AUTH_KEY',         '?:HJien;v7vA}RhzvcnEeGgL?l<Vj=,$FIfh<0?W][M`5&BN%USwAF4ic,xA(Cx9');
define('SECURE_AUTH_KEY',  'G,eh?ygEFTfa%d_xF~WZ~KW^Liu@O<d5[r}MS#B*njQ +C@4F_~QpV%(C*cZSg+W');
define('LOGGED_IN_KEY',    '}$SFAIq}U<^[+7XHq*t#_mtoU$/U@Q9^Tc+F ~o3pTO1%!u&2zGPR4rKfr[%MeK5');
define('NONCE_KEY',        '[$/~0J>^O1z+rd8>aVWd0Y1d0Tzn#W}orW[^JGc_xc3R59Q]!q1.S(D>t^@Lh&jI');
define('AUTH_SALT',        '>tZ0+R?f}QH3%-y%NVoBx 7[2/v2|LKv7#sV$mh<{+e?6}WSa+LhTdW=Yix^IG0X');
define('SECURE_AUTH_SALT', 'cR>$9Js.`x7Z#}0Bvi-@HHUI aXD)Y7[P?qJhj;--0?]@o]>XWbu)u u-~^_`4.U');
define('LOGGED_IN_SALT',   'S<tD{d]E4rExOc$RrFiUuu!c;[G)i7svVcoJa=fTSd^=2C;%EF,K.hBwkNuA*??4');
define('NONCE_SALT',       'Z[4t5_CtYtvrTqZ<gZD1{Q PN>&1B&bCYts69n*S|$+|.1(kk>@SX2l@ap5 ?,rU');

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
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');//Done so that FTP Server is not asked

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
