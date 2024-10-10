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
define( 'DB_NAME', 'WS314664_wp_yzec0' );

/** Database username */
define( 'DB_USER', 'WS314_wp_z1kcs' );

/** Database password */
define( 'DB_PASSWORD', '*k_B_eo9*ECZ*12a' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'D7_bk;BV&X-+dhW[D#3|+Y]x2X9(h85F4q29[)]Wo!I(z;F63+3~#p84nmcq6c!0');
define('SECURE_AUTH_KEY', 'GQoy56gQn(hC@75N:DyJ_)-deO01MRNhP99-/1d0/;E|J68r[:7Q21Myr[64PRT7');
define('LOGGED_IN_KEY', ')4N(:Z3S2uE18%7J%4%@KU7d_24[Wpw)u&F0Z5_ab7O7P#b@pj!4n8Tc+7s+l_T6');
define('NONCE_KEY', 'Gy!LTR]gzf@+A~V(H&|%H70wBwUb+4Ujv(xy!w|A%;kUnJ*eGX4R6IxI@gd!7%|/');
define('AUTH_SALT', 'WqMx93/MCD_x9@];1|kI-6z6pLx9R%rKL&)+B94j8P!a)6:GN+&P332xT+~b)5zR');
define('SECURE_AUTH_SALT', '!7l|~a&bz4**%F[N1YjTvSFHExdg)cn_hiNj|DEk5WQ(u7U0)G@h9P9QC%4TBU7)');
define('LOGGED_IN_SALT', 'kv[@b40K7b5%C)D62g1e|U83qWkpYdq*21_1V-9Z3e83k0l|!Hpm6c_Nm_QZxs*o');
define('NONCE_SALT', '039[;f60p2D63OlB/[WHYip0(%m!_oT2v7Yc+uFe(|H~3X0]KoR#[2nS5vZ]0VcU');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'j7LZi_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';