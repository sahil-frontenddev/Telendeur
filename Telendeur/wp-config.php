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
define( 'DB_NAME', 'Telendeur' );

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
define( 'AUTH_KEY',         'C2SbAHhL:kz^YA|m8d(!>/2Z>?t>Q(?).xbMwxjO3XK$8#HEoAgXV@N=5+;rW/V>' );
define( 'SECURE_AUTH_KEY',  '9]V7ub{eS@%(o~Yx`NWwFg*#eh({7sy7}CZw&}awp3]>07k/.AV.?%OhBU.BpB*i' );
define( 'LOGGED_IN_KEY',    'lEd/!QrDYZ[I#JBI:HkC .2QDZ!bX]9|@Sq8BtxE}Ob:7M$=LT`^4qez>B~YGSiA' );
define( 'NONCE_KEY',        'YG9joecg`zF;Ij$gb]b2:oRxcgf@sYf9WN7l+?DsqY!)CGX[@1pr3N:1=s7Nobcq' );
define( 'AUTH_SALT',        'AAM,6iFum[S1R.}hI1Z{948 &vKqsh3^NyXFD->T1$ %u1r^z*JRX$Y**pKdU7%0' );
define( 'SECURE_AUTH_SALT', 'evs0ng.xL<B@hbkE2 JS{qG|Y*T}qX;_|EZv@3y@)T$HtNChdW9<[(/{TZ(O}74f' );
define( 'LOGGED_IN_SALT',   'O}r!d.yQV[iR#J_N>7S]EsG[AOH-V;%ED.E ?:# 1Z99qxi.uLDN+Y%MXnVj]A(h' );
define( 'NONCE_SALT',       '3J^z<c,j#ikV*0/ceQC9IX~-n@gWoQ2o+`g JJh,=ToXf>Bh/X;JVL/)b({GJa0e' );

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
