<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ';8W9,UZ^t3eu`[&3U_ai,GHVYdlSMM{2:t9cTflLH_K-k)ZhMX ]3_opm{Nci<y4' );
define( 'SECURE_AUTH_KEY',   '022}p#6-&6g:X/XR6IYewvO3=tL^q^- xxqVW=%[H)<hajiQ9LeBqr^]k,oz#O(+' );
define( 'LOGGED_IN_KEY',     'sJHT<Unn@L&da@&Zzv:[mf9WPTF73]Wl9WAwYus[gk}LW^][o7S_mHz%m-$p=0Cd' );
define( 'NONCE_KEY',         'z>x:c$73hg6m,D<iTog|a9jyfVjulG[4K!P4rYQ IU4`eNC&Vl]/f}c!OSy0!K o' );
define( 'AUTH_SALT',         '~.^k24 8Ub,bL8/S-17Ua.#I!{a}A5!ts/5dW[~}4$--JHI,sGlM?$:0};1)vqCw' );
define( 'SECURE_AUTH_SALT',  '2%oH$0]~67j4xu=,%h=+X{$N`fZa/o?W9rIy>1IncrkA~!smN$0hwzAarR#;$/1f' );
define( 'LOGGED_IN_SALT',    'mCUSzL`hs5iIQ%B6*?N)!_heKjlt<(4Ooe4=aGi`X^<]~zV(Na+;6 o@=/3w1L1X' );
define( 'NONCE_SALT',        'cY3jO6hi o:z+G.yQH$DZn[=c5er?Ndy@:.TxaxbM<DB>*9gAyPhaE|<3c?Y]X@9' );
define( 'WP_CACHE_KEY_SALT', '9@z8>4{]Hm-m=]lE5|1<2BDT9PC5eEe|oK]pzq^zI3>@ca!*9N6 M[2dW*[f T*$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
