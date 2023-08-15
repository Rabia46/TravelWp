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
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '^8@nu|doQX@$s6@{PIgJ{+Hs3tuO@Sxs{.ZPf-PU`y{h-Zry e3H4`Dw+glq. sb' );
define( 'SECURE_AUTH_KEY',  'Az=&uEA<oevV5nX8rf4#66*Oorzok1x&iiY7Du)$w}rQir`KS}$Mf,5|fgn?,&1S' );
define( 'LOGGED_IN_KEY',    '{4~~Z%9.SIv; $a/!jdW*up(*fgX0GDtz/&Y6>$>g~~)+faQ>IbNMlK8Ttiktl.1' );
define( 'NONCE_KEY',        '!47V65Bo?wXerR?#@w@*fM:{8,7;Q_&|S;`R)Q+>?ESK[%2qXrgN.utS,3.21.[B' );
define( 'AUTH_SALT',        'V!UL* l))-K^OoI[Es, ygcEYPdKg6|!y:5G5]p5}mfC:wOh41 2qignS,@q`LMs' );
define( 'SECURE_AUTH_SALT', 'J3I7X@SmodwxXL-.!1 SvsapK:X#4&wgZ`4vKn+cZrNsmMWO~-Zl(4<wH}Is4<f6' );
define( 'LOGGED_IN_SALT',   'Up=Es$I?%%N[5zdXu7Wqczw?B;*c2xl(M4zw?_Q.TD1x?GWT6xkT+_+3#WT+7uFs' );
define( 'NONCE_SALT',       'mseAxq0%teFM)k&e?0ik57`>X4b$m<@Eg_HiW$u9bi0,Ed(UElSGZ~W,&J&e22!#' );

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
