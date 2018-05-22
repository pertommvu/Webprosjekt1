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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '7562c37f8cc49aca9dbfff9f6c3d27409a00a41e19a78ca1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X~)/2I36U7o1YBnb]l@OR{3FGrWU*&[uv$lx=G1gJ1T}:#zGpmXdVhgnd$]S0c-d');
define('SECURE_AUTH_KEY',  'mCVys8cnc<@qGu{dXFrW Z7InF  O)w,;q^*hca)oi:E7^F4U^`b jXIME1lvQ& ');
define('LOGGED_IN_KEY',    'wih`5J0l~@<-;JhJn+tD5F]/KSM#q{zyiwKX&sRxv#:l-1/FyerCM-L@n%?3ccmX');
define('NONCE_KEY',        '<nmgApK(-sJ6I 1ntX>Bc/wV-UvXHk.Bm,q:4KNV,!,wRU55em4s/#SM&.tIFW64');
define('AUTH_SALT',        '(me`Lkw9>oTId+CyP:N4=H%= 614)IJCE<:eD.0MDw*1`DV-A|WE)0@]<pkoeL%C');
define('SECURE_AUTH_SALT', 'i,e%>9[rv*J%F[cuQ%%&rRrPw3*D@.RLE_$-?K0{|#*Z3AiJR?fEdYd!F])|Mqh ');
define('LOGGED_IN_SALT',   '16bKcUA%Q(]A@ru)vw9d`|@T|T4@Pc|E>I,J`g,o cGu;R9fI<M~`aEPgs{o}h)g');
define('NONCE_SALT',       '_}[RtDJ|ONc>DU9.Rh!rPXQzxe#!lQoo{gYB0Q>y$>gfnaKDThh:-)xBP/^EFve(');

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
