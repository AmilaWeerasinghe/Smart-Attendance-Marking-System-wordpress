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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pixel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J_EpmRKNf);f91J)4{TX%QytTuw6[,XHht:f/`W>+L,%$F]g`+LM<uv,Vb#iDIEE' );
define( 'SECURE_AUTH_KEY',  'C:9/fjp;N<pQY~zV(Tx,8;9P1QRzVki<VO;2C]x*NyPnu8;%S| f?@#6xq;kv4q]' );
define( 'LOGGED_IN_KEY',    'N[7EBJ*C#:Y>Yuf!4]Uq]m-g@{eEO5Z+TU*_YTp$.jJ!,DyfZS6s$^O22^qMZX|0' );
define( 'NONCE_KEY',        'pv=XRSd<SLhcp6U${(b.][~sk^1R7v@UlZ}g28<n20!TE;u>NJp,`Gj(@8O_I$s+' );
define( 'AUTH_SALT',        '3JjLPJKac.i-<PD 85Cy1o3R{|K;Ab#r)5U`@^XH7wE]%%t#/vPV~V^z]!x}_In*' );
define( 'SECURE_AUTH_SALT', ' |D7y%iL]N:/x {qcPLR{!!i0{Sp6L[2c<;aCzHd9B^%Vf*rk7:Y25PV+*@Bsvvs' );
define( 'LOGGED_IN_SALT',   'H]uQQQ4y~aGm~>C6Qi4}r!*PIBbf^{O|RtEzJ`qW5<S3}474Bg < kAsM*|o*aX0' );
define( 'NONCE_SALT',       'UQ,E+{X+/r~^>9*(Yp0KEWAw$BuU/[=!tBJl*>tB_==?Y!]2PS(B3SnVR*Q9aj[[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
