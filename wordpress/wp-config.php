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
define( 'DB_NAME', 'next-wp' );

/** Database username */
define( 'DB_USER', 'pepe' );

/** Database password */
define( 'DB_PASSWORD', 'Micasa2010!' );

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
define( 'AUTH_KEY',         '.rN@u.#1emP0RIF6EVk#lhE%nveVI>2OCJ;H.uh_j.&nX8q((yWa?P5bV=*vL3#4' );
define( 'SECURE_AUTH_KEY',  'tIWJomC]HOj 79_4Gz<:j;u{{ITgMg0A3Cixq+AEojT4sCzA`^nPe1/[=/vx6KW*' );
define( 'LOGGED_IN_KEY',    '_,?K+{GcvlTCDY#{7p-Gn~y@q%.jk+I~{C.(LqrHQ<8)3&3v{5h5<Nms*4s%2m:?' );
define( 'NONCE_KEY',        '&TbBUmJ8}s7p*Kqu/S{o~c#h6>@#.N`7l|M) ykSRMu@X>G5#T_WPfv.?h8ST4f3' );
define( 'AUTH_SALT',        'Rfd-e!|.Z9:7$=$w.$NzY$N7^UWVw2,)l5<W+.DuZt=rm~s/<7THz$w5tE%Y=+&j' );
define( 'SECURE_AUTH_SALT', '<q}]74FG;dLv+bq@,%TxO0m[P}Qy9l/mmSh[>+%zjVWQVXrY3>l+E_!Fz~SeV.@A' );
define( 'LOGGED_IN_SALT',   '9XH1Cc+hW/E{@ffpo28prM^urp+A{F?Op0rG7B@Hsp@~kT-jH^FiD>obO:ed;58@' );
define( 'NONCE_SALT',       ']8.p.R0InG/wttck|([z9+Jh7b}O.=,$ICW^BK9Wt-lPP7%I3&.R%-^J~/J)6qV>' );

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
