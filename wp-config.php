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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woordpress' );

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
define( 'AUTH_KEY',         'gh<a4a7PF}(y`Ys>u$~*3G8Luet[*>7ZL=jOnLTl!&RP<UNZp_AW=0MhW9Qm1q>P' );
define( 'SECURE_AUTH_KEY',  'eV?EylTUhxYGJ-dx]Nm^$YE4gP~i(^m;!%>[|hE|-.(NZE*Cv~F5Gls/QEM%PZwu' );
define( 'LOGGED_IN_KEY',    '&.W07#RU#ZSky-Qoz7KzOI?ZV)8UAa#w+_`L:@F|Q@?U;~^glQ^%!)C`1b^]E,37' );
define( 'NONCE_KEY',        'MI7{C@m sV_DEl68O@Cw1,HDkV4^b@Oj9K4Gi#fgE*9F7f1v,2r5p%=Mf]ViC!5k' );
define( 'AUTH_SALT',        'eg$`pt7IL-]PGIDhc+<jbriNIk`f[,b`2oIwb{+X!#%#;RqY}2wkJ|^[OR|Mnp78' );
define( 'SECURE_AUTH_SALT', 'w[Ho|hZX^}0f7Cac7,nvNew5pDAh:2Z$2-#9vo0$cn+dKxn3>hxW+iOw:2ZllZ6U' );
define( 'LOGGED_IN_SALT',   '@?FBeBU>RAKMn4{3e2^zf]R=w%#9um^L!;J*|upkonIKe,o~:C;b5!b}tFu5-Y@#' );
define( 'NONCE_SALT',       'naGC7!%kC=p3J&A1*tM@Z)^FQOqSp~W^/7M;~pn/iS6uE6./<oQEyB?#KY[u:)MC' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
