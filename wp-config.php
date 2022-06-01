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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4|A~;2<m*9r.!Ser~dA|w!t_g$v^J&b]I9](D]WpVvH3J92k~.@5F[o6BiS5T|L4' );
define( 'SECURE_AUTH_KEY',  'cb]ReS85<LFY(WPhS]Ev6n`2(~xd?xMnN.]Y@e[_M2Ex}AK;?f:M?*$=w;HF#$48' );
define( 'LOGGED_IN_KEY',    '6OD<Mr8yZ1Tz;9.XrGN`AVDW&gNPMg<eJ~a%VgXE`^$N0#`lpIX4~jj<Y|KNs6=~' );
define( 'NONCE_KEY',        'L[?[vD$f (~X{Tk9H#rNqIDPfq~gNbwjdb0)An8m}NPWT..iX5d]$CP~uLJ$ABo8' );
define( 'AUTH_SALT',        'WBFJxJB9|77lc@6D`c-&_7ry|gxpbo.hL{HIN{0UK}?E``f}$%7|U 4*>OC4F}PJ' );
define( 'SECURE_AUTH_SALT', '1W8b!6B{@f2#ZQ~/=Go]RIO*azSy5w{Zy~7-{F#9z{z-r)VI{nfre?i*;r.!chI/' );
define( 'LOGGED_IN_SALT',   'G75Su<]*x|6nK@2v#P5T8hu^l~se;aiLMe_(ZsF&9{2E%3zoc)UOQnk2UK`b&+?~' );
define( 'NONCE_SALT',       'bS/:3$|F~{BX7>6lo)lB,kO^!PcM![!kw80vnH/#+KU0}U:Q@uz1:Ahs#BL=fuxB' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
