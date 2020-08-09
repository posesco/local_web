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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'posesco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'posesco2020' );

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
define( 'AUTH_KEY',         'aK4|sjQ%FhRRRimRlkhF=^^owD|]H^d)^@tG`qy[G6j/-j$.-`/w9(tYvYziV1{G' );
define( 'SECURE_AUTH_KEY',  'PhT/Zay4lTr.^xUy1 xj37|DeZt(MTRVUX:+{{X3w(dS=LbEMyC22ioT!B94_@i`' );
define( 'LOGGED_IN_KEY',    '{Fyemc!HSGN[Jzzot9ZcA.S~Q[Bs?CVE&Kd^zfXiA(jAN9GU8y$h%L&^YRcX{1` ' );
define( 'NONCE_KEY',        'w*;8IKh^:e44J{0{Q)<J1Zdr=+wM-)J^V{~H)>;lWa?w[e)q1mTA_^o*a[Y@xj4R' );
define( 'AUTH_SALT',        'c7`]1&9>MA@sO$PK,WqVp,=,%Z-t<1O@NJo84!5eQs3Txy^J,i=2/EG20h0vBIf8' );
define( 'SECURE_AUTH_SALT', '5:x ]Z??TB.z@$W!$x<S/8tbJ~*(E}X7&U^+~`CDsC csyEZN}tmz]4/8<n2Gq~@' );
define( 'LOGGED_IN_SALT',   'v|8kCdc]lBk@:V+h$F]]c57Fec?QMgzR;y_]LD;&Z#Oq@+|s<cmAp$u0jTRP&2{r' );
define( 'NONCE_SALT',       'bx..Bf7k!c|?3AYD]bC}#D?k!Ys#95$u|y FyNNtIie,PSBRlM$b27nsrlolDQ#}' );

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
