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
define( 'DB_NAME', 'portfoliomam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'vc{CEH0dzB/B=[mghC$-!D6bQ/Liii};w,<5-4e`Bak^zT1eRy3T]y47/ZV8+/j7' );
define( 'SECURE_AUTH_KEY',  'RY,aA-gKX)`GyZGwXSC.9*83M:d^`vCYy@tn~=;eM+>N)$t{9G,]N6dZRkg?V,CI' );
define( 'LOGGED_IN_KEY',    '9+Wx{u{Qf(B,;/uL9#4Zkt$N~/Pi8$Fu}Du.;E7mrai/=YbcW@he1})f!K2r<l#*' );
define( 'NONCE_KEY',        '!q;rp3}VG3Z.S{K0+2ct@y:@mA8X!M58Zsipw.1XJ/tL=QO|HFJlocrc6**cu^2S' );
define( 'AUTH_SALT',        'X*TdV}(1KPlM_{5buvPma4F-zOX>PRST,,s%zTU-dQcQcra^u$AFpJ4cOUZP6n@n' );
define( 'SECURE_AUTH_SALT', '^obqGW1,FM( Ws;6%Q[e_q v))SlXYf6@!>p1#(:lgcG;^#0b!@1I$M7:Izd$&>@' );
define( 'LOGGED_IN_SALT',   'nnjMqa][1Ao3aNCwc8&%#doA}z3F~{bCGJ$M9Cp{?-S!8rbEPgHlbE|0zfhriRO@' );
define( 'NONCE_SALT',       '}_QOTRf/#<!D)|PfkI@|aC?HFgP 9FVcv}o*f7v <z;b$c*X{(bfi{$wx 09lotg' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
