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
define( 'DB_NAME', 'bd-estacao' );

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
define( 'AUTH_KEY',         'czy:X(Cmn%bExg^ayM|?[4(~s-@5rnlz#sz]]O=ga,JPFw_d&VUec}!f;UL@o7Ed' );
define( 'SECURE_AUTH_KEY',  'nV-Go3O6>;j,f%cTFTbpS=*Ncv}Y_%4)/`,`FwGR~iv+vWM/Wx$jhHI^7^3DE.F^' );
define( 'LOGGED_IN_KEY',    ',J`>m$vz8NA~Wie6XVyPw.oraS.6S:+ =Mf,Lh&wlXWxfGq:ci)wD(RE`=p+`yNB' );
define( 'NONCE_KEY',        '5N/2yD)pR<+tQTAB4aX88j((}Xm:bQ:QgqLuc(>bgXTwFi&9yzDi]~bnT&Dj2^8:' );
define( 'AUTH_SALT',        '[k3:rKdgz-9)KB(Wh<7CVP>zCRlXL:^]|1y|}_thT<8gJpiJ1x@l$(<RhlL{k1q`' );
define( 'SECURE_AUTH_SALT', 'RsygTu.#1t|`,KiF15sf(1+#T!|JK+YB!]]Sq0/sCl6>90-o=n?_bvErH6x!Km_<' );
define( 'LOGGED_IN_SALT',   '#lftY%sjv9!?`UXHX6[eppuVbrypc-?l2rnuX+o.a$jIQ-hoc^b6m~nw>/vb %0I' );
define( 'NONCE_SALT',       'iGegQk8jPX^5BWax&5%LPwExQUaU.fJz_I 2^,FCjN)T5=&Z+YZhA(eCAw<dDJq;' );

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
