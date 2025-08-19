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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'auV8!ngoHZMW9z9^2Rw#r+J|y%j*<6f} M(+G2cDID0ljj7-WN^(J`<knLs$%;9s' );
define( 'SECURE_AUTH_KEY',  'QV<!`#?sT% ZQE&;@u:vMEY_MH9r$dR,wviuswf_vT5i@LK@5,70v}H;dFw6K|)L' );
define( 'LOGGED_IN_KEY',    'EG1>QsH;,nT~3K`tcuRwDj;j5O{:M)_`Qzel?!=`@;=h=7d:_m}E2@zT%KtxEI](' );
define( 'NONCE_KEY',        'r9xz?%}M%l|`tyX ,Q=k,cPJ4gHE7n<`3g>nqp+TxX[-iGroB_4;B=R/`rg#EW9y' );
define( 'AUTH_SALT',        '_(7H4RRyh6{!Gx >~i-#Wr5|N5:>3ZxLu|`q,b1A+Uo?klJx-^mVtGbqqO<B]JfL' );
define( 'SECURE_AUTH_SALT', 'j|*;epiXGjc+yWoUD:bnhF|I==M<I=6YcZ?-,oX-H2;Y24)v)v<=P6_7<qvAO:hT' );
define( 'LOGGED_IN_SALT',   '1e-?uT{$3G!>1FxQFbq/UKNXN&A[zj.:>*1-|SlQcr}]Q)F(H4*OI||QmT@`iF$|' );
define( 'NONCE_SALT',       'CYowJ?iRzlL%)3S~6S/JB$q_KT~5ta0U,>K6A;15:p6S`>iyA8S[oGXXF~m62@J[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'blog_';

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
