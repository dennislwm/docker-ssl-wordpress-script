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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


define('FS_METHOD', 'direct');

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F8wDN!8+d8Wn' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!XtAeOWd&x7T7P=4P6!-RO~`x#|f%W#W$-|v l|JNv_:qs7LV]UejK5_s9qU_>OZ' );
define( 'SECURE_AUTH_KEY',   '0uRZe8;ew#Y3 [&nHm@!b.dyKcgz7zfY:*nXiuZma!L&N~QNm{C;j`M]`f$FTi`$' );
define( 'LOGGED_IN_KEY',     '6f:/Tbww(ISA<;6.:Qm2HYvET5^s)i83DwYrl 1WVQ-a6,/wcBtCG6%Ji[Ah,@+V' );
define( 'NONCE_KEY',         '!6>W:z%cTg]|WhF[?P5)PK~A{qmi~lE`wdl3PJYA0:WlQQ:g}G4]`2aBzu&6Cftq' );
define( 'AUTH_SALT',         'UN%w0&hxaedfV2FUmH]?:12OK:nw4.]zq%lnmuv#i$+U&d?-]tesvJAM%`|>3~9J' );
define( 'SECURE_AUTH_SALT',  'XL;OJapI|(&$UI_* nEFinDga;)EA=DnoGYp?ytyrd a%WWW9{i4AoH@:~s3nXXY' );
define( 'LOGGED_IN_SALT',    'kZMz)73`a=i,s&ow553K$Tf59i)RF{U,y|~fc;u>N]]h JUJ;pBV~aj|Uo@A-R+w' );
define( 'NONCE_SALT',        '21S}iu%=iLzKga9r4?4S-1Zz[BJO{rgtW%ss B &Zn1>$x,*_LsZH[q}:iL.DdQ1' );
define( 'WP_CACHE_KEY_SALT', '_mC:/f,[rdFT%P75@PTKQ-R1iloY`=T2omg)Hg|UiRxPpeMTA::()O<%A-6OL$m-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
