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
define( 'DB_NAME', 'foodweb' );

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
define( 'AUTH_KEY',         'z:@?]adFp:28^0oTL!,.+S:f[PZ)$WfRK:yFtJnJ-`D|#h0ZbblL(JL!z$+0BW(t' );
define( 'SECURE_AUTH_KEY',  '$oEZ6!Q;G/|[@94Mu3;+mYK!s5t._Q2hIYLxi6{NkZ1%g%?;TueYmYX&0<fG%zSU' );
define( 'LOGGED_IN_KEY',    ':f+j`VV=p=$C+NOPM37ojbUljg%caxc,7-pS(~r,*Bi6pHs1;8$B~N8kJD-G]90S' );
define( 'NONCE_KEY',        '.};DSa;*_g%H/KfPIk0)f^;*H*I?I>^ _IZ.#N9x6X^3e@x,}_o4PuX_2:t~~F%o' );
define( 'AUTH_SALT',        'Z3W =+5uVM}$2L]CvoQ0yS8NlBU73uED:sg-G@a^S)b*+s>5STeH034CL+d/w*~<' );
define( 'SECURE_AUTH_SALT', '6*7v$>NKL?ZLo$k+|G,<g0PoR~TL-M-?[B?DlbnOHwFy7Cfy(Hl`c(0h>i9}&}xB' );
define( 'LOGGED_IN_SALT',   '+[Cip|GUcT}~126N}64`[f6=2,!pbL+bgkdL)[^b_7[sGiah$|FLNl5.Spr7/#qv' );
define( 'NONCE_SALT',       '3O1sH3[I~+w[wG  /=[_?({G(t?t_fMR,Ks11.GO;.{$h>jOk2R`$-#gpy~6#@PH' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
