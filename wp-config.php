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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`=wt`_)pF&e1{1#k#8QWP7R@P2NCM+ht_R@M4aqPXE$O:8EK77%{YbgrH^PyI#ta' );
define( 'SECURE_AUTH_KEY',  '@--Sq cU6}H;k<3>:0 q+K8Jp)i]xuT(8GP5p|lsgtl3fD`?#,D%gxCt.OR:%i1y' );
define( 'LOGGED_IN_KEY',    ':^9v/!pt:a#Y`&l!64.YkX9E%luSy!v(E|+1xcNa3<0dZ3as7;$=s**uTgj~S|Pv' );
define( 'NONCE_KEY',        'Rkw]J3H/~*g%S3HgvfMHN{)G3=&P1cj |tK`JQgb6=@%$c?T~Abbttp8ZgPXBajK' );
define( 'AUTH_SALT',        '_wmgz(u-1Rbv0GI03F{oDVD!c?LCSAEq&{9g:y`YUTlBw^JF>x_hU,o2ud[`Z,,!' );
define( 'SECURE_AUTH_SALT', '{)tVmAQR5`PtZLk,Pa}Qt5lf*=EQ]{D)MxVetynIYTy7K/#MXp,Ur7LPAT6`U:wX' );
define( 'LOGGED_IN_SALT',   'pz;bzf*O6;e)[{@wc6[.zP~5Po@b{db;^ES2(Fg=(z7r(U3R.^)gymIQ!?,+KvqV' );
define( 'NONCE_SALT',       '.z{Mb-{0)zFEo%bPJr3A?un>+z_8C#h7[(D4>GGk2 }q`MnyD45%.W,U-Sxhg.o2' );

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
// define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
	
define( 'WP_DEBUG_LOG', true );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';