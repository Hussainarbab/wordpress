<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hujjatia' );

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
define( 'AUTH_KEY',         '<cU,^w6T}2N=(LFh[z_0t^Fz`EN9(|E13|<jLrlSgzdaJXKEJO)CUo L,>([Zg55' );
define( 'SECURE_AUTH_KEY',  'iX`z @NFuiVqJ_:WZru)Gd~k(l_QPFHF(H@pawAb31tlv=(YL*%Y> (o5GK9A#14' );
define( 'LOGGED_IN_KEY',    '8rW}`J-q1D9Fov~$UN3B+M[XOWN::Dz UK0Ki~MS(ej6lejvtss`G =.A2%]|ij4' );
define( 'NONCE_KEY',        '_&Z67[v3ucgM:`!12BgM#8j(2Ul#9sN=5crTr/k}K/N4[+`7MuB!i*1p,W1`<R>O' );
define( 'AUTH_SALT',        'hKNU1z0XK!@<1MiKU<&/8okwIUb[mXXgZ8P6_jQ(`,?AFZ3b2EIb:IPX<!0^ZaQ<' );
define( 'SECURE_AUTH_SALT', '(wxuNan{TZ`BUGv9){D[Z:]1yE$ZgqW`uB%i%=F5PD,$Q]A;N}.`jIxr<l0!S4]T' );
define( 'LOGGED_IN_SALT',   'hTS9.xg((pQ Fb:O7;K,C;&_+`3A&YtaS;!1QqiyLmdRV,6t%xiMa[cgBTlH[lK5' );
define( 'NONCE_SALT',       '`+cA}O!S4M2X- xwWLl[|1B&b3eIf=N]Yd:[m_[4|x{.h(>jeFqu1krK{_>hGxR8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
