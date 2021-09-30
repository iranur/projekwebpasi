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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webzahira' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D@!7>g}jAx^x4aQw%%k*o$R2wO_3HROY(+dS#5x_TH^Y/hXeypb^[$uon=So?mLW' );
define( 'SECURE_AUTH_KEY',  '2A54HdMTyNoX+V2HFA-]eXvYjpLRa,z7yy&,$ZHYv.cneVq4cHX*`g3nX1<PJCA%' );
define( 'LOGGED_IN_KEY',    '%%&4OxTJ;kHo<>o36i:OgJ;EVH^I}i}}#WEH9B#NVYDH~xM9#OiVK76(L51lwP-}' );
define( 'NONCE_KEY',        ';,clR*qck6+fp$I41Sq(:rr1ZP*@z(_DaUSQF?8F+(yhs>t|>m5IOTgtz/Gt9xqK' );
define( 'AUTH_SALT',        'ov/>.?fJ;qdp2<<D!rnHxoj%itHQgWAX#:s-X=B6$Yv%)@&PF8)zlHE&}LM@eW(N' );
define( 'SECURE_AUTH_SALT', '*fQU}hPaDPqo>1|RYSP^bTKQii:33~|g!-PoN5PPz2B,K`ZhFczbxTA70>jXum#O' );
define( 'LOGGED_IN_SALT',   '4-,:U41f/n8HV83I4A!Y5+Q?5;8]5?56Yn}Ghdbw./Jd RUZCc yj/{ >VPBgb9[' );
define( 'NONCE_SALT',       'y2|b:>OhKH>M~HV(}MMr/d,c:03wg}*^QK6>f+_#Z@=FpOOkMhnRMNP`2AtUU(d$' );

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
