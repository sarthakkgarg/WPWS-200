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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_/n&|sxE{ACZ.N,c/v$?vJsNNhe@Pb)?@0}XpN<R?z_ZbJm jh.Y;p9C.V+on/d.' );
define( 'SECURE_AUTH_KEY',  '+n<$1rr:_<a7S+RNb-$-fv~/B8:euarVI0[8u<#l+kQ3F_1Q`Gf&3O;G~;hstS#.' );
define( 'LOGGED_IN_KEY',    ']*@i<.R} w/D>]rI8N,Sik`~E7+bx`~qO.^6L#?fvQ4kgc)!.d%Ei]fjSU>ub0)%' );
define( 'NONCE_KEY',        '!>#//|D Lv?.Y1KrCt<1*+Cf%<>jGXkjZR:yy`W~?cE}KnDDJEw&sqLva&R].nvE' );
define( 'AUTH_SALT',        '0E=J}JuRHavN$z`F?Zn,$BNfv&kv.tH^d`U>gNn1UU6tl2#Ge~BC^w!JAbBzC581' );
define( 'SECURE_AUTH_SALT', '7v{8Q}d{8~F(sQAR&1D h]yu!Tv&v0&Nd}aW ;1-Qzf+zkpCl]_]2_c9=j,wd{/P' );
define( 'LOGGED_IN_SALT',   'MA>*N[cPYQmfReJq,tn?*/{)6mL}!7^XEZ<N#}I<v~AbD>|q~2L@Iu4p=%nXjmlW' );
define( 'NONCE_SALT',       'R*Q*?n#VDi!0u3PyZ_(l~%5dRj!r2n&M{mO$9O_lSir*M3RS*l7nWeSO&Bcz(,?E' );

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
