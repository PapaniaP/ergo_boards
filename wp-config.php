<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zonkii_dk_db' );

/** Database username */
define( 'DB_USER', 'zonkii_dk' );

/** Database password */
define( 'DB_PASSWORD', 'kmBDwGhryazxf6Eb3edR' );

/** Database hostname */
define( 'DB_HOST', 'mysql57.unoeuro.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '$${?XX&2vy7{/RUFA>W?4,3n,r|$/:@.)4CRkA@Z@1@Q?(m[=!gIKP$_gwIED%)j' );
define( 'SECURE_AUTH_KEY',   'sjuMJqGR/>0]k@Y9%r1nSRS<Q{2ZE(@KsY|G}VG>BX6?G^?G`w4%Nd|t-;,cRM5+' );
define( 'LOGGED_IN_KEY',     ',xeYa{9?t&%):n:*9F@/vy<56,YyaLh] O$&GmSmW Fqc|xUdigZGGGZGLXTK!Q}' );
define( 'NONCE_KEY',         'l1Y2$]O&0Xa0=5dgQ5WE9L^dY$[eR9V:X^~KrTBeMJ;l^X3y`N((xYapKSJvT)6,' );
define( 'AUTH_SALT',         'u>GWxHP$put~eysp6nn@sx ;ft}QeJTbR|y0Ar}~3ShPe5zzU%Vs7^_j|dY9jPU>' );
define( 'SECURE_AUTH_SALT',  '0wc9<m#5`Reu^GUlT$@h{jBnDfyAbupt0ce9Qi6C14JY:5oRI~CU+W7Scmum%s>2' );
define( 'LOGGED_IN_SALT',    'WI{kRNZ,rPjPn p]L`6y0Q{AO#&?%jf_Dp#ju=^nX)sf7;7=&Sl}MQ{Qn=>$Y`8C' );
define( 'NONCE_SALT',        '2l;|H]p*1zJOG/XhgD#J8j)kmSQEL&};%f)wo*7#%=<^e2=srV?cXJ,<;%`Y0om)' );
define( 'WP_CACHE_KEY_SALT', 'XspMFhCm/ymUp!kvBJyH^bQKM @QsF|ib0pwUW`(S=8#kEc%>=Q:vc0v`p@Y9NaI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clkd5259aa021_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
