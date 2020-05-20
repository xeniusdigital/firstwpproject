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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firstwpproject_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qE,2@ie-*2aU:ZlSD[/s.xrUBKV55it|m9MeD*7R-jVT3(kpjm>s,%P.K`<Yg-wP' );
define( 'SECURE_AUTH_KEY',  '9#V0Z+/;E|U|6;/_07:iXu~%1J&!>LcZ.wM c}I7z}zY-(G3iArkwx}t ,=nZ#eW' );
define( 'LOGGED_IN_KEY',    'Bk../D0M2LN9XtStw!:EdlC>h^thPN=?g_q$ymW~y:(FIVnnm*~napm9c40~3HNB' );
define( 'NONCE_KEY',        'YK=mJAW_tLrzd|9L(:ggoqrqBmaKq[8]%w(m^QXO&D8Nm77%=+Mi2og0Jalm~6LY' );
define( 'AUTH_SALT',        'cqG&o3Cm;9V-nIN=.4^_rin|]@wWR)R]XWb2Bo!n`#%HjhejaVa.Of1-L+J=TKl ' );
define( 'SECURE_AUTH_SALT', 'j.H2yXB%Q{~B@,5X_XSQAj:7?[62!#u5&WNi8[Bu:q. AB:]j|*3_A`Lbswwi}<;' );
define( 'LOGGED_IN_SALT',   'UOeLE!G_22p:oA7h(Fd7e;*kQMp5C4:10co yq16Xdd$G<Mi(+cRQ+ :L$sJ(HKD' );
define( 'NONCE_SALT',       'VKlV2kMe2#8qj_%_zN19sU,-!<qiavJ}>{7*>Gh0[Ss>u[6ni?F@.z!,LxSgtins' );

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
