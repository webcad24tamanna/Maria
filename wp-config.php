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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbq_maria' );

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
define( 'AUTH_KEY',         '0*m F/p`v?%Red-C>33q6R0(_KQJ7!;zj&9~JJkrYbDBoA4iXTILj<9hupxMnDzg' );
define( 'SECURE_AUTH_KEY',  '/I7nY^S0c2r5*$uPVdqAF/2zg< f5,==/C,@9=yDavWsK~k|;VfQmcxfh2%Z%=nz' );
define( 'LOGGED_IN_KEY',    '-yr+wb.sFv25H:0ufzE%%#]~))e3C?8@3T)W=yiQS10MPY;_edks ,y|$l<i<Rya' );
define( 'NONCE_KEY',        'r3hJ?xa&L2o=ka;]]B%@<Efp!KLG#l_u*)Q@:cEViA}d.q|?DT>c3{UsS{_6K4=2' );
define( 'AUTH_SALT',        '~!n=YQ26ZzZubchB^c/v[.YLOuD0vewY}VuO~4x}yPYwr8~m#&6e &SNmD4szVHX' );
define( 'SECURE_AUTH_SALT', '&d}XGPYgPot92n?/WaU6%yA0[q:o?qy(G3l-;)SZp:BZI9JW8:;0V[]<{y&()>o&' );
define( 'LOGGED_IN_SALT',   'uKE@vn%Hwy.;(AncRwmlmLG{{;QDGMzBf9Jy},/l?(r@QeCNu^(_?tj&[mea{-?:' );
define( 'NONCE_SALT',       '-FB>GAa1)Ac_G|:0F`#9{Q:oP9[XE#*ecc{7J3ObI{N5526e p+[J1G9][~X]F-2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w3gp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
