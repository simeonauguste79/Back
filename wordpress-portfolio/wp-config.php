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
define( 'AUTH_KEY',         'wORQ!m5]mcMyO>$Y1-cQk8@VEU^JdJUkY8^Y,F_P:yNh0Dr_j/6IU|VgsAXx#uo]' );
define( 'SECURE_AUTH_KEY',  'Hn`B3k0B~?+By_{,NjS.J+E-&kKt.vQ,Cu FFGDTE$fJX`7BZ$s2c,bh3suuGqJc' );
define( 'LOGGED_IN_KEY',    '*c*+0T|@oW8n5&phI`R.j._cLwPrDX{I%xRj2R=Y (RBVAEc6keLr}Q5+0,fFtlo' );
define( 'NONCE_KEY',        '|1y_Kaxf^?]wc4H*Vl;V&X3n$5!7?#{c(H?z,-N&!sN($xrbMux=iq#gBAN ]}nr' );
define( 'AUTH_SALT',        ')lKIA+=vn-GM%$kS[=9^E,WoRDg-va/,:a ZtFn-b(6I%0#PQr[8P68AThb)BL|U' );
define( 'SECURE_AUTH_SALT', '6!C&Tv[ </E*m3@]};bdY6&nj#zi[mJ<Rv5kL}`ON:A)z/8h<|ZTCd0`E@Uy`|9)' );
define( 'LOGGED_IN_SALT',   '{pM@?d)Tb$n^luPaG3n9^0a02<1Ej18ZM5,T0]d_`1]{unyXgQ>Anq,tu8 -Y+rj' );
define( 'NONCE_SALT',       ']RekNW[HnmxO~Gs}/]4[_E4iW5<;OAac)al`ZBC:kK1[i;k/);$wwf1FhYd1s5V?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
