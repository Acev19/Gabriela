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
define( 'DB_NAME', 'GitHub' );

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
define( 'AUTH_KEY',         'Q21$- H$W1T(HP?f3>m7IB>K.QA&N/)1,!-n6OT)wihVG~B_QUJAbH/Rx=+meg>J' );
define( 'SECURE_AUTH_KEY',  '4BsoT}:L8LccM9RxM)m )%Z#}4*&_buwD!:bz8Jck|/hn#$j-H{%$hGLaV_+_7~#' );
define( 'LOGGED_IN_KEY',    'rxI|o ]poeXbXEgUf.v#gkmb.}$>*|.W^QO){IsKUtm]C1*ha!z/~;E=xX,r4dFK' );
define( 'NONCE_KEY',        'vEcE;F5sOaWR/!7zc=Kl99KO,BL~Bw>h`~<=^Mgp:j&I}Crv+8Ym| o6hau=VC4F' );
define( 'AUTH_SALT',        '+j7?x|jh3ZLHeUQ=b/uciVDL%ODYS0[S2pO+Eu3j@nT_s%eRf8UCw|EH1elw*Z4/' );
define( 'SECURE_AUTH_SALT', '8<4/!R0HUr&Ff6c,/KwD p*N`h]_VAQ;/|<>Fn^a-QZ g}av_=*cAZmbq~v9L_{.' );
define( 'LOGGED_IN_SALT',   'y`,eKi9[]>>K2 %i$ .McrpBj9Ua=N6YN|@`Ic|^Y!9SmJ^-F.>,8#EvT%#]A./H' );
define( 'NONCE_SALT',       'mV4<6&?UO_2K&Ox6XFfe>:2*8/L8MI}j%]UxsV(7g#^!{yY01)*`.hdzF}%A?rc9' );

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
