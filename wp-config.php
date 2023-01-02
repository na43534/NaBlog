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
define( 'DB_NAME', 'BlogBD' );

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
define( 'AUTH_KEY',         'llk -4*jw1}_-@>={Djr2Q<e)ktE ^N&pC-8!7?81|aM]l@p|0Bvh<|JQ=:Dvucd' );
define( 'SECURE_AUTH_KEY',  'p&+inZi]vJq%MQ(a)Ur%t.U~1n7,V&F /-D#upS3E&2zs*YOHZm4=-W5Ic?w`eeo' );
define( 'LOGGED_IN_KEY',    'E_`reS?,Y=dNhb,%7|ycXn7LBH<3M=~!nLMfc:$eg<kw<TD#NZQhNS~r1{CSX<Uc' );
define( 'NONCE_KEY',        ':FL*3%xnd8S@WpcF-J5I>=bG3<uoI8rdH<JlKS|s=7,.[oe.sXB;G+?y6EaXP.z{' );
define( 'AUTH_SALT',        '[JmZ*EslTgM R4U/aMp8HuKm}:?io.s^WL2pAlP[Zh}#B(<Y:dK6&cLOQ~)k2r4Y' );
define( 'SECURE_AUTH_SALT', 'r6Z3k)rIHl@L)@*L6_BeHV~A&e;t>f-]enNIc/:>,/zsd0FYND`u_&0-xwrTBeST' );
define( 'LOGGED_IN_SALT',   'OGqBA%_%pIi~/KGr2^)d`0cC(@qM]er,4*>C*6_=osU|:]yy$Hy^rDb^;xU#|:6i' );
define( 'NONCE_SALT',       '1oqc41QWm=2n^*sfp0ORs_UfpPrJvT@cOmivl9m)_{[9EjLx{w PR<N,[_o_|#ej' );

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
