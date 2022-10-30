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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         'F7Y<t& [7[n(4SMI}VF.<SP$]fSCnG2,Y1p6,_{R(KbzwHF,$w,?@xG7Qb3DaMHC' );
define( 'SECURE_AUTH_KEY',  'a!k#t;ZI7LOD72:G:<DDv4Ir03Heks6 wDncvI#R0=1tasTNx/%LiHeluij)0pjb' );
define( 'LOGGED_IN_KEY',    '+i@O}Yf!Y6-!i-m82!CwoqN|4-QNo%l2^$!Pbj,,RfY%~&<==2X_.KvZU`t_`!lT' );
define( 'NONCE_KEY',        'H?q<?Rd2dfEIAc($>U*<zw*<k;D^3~E-Hx*]N&ZCcOPT;Z>b3aDn6s-%`g:>23B+' );
define( 'AUTH_SALT',        'np|76om]acQ+}jtS[<^A%^Vo6l!r@)ylYep.CH[^(xx?[iZ*. n}`G[ir4wTK^:B' );
define( 'SECURE_AUTH_SALT', 'I5S.qPzfnBY.Co`B]y$>~4^O%tp<)43l:-DAeyJM!cOXd9IpsJle5m=^p>5uwvh.' );
define( 'LOGGED_IN_SALT',   'c>f`e%2!MB6{t0NxJywJEF,CuiPqbXO8<5lvtiEeljH[jZrmRCNOyr/-:f)~+00^' );
define( 'NONCE_SALT',       'A9gtra4tR=KZ&eLZ#}=D:F;_E5&4aPw}^I{As)r8K4/lRlN>0ql/e8]fFVB2~([J' );

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
