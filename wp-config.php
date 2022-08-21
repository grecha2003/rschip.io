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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('WP_HOME','http://rschip.io/');
define('WP_SITEURL','http://rschip.io/');
define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rschip_local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w]2LnZ;/K8=Dxh*O>q=]c.YE>b0txJh%XF,XHYLTly,kB1<NKJ}haE]^g#3:YYLZ' );
define( 'SECURE_AUTH_KEY',  '0]<o0^?7&B=L9V9FAGOyU ]yUUYH6A6E[J#nBtw6pKkZ98SV0g+YPkXe=;3Dq(nz' );
define( 'LOGGED_IN_KEY',    'J6C=<[Gm#OFYl{jAi2C)&}clYYXUvjdC*?8uHgow;Rj[crHL&/N2]ozs?uCad{qX' );
define( 'NONCE_KEY',        '}CrV]l~I)c!uYZx#?^.ZzZt3wAAtM:N$~+ Pv:p$*<]]wx.)@>lkW_{A|~/[Hf)j' );
define( 'AUTH_SALT',        'L*+|rK`9cV6h6Tf/a+QH(/1rQ])a<>VuckSZAFFm{;(6}jkh/e,*:1A]yLk#YP5[' );
define( 'SECURE_AUTH_SALT', '=[p!iUc0I]hHW2]NhUxKUWbR|n<d%Y.aoO8]k^ji&b`O|=y7r>bs8s/OMXR)9&SO' );
define( 'LOGGED_IN_SALT',   'yGM!N3[9-gvN/{dBJ|V=ZxjH ]6PHmRAo]{MHk6]!i7-AP*Mf6L b>@ x)0z4JCE' );
define( 'NONCE_SALT',       'obl!.lT{X)Y6X6 rynBeh;WuSdz7H[*EZ(y</h>~`0}m_-p*cNRqP&u$)8v.U|a^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
