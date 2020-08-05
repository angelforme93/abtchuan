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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '#t%7xxq7AhG^~7/2L~V6 c(IIj8gn| jR$G&o!adYuZ6`T;D(9j5v7kp *#vBAG/' );
define( 'SECURE_AUTH_KEY',  'GvzhZln74~MfshL+1OF4]w2Ilg5`2wo@fm:MfKFDr8/ST|S4oj5v!9ZGW!<BzHh.' );
define( 'LOGGED_IN_KEY',    'PLPk)eC6{(@F}g:D ]jNTL=zc9me?h*phl*._@D!y>>5R<A2H[nN%YEJt-RB,ake' );
define( 'NONCE_KEY',        't.SO!{409%~UzR. ?@+9<Pcq59(fI:b`=H-l+iwrrSe ol~2Eqv=Ai6G?_]aQ*GR' );
define( 'AUTH_SALT',        'zoa; Kz ?`GhD%dOF{3YmBUs{)fhSNH5|/T$zMx{-*_z=yknX|r~j0ZJHOtQO:;&' );
define( 'SECURE_AUTH_SALT', ';i=fiBMl28zHD@($Twumx k+lo8GN%>w11`QwsT%d)kH!i;p0@$WXz#..{6II.U/' );
define( 'LOGGED_IN_SALT',   'LMsvdfV2v>#[F&[g5p%tO:72u0{oBW5gq@l0Q>Q^il3E,` 4UCv$>=$J>m!p3xME' );
define( 'NONCE_SALT',       'SoRBkJN_CjxkrryC^G#%y*9>f[lbcLsrT+uNIBuX>pa,QeH&x07yV{Qx,Q/ZW.E9' );

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
