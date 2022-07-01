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
define( 'DB_NAME', 'wp_carbsalone' );

/** Database username */
define( 'DB_USER', 'wp_carbsalone' );

/** Database password */
define( 'DB_PASSWORD', 'admin1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%8K$^xpZ3t:a5{Rq|mPTX)|$j-@!p6H%MZ>r#l)-ij$vPC_U<64&SZi+].xPy?q#');
define('SECURE_AUTH_KEY',  'n]`5i%JGpK{TU=GxL*/lv55s+:Y;43@-*i=NyejU>&hLQ8ti7 *].E)+8zJ^Agj:');
define('LOGGED_IN_KEY',    'ThSW#FIdwH!=pT`Bn[~E%vMa{=R.$,[_|(]W:{50aE&6~ hw3~bg:y5(5$+58fn^');
define('NONCE_KEY',        '@MS{-8R12ix>viarc3|c-P}Hbq#A?7ZH7&_O`~%O?4+@!~FB*E&0<nFJ77C8 R2Z');
define('AUTH_SALT',        '4hrhz#V$h7x: Y1u+{3YLd$-3A*R-[nXqE-VFCj^D<Www,&~jg{8b1u_1gUt}`?c');
define('SECURE_AUTH_SALT', '4u-DTj!2|bY^-=_&&K!JEkLIP}H}V`!VH#$P-KSCW5&pR}t^,E1+rmBTp-T}MGVZ');
define('LOGGED_IN_SALT',   'uiB0m2xtQ&jz |cwJzJSD=Gw6i0RNWBm;o2g,z{a+5WxH)!MmkYe**5M_$u=k]$7');
define('NONCE_SALT',       ',{@x|-?awu(x<P2GF=|p+(4${G`O3R*+~y^V^1uLvg:>iuK>G9*-6eFasM{aKsBW');
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
