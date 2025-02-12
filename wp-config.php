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
define( 'DB_NAME', 'elementor_team_widget' );

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
define( 'AUTH_KEY',         '`Vu0RGaI*r-FF1VdKU1h]wSf:iY1[DVpxe@h8t)R]-6T0Vj<`%JC3o U;YbBcx_Y' );
define( 'SECURE_AUTH_KEY',  'xHb_W6fCoJKff+VsG(,m=W}0j9AF/ScB;u,CT4s{dr2j~Mil`qMdl3RW)uyx|;OE' );
define( 'LOGGED_IN_KEY',    'JG15Vl_w~L=rdmQ4fdOdRQ%I& n-rd!#gIz$K:/YpB{Gg2P8MOQ=VuY^(/XdPi_t' );
define( 'NONCE_KEY',        'W 227&Q<tYS`l yM:.8kog ^xUTQWYH?843I5)@=L,+W )}@3h~)LJZqS^,%7nN>' );
define( 'AUTH_SALT',        'isDDR]=#BdSy!@g hiu+#t^udYAkr?BXQpR~Pr+663+h|=3C4bT/PfOp.B!C8JWa' );
define( 'SECURE_AUTH_SALT', '9Azi;j!M/.tg&Q> L5@DYpc*PWs@`>i/{l_,}TLRtm#.I==,15!top0r%b`jFr?@' );
define( 'LOGGED_IN_SALT',   'Ilj*}/FmHIqCYi;)XCk>ZtB2?R~H/LGRd2m{ .d@T$k`T/~c|#`2(O=p395#~Pz ' );
define( 'NONCE_SALT',       'xr|{t=1Ey;AAwYQDva[#N:2&7p>G58!!M11kh }G~-b&G)&B3I*&?23;z((0i*ka' );

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
