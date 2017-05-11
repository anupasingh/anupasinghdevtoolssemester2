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
define('DB_NAME', 'devtoolssemester2');

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
define('AUTH_KEY',         '4#`zas9Bah`]i^Js5.bIZ,DBNbUV|nHiY]?o%v`zmZa/{{Zvm,gr%lB4khhu%kBv');
define('SECURE_AUTH_KEY',  '6htZz)#2>&wB3=)R_cbbGI(brCD7L5=dSPz2BQ[VW#|G.YM;Elkd~8fBNB%6OP!Y');
define('LOGGED_IN_KEY',    '2wO{0cX:f],6VGO* #Pp%AG(x&g^vc|.[3p TKZag^r_8{{_7bgBt4[}Xm/kr?4A');
define('NONCE_KEY',        '),{A=+M#tDx}_dYVq<^httUcX$jZdOF<T^`,nCJ<9j[%a24#lzuS~t>lVzT9NvxL');
define('AUTH_SALT',        '4WGEe0un?#A%lI&F9*v/xSM<5W@_S1>}C[7#l:}:KZqeuL],hTn#~@{|oGfZhUv/');
define('SECURE_AUTH_SALT', 'EgpO~6z0#Rw~W~6:#o)Yz{l$:JrG`**(8=(4@zL|^BF5jE-DPca03LfrrA/*pWks');
define('LOGGED_IN_SALT',   '`MS/3UX6_-s9s TKowb0]ngW!&<A~TkR/I@$H~${n8I%ock<Xz{+HNgp80GB!`tr');
define('NONCE_SALT',       '/inoTLz&,%}6F`f%!h7Fqu*D%BpHaoa_=_6p]7<7B`H50Xd}/HQA6J7^}hYX`4?x');

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
