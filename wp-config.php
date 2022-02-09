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
define( 'DB_NAME', 'morjim_pride' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rl;FNGRu]vl< z^R=]vd3^d&cQz01Oj}s8RHX=h3mzElXyo,MVx~e-nvtB>+`t&)' );
define( 'SECURE_AUTH_KEY',  '`Q 0eIT0|x $XI-Zqk4l+Vsfa~0cka0GQtG|;=8#_Di*|ATnE8j|yqdljlOwfD@|' );
define( 'LOGGED_IN_KEY',    'SPWJjP&Nh6kIf$(cc}!oqJkL] UL{(vWw3I%TA ?]:z-:!ZsCc~QIMtd~@[XF2k/' );
define( 'NONCE_KEY',        '8_rFe2%(:`>nYY4}tP_FD!m]9U$=N_r@v*cP8>)w)= }hb*uI:63$GbLv^#e^vt;' );
define( 'AUTH_SALT',        'X-ixV!kO-=&LJEFVda.!w[a`$b0663c`nI7J`h`zsiBx_uW^R3#~op>Tq ~/D:8^' );
define( 'SECURE_AUTH_SALT', '3&]30xW%>]B`KoW0+eNZ7s=)K@8)eYSi$e=ERIqdEug3L{^<vP# />~fgS$camj^' );
define( 'LOGGED_IN_SALT',   'Mc:Lpa6WR{C$=8$qks=$f;<Op:iqjk ar/3HvebhgL{?^[5udz/7mU,=f8fKt+S<' );
define( 'NONCE_SALT',       'QLZK]F!Q1n<)Bdb2tHd$GPWC0kN{%s5C%S7*/XoqlzF(i!U%<jMLK6LYYVpIij-X' );

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
