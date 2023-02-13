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
define( 'DB_NAME', 'stelomart' );

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
define( 'AUTH_KEY',         'ZtN:oU+S0%R$Vo/uV/p=G;6HLPcWqYX$Cjp1O5qL4C6k<0*mdWP.)EiaC=*rt6L8' );
define( 'SECURE_AUTH_KEY',  'a6)k$sx$Gnq0g|C;|Y`CDrb|yg=+Ceou;2X+ xT={j2vTG4<amT3[I9}E6c8Q}wD' );
define( 'LOGGED_IN_KEY',    ',4)pujczm2e_hlisVp_feCIeUIbR@&AZGk=sSlZ%rO*AJIJ[Z)2Ot:p*z+(B4M9a' );
define( 'NONCE_KEY',        'kIZ%1zP2,,6n>JZ2^4:2>N)Yt`lCiE@1fKse)M:z@)Ly6yNT2)|Sx)Ut1p&7KKG3' );
define( 'AUTH_SALT',        'eH=-~kA8JUT;ix:d84f}u2AHs^v-]scfDT[L{0f?t<0FLr w{;t@Kj:1f#bhB}g4' );
define( 'SECURE_AUTH_SALT', ',rH!Qu)C~3wvfY?QB9.{ZFp;1^j>q2%>8BB].@7m?~U=Hmd%`e|4(i$Q&P#{@KDt' );
define( 'LOGGED_IN_SALT',   '>!r9ittrxk,sR((m/d64}W8y=!Ez,bx4|uMU]o/VO(*} {_q8.Uq+Q4m64z*#e]I' );
define( 'NONCE_SALT',       'ca?vm4}tm9D7^JoT2j1=iD~oG3LUNsv XdFk=_C5|xUYC_ed4K0fHR8^X.g_5*=J' );

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
