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
define( 'DB_NAME', 'Liquormax_db' );

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
define( 'AUTH_KEY',         'g0WGVsM*)H@pKc<=E$}&i+.I-z7,NRcp%nOL[oW%o>qMiVI!IqG4A`z,8%<BMseM' );
define( 'SECURE_AUTH_KEY',  'Ns.Qr$TdP8TBJj]%]j(CeNw>,FqOzRCA_j>HQ;5#S5jg`2GM,t<@qb7e2!^YLw0!' );
define( 'LOGGED_IN_KEY',    '~BMM~;Uldw;Ae>^<05s~J0{o&(X#2@c9.g,_12h~tbu$1xSVpuok}+/~jSO5HCB}' );
define( 'NONCE_KEY',        '5czp]=1(-L4,>~^A3M0:.g)xx<Z_33MnP<6|3t{YQQ/=J66EW4^PXN$vSwNy$#*[' );
define( 'AUTH_SALT',        '=,!F=R0p#><1o (z@K%0I<MjS+#=U4qS1osQIWmnl@=w@m0~j2Bgm-TC58P#8f0W' );
define( 'SECURE_AUTH_SALT', '.LAd<y)[0P~M<5,uPJpa%Xy{%?%J7/:*,}hr sxI0$Foq5,)Z}*r5]L0bFV439xO' );
define( 'LOGGED_IN_SALT',   '[W@Xvt)/5p:kMeo8u=75&UDCOgC!]%b7(hC!#-B5^vTWq1R#|rRDBtI3 bgsP>8X' );
define( 'NONCE_SALT',       '|nT,`#DF@kd_h6#:#o=&h7p1d}P#vWmJWNNL)}enPgw=L!ppRI$|9SW]@u<.#C!m' );

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
