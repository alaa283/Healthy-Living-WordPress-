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
define( 'DB_NAME', 'frontend_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U}o0T({^oK4o4|7Ja~O~.o#vDoWOU&1<F4fl6?-:[<v6mCXhKGHq1k~VW$#,lUh>' );
define( 'SECURE_AUTH_KEY',  '4er?|/j|HL-Q^Y`(4iE}s6&FjSR(ha#D2IDde,vfy^]U&Jo_CHch~].+N${TD>$@' );
define( 'LOGGED_IN_KEY',    'N*Rl]c}qP?sBC^}QRq9>V:=P*=V0(<}B3rT_.<OfKP,^jmNy7@kGotD>sjU/@x2W' );
define( 'NONCE_KEY',        'XX{eqd!  x<<HD4,]PqexW}+C*[ Zd5F>J)q}@sNpd-1Q$4?iyRO18p&{K4tROCk' );
define( 'AUTH_SALT',        'oo6*<7k8pazrK(9F)?E=t(7a.(yF&l%=yK`E17NI`-fLOxj1<%X0+]2C,E21&s3~' );
define( 'SECURE_AUTH_SALT', ' Kq(uOchrk,aAUY<ZToRg.Sshe)gRN[ BVv?c7~7X.OYjX*N)ztPm(4>j7B8EYe7' );
define( 'LOGGED_IN_SALT',   '@Oy@Ah9rAf19kXz@G91kCAs1(qCN}eF#FwRr[{-CU/mub9{@{^B>O]+,K5`.2nf+' );
define( 'NONCE_SALT',       'o:qkwv+S#Y=G e-aF.BM<sBlMg%yx27n{#+l#8Iw]`?3.^aXD`Yuq5_U*u=efy<u' );

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
