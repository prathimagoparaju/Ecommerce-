<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u994037605_lNmZP' );

/** Database username */
define( 'DB_USER', 'u994037605_nNHbh' );

/** Database password */
define( 'DB_PASSWORD', 'g3ocfRNRUJ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'z;OlSp:Z>yevlBrArZgn+w6V]UpAoy.))I,2!dA%(+bt`&6QZ^ Fq&N^o/#<68%m' );
define( 'SECURE_AUTH_KEY',   'PI^m{V=xJfO[jp]k@~u6<(o0WV MC)[Bxi8MlGAzzhL{*1!OzjW[J|u!O`!u-3#^' );
define( 'LOGGED_IN_KEY',     '/>L?G`bW=g9k#X;c.p*-!;F1TZAjQW&@MjT9n5m7NS`(1juf_8H5?nX7t[|1: rQ' );
define( 'NONCE_KEY',         ';Q|u+2.s<;uZ^j%y7u=?W_W.4U&Qf_iA9&Lw(CnDH*|~o&,;2TFKBTweJWn9<f%w' );
define( 'AUTH_SALT',         'e%:j6;De%i_rL1+ZMZz>8E.~E@n}>U&x)V#$0^nO=e#rxJrS_iV+BtImP-G?73Ff' );
define( 'SECURE_AUTH_SALT',  'J#zD)2[g]6:omaUr  OXQp]Z#Ru wCAY4#r?)nEXr8#/.!gi=z<8/rnHtkK{t.)e' );
define( 'LOGGED_IN_SALT',    '{uV}bi?v:Cy6YAA3D+qw?tmjRBvS)oJ:e|o%%1e>:z,K~b&){(D,OdTWtEMJ8ikD' );
define( 'NONCE_SALT',        '+P[$yND|z!?f%41~<c3Cy(<k@Lxt2~v~<ns;88wKG4d@oo{nLY[9Yth_W:nKQxA/' );
define( 'WP_CACHE_KEY_SALT', 'Ixj@4=+j%)>5j[ >}cIlUZA*vffK3f?aTp>.dUwudW-u,ul6Q.qH|V]##:pYspjq' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
