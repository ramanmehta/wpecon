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
define( 'DB_NAME', 'wpecom' );

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

// ftp direct
define('FS_METHOD','direct');


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
define( 'AUTH_KEY',         'c(m6k1`0NoFr&2&X,eruGlpGM%i^!R}JR@uC9L[wn=eG4?#$rF?Mv{G*!HGyn?z=' );
define( 'SECURE_AUTH_KEY',  '1k!]2r6`Tk/&m~K8[U9[lzE-PAsg;Lh%9 e>0pnk<:hb9[@xuDryXFQ+bq`ap_ ]' );
define( 'LOGGED_IN_KEY',    'R:cKfxY>cR>0#]qF0{N2xi*8^9&354hvk7j|O<oOKM&uIVmGyrtT:vl]vjvTO1mg' );
define( 'NONCE_KEY',        'lkJt4}VpV_LQ:D8Oro;{]h?SW/huG`WT.rxZj,yyB 6` 7R<(%.j$#O4/Z^N-3k ' );
define( 'AUTH_SALT',        ']s/~C=S.27EEPDh>ug>(uok*4c61mPxgWzllz-]>:ZcfMtZ?+Jhq`}ez2Cx0~%-S' );
define( 'SECURE_AUTH_SALT', 'Cx#,WW2aWeo`wgo!9IJ.B0)EBIK6{;Uj]i),Af?Y ?Lb,NlYgrG{{-F&gqyEGZzo' );
define( 'LOGGED_IN_SALT',   'XBu2!4|_eMEv7Th!|?ws:J!x@IlAklGZ4e2{+.M%GX8+|,eixXX.6@Si}p{tOEhU' );
define( 'NONCE_SALT',       '/frg`! VT~^Ae#$)Z?A6@!l@DNel%h~pr=%n<@ hF8`uzAFpT2y$O+S;GF/aj]2>' );

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
