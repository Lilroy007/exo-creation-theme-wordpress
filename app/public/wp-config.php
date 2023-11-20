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
define( 'AUTH_KEY',          ')h:|36`5N}KVq.%r ,,$m4N#ycf1g77qk %WvCJ:vkzTTF7Oju2{P7(U1ZEo@@TB' );
define( 'SECURE_AUTH_KEY',   ':_b%2u1lb^os&n/>#tF i EvU.D;tb(?J@!azOC1+E68bTIQ:?s4_wN]/QCsTFcN' );
define( 'LOGGED_IN_KEY',     'eO.mpF^]JUXF`a(Gv]t-oHBS#/*aM:9gs`a,>:/_/@~n/8!&;>=t*So_#VXFF#=l' );
define( 'NONCE_KEY',         'y/])-V`1bV~`Lpi8hS*087`~@.-|ri.]!XY*U}19:m# uW8=%tgNTl`f%{T$71,c' );
define( 'AUTH_SALT',         ')aifUJYDTDpRW:4CREVf6omH;<_`>KgkK~QNNv?r}:S$(Kz|Y;NfL{9>CMW!F[E?' );
define( 'SECURE_AUTH_SALT',  '<f8pFsKBXQ+sV8Ump!I%*G|fd>8!B+0X[0w,Kt~E`2p{Wo[SZs4k1!3In>7Va|R ' );
define( 'LOGGED_IN_SALT',    'o>T*6Ot7a;J;_?A8YE@E78gSbVy7KkQ$RRVs:L)<Cb-=R8/{yp=lr>5mZ/|<:1=$' );
define( 'NONCE_SALT',        'esWoC`fSR2){+*G`QKQ<rX3f*fs/VOLj:j[z5HO~5x{Zwdm4f$wtM{2O+?>bBoO7' );
define( 'WP_CACHE_KEY_SALT', 'UY=^7d^,{XqT-{Oy1}}5~Yskwh`iH&G7-zc`vH6t>=[:.y84lvxqQKL]O&+2g[lT' );


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
