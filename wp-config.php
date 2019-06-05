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
define( 'DB_NAME', 'gpri' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<_hqzkeR&>TY~WwTbA=>D!m~p<pf7o|X~l^;Ux3lg*D/0d|np;tkWq7B=l/KPE+H' );
define( 'SECURE_AUTH_KEY',  '-6wKQ_H!Er#6P, YQZ:KBU<kHY6y/DyfJJ.c](Wi4KZ)H_`*A`!m`k?sCprHGU${' );
define( 'LOGGED_IN_KEY',    'zT(~OxKPqQycODw%%Yt23Z#?`=3I$HQ8L$@vPO9O-`<:4k$5J1|i}+F,AH=Rpzfp' );
define( 'NONCE_KEY',        ']6/:s%w*qMJniIHT.Yn=:6:D#`1wHn80qkH~d$pjAO{)H:,&}0Wc}jQiIKn,u-GK' );
define( 'AUTH_SALT',        'oF6{]JNz0+L5(_(bAh(.0]{.+`0-^?HT4?@<p62z/7Ff,Q+V5PBBvK~-MF _PK.V' );
define( 'SECURE_AUTH_SALT', '[-GyG~Ma0SpOR7_sRXl*Gh3Y=a>M7P>$nUT[nyE=u<otBIMy6NUS~i|{5?:?Y#vg' );
define( 'LOGGED_IN_SALT',   '_4W_<`T;uignpl$?O5hVOaQhk>P^L]PX9PtTB&^8fPh0D47d:W5,FHUpZg|]a-;)' );
define( 'NONCE_SALT',       ':0RkymbdRpF2&?@-d{$0Ee}Qf34a&qh0TxvjCw_erSD>qU@~mc<<Yv]T6op|A{b.' );

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
