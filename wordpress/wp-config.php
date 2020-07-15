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
define( 'DB_NAME', 'newDatabase' );

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
define( 'AUTH_KEY',         'n9s3sm;S IshO$Zri[?&?~@]DVD@50jRo#CNzn9;;&[Wy[4i&yLs-ImKt<R$J5&(' );
define( 'SECURE_AUTH_KEY',  ',N;V_Le#{8Y0w?:ar)o=rXOXSKXUb|@&;t=(NKf>3~P]W)TyB**#vJ&~:(vC1Fyj' );
define( 'LOGGED_IN_KEY',    '`,d(>:L63%m:ZF_vQ.G9 zV}aw+v/Jm6>}rKP!gSQ^iJhecV9w7b@BuhqAVu_y$b' );
define( 'NONCE_KEY',        '7qbe52>K*C4<tFKG2986YsOO~5=,Q.Y`_;Qq=6ZyI[=vrBP4|7Z}`_4YaMRu?9gR' );
define( 'AUTH_SALT',        '1@/~#`XJ-bTX}OXJshRCWi04bdAt>mgL2:.%~lGM7@Y,MS4ip^^jC}pZbsd?FNu:' );
define( 'SECURE_AUTH_SALT', 'vnUQ=Gn#TYWZlll@_nji0am2z)}S<EV)6c7$,f8TKg#RPb15K9OGu;,9#x??`!bg' );
define( 'LOGGED_IN_SALT',   'XAmAo55S{;@yK&@BlB, v</Z;o%nAQ19UnoGFA.&E|U`<!vf(_!xokO`6?P_>7]r' );
define( 'NONCE_SALT',       '/>naa/h0A.6dgXeg(6uz7zXI(7dOh>v@,I:J8?7e4I47u{`G5J}/rh,I56qW[}a^' );

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
