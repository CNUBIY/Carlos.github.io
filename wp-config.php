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
define( 'DB_NAME', 'carlos_bdd' );

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
define( 'AUTH_KEY',         '{x*A*$~dP|NmL7x{$USTL!!p{!yITcBZB.R_@P2u7S}mDPpNjz/7;71+I8L~KBcZ' );
define( 'SECURE_AUTH_KEY',  'goM%,M~6DZ{xW+5GUw&D^A?@TP@vq~0!<ZB>+Y1QjW!)|X8yu[|k@uBQx<n`.3:t' );
define( 'LOGGED_IN_KEY',    'R!+huRuf!>,(C>|[ei{W1cUj!f}HXy2&5yAl^#%>Dur<U`-Ix1rF~~:KD[D4!I.q' );
define( 'NONCE_KEY',        ',0de.pSo`1:^cVM|IuUyb;o1hen_8q$q4[PL*gt9qbj#eN$ a5r>aXJlZ WSf`uS' );
define( 'AUTH_SALT',        '%}F3xt-QgH:vh^2j9gFG;8#v7B:DT*N3Tr3Z! c~QU<6[1Uclv)nWN[V]t+r8stG' );
define( 'SECURE_AUTH_SALT', 'M=TmoK&_UhndIAtjS>Mc5GF8&gnJeuYh{[P7=kUTlm+rT`zNgC+mmZLc.?4X}E|$' );
define( 'LOGGED_IN_SALT',   '[ -oIpGe8{49Y89AO}|Tze{!T@5;$tB ^wuS)FJyrqu&1e_w]Gb1Y2z/hgT[+oN0' );
define( 'NONCE_SALT',       'Qp&>=N[H)&9w+/L]q]z)-krJtKpRI1N)u(>pLF8H:OX|M)gZl<V9^e`B@/H!c<SG' );

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
define('FS_METHOD','direct');
