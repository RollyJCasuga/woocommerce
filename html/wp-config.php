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
define( 'DB_NAME', 'woostoredb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '3j-0gVA[o_e68#`H,X<4=0-n<?^AjRVck`dJ%wu|}(4rea(3$yMB7%I->uCbg Lh' );
define( 'SECURE_AUTH_KEY',  '|I1T*cu+Py$[.Lxh+B-JB1g[G7_<+{NHtGFW<~<7AQGxzGdm/L|^up*r)rXuVqjr' );
define( 'LOGGED_IN_KEY',    'Y)h*pX#Ow%!Zw<Y*=qx_dS4! Sj,}H`;xYXfU`IOVto#k*jm~!fYTHABf]V~L2Jc' );
define( 'NONCE_KEY',        'dZ83OQ2V7b.T`Qf|vl%O/N`QQ+g_b8Etdqm6i02j0SbFB4@NotijLE<^;A_GB.o0' );
define( 'AUTH_SALT',        '8YW>Ty(x0_sg(.%*xnl?gW]rjMcMGYs=oFGOirk=mlFL]]y21^5#YDSScN~.deau' );
define( 'SECURE_AUTH_SALT', 'jiC];lIpELn7ljY g}?w0BqYd$_4C4pYc$-hk:L/KrMr_e)=)eVz*T+#Xu;+atSW' );
define( 'LOGGED_IN_SALT',   'n%@8w@)Jgm!?fV5j>iB8Q0(`/rKE|>sS`t%IzTmfBA4U2+(_$FM |:4peM(mv>x3' );
define( 'NONCE_SALT',       'f9i[.Aji;}I-K6yGssK84pH;::6*7yO7.N8&gnUbaf=.C;*a2JuL=)L.oL8Z5ad7' );

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
