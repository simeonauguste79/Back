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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '$B_J|jXn5iR7eq#0cg/+WK>JM #JEe65cA|umP@H}yH f)DI<Zk9~~c.%_;/h-r-' );
define( 'SECURE_AUTH_KEY',  'caVk01wvDmPT6eS%^QX1&)S4[1a1(&iCDj%asgQKbE@i,&A]7g81S{HdbXpn8#]F' );
define( 'LOGGED_IN_KEY',    'oYWmAU>rLgLb[(dwpygn~=E?)Qs)r^Co#3, +X4N q fanOE&ypSz/ak]<89UmKI' );
define( 'NONCE_KEY',        '&Ib1HVu2g+eiBedP|DQjMamJ90PXdCUYGOT=_BRSj}mOSGGK)+z4Kj@i6I&U_z>x' );
define( 'AUTH_SALT',        'w}<0i%!%%g~$TrfJ?X=XQ=<mfxq1`7U%|LR<9 h06jh1Lhn$ZMz7j6i=0%[WLpWq' );
define( 'SECURE_AUTH_SALT', 'Yr~Iap8CTruddUmiMhE4CH|?Zb/f?g1WD;NZpOX*U`J:?M)DL`mmj%`AEt#ILgsr' );
define( 'LOGGED_IN_SALT',   'v0gm)*Jwdbs1v0v|kD[}ubLLUP,-&OIaw@z3;?(~aA+|G/>g(i|(AQp;oX,9DXp7' );
define( 'NONCE_SALT',       'BNZ}tb<dL571_@oTOc;;/9r(E|4iVrg?X$bDNWYWHW`tHh30-zUwlD|=m=i,lKEj' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
