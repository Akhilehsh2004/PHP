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
define( 'AUTH_KEY',         '5tLF[@Mo513~{jR6S|y?v<OfA_zUBk:fE9R9*o<y]g*R.Q)^kq@RCuWBQ4lzY|`Y' );
define( 'SECURE_AUTH_KEY',  's+x={Lc%72+&`)3gtSC]J95I;sl.X:Xr&f~YbXz.MtiaV,*5av*ISn5A su]W`P&' );
define( 'LOGGED_IN_KEY',    '%N 1IgLs-4&>*x6_{d!&N7^HyJ;H/vqDw_Yw3a&&3M$WPVZ n,::$oy.JNlowGZ:' );
define( 'NONCE_KEY',        'BaoiP!E:z$B;vF+3aA{/K<?VQB{%D>)9(s,tu;>VieeB,X<N95.VodFk_K0-?M3Q' );
define( 'AUTH_SALT',        '@k-,k)6nTf3~yqW@[.{HT9k^exM `KQAizvWFtEci|f;DT-*z/iwTfu7o;+I0IS#' );
define( 'SECURE_AUTH_SALT', 'ExVq%caRDfd{[Yt9hm0*!M|RGo)Uql2*J}z:et!@D(R{H)uCv^C|mT/=2ZVp_u){' );
define( 'LOGGED_IN_SALT',   'zc%nejZn,Dc[N|Vi`9t7nLBEEkMD=[p&3R_2Fm7Z_oq?mU)`W]e =%lRzY8Ie?L-' );
define( 'NONCE_SALT',       'PU(WZJPLecs]V,[}#Ti0r|Ew{&DZvK-w|5PYB^qxpT<bf3qJvdTBIY4g6C6) bno' );

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
