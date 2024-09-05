<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_brief' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '6GDD(yl;u^7[gBbnw-yZ*K`qRc52`|lMuHcAPrPef#I?02xP!s-&1vZ$6jQ )kc^' );
define( 'SECURE_AUTH_KEY',  'x+B-I{{#3vB|>dmDG/G=Xci5&9BiT#<h$<m$lj^, o/ U]v.Sc8#Ny-q;qLCu@~m' );
define( 'LOGGED_IN_KEY',    '&}mjZ`%ZVY<we[u.)/(5@L]hAkca3^:9>Kc*xKUpP><CgqW3i!exQC]/n6A^;|E7' );
define( 'NONCE_KEY',        ')}nSwk{U:}}VEM_zd?b3u^#}EuVnvmNzo4TJe*at95dE.WE 5nY?=WmCmayC-8k#' );
define( 'AUTH_SALT',        'gXt?j)Phl7HA<t3mOA57G_XO(t2`/fgI0ByjhQN?0r/~++O#`v|nY(k0w21:>NQ|' );
define( 'SECURE_AUTH_SALT', ':+aZn}f$ pGX/tCgNbScmyPi)Y.s`daG0vN.MGnBC_^?+vE|!Q %TH(5~k+0phiy' );
define( 'LOGGED_IN_SALT',   '=/Xp357FA0vTgKW+%4u;-:h&k$%059M.PAE)=:y79Z1L&X;Ce>[{->$D~3ZUi3q&' );
define( 'NONCE_SALT',       'kb(~3|nix5(P%ZwMxe4rMPT:KMh|GGF=H[oB=Z`PqTYKv$@-!e% }a~?h)#Iu_`f' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
