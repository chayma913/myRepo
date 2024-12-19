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
define( 'DB_NAME', 'MonSite' );

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
define( 'AUTH_KEY',         '76tPQwHJ1J`vvK4p4eeG/ygJ$g_[Mgb43S>9u<y{=I)e g996bFON1|BxrE^BkI-' );
define( 'SECURE_AUTH_KEY',  'I}:v^@xuRgq>wQ/3r7pLZ/(Ua&ZAbKEAcK|W99:Bic?/,t-n/qVU[Hua?(dx0k F' );
define( 'LOGGED_IN_KEY',    'Dm3`!71Nbe;Y,I D>L)oW|m0p1uu9mZ 5MJrm%R:om%PyM.Ge:O4gNp#jaN,)iF;' );
define( 'NONCE_KEY',        'zo|07WvOo*t-+Ex8kj57yzGdZ^ DgKSS5(`/G<y-ezs_r0k^Dkk>Nh#)jvkT/|)x' );
define( 'AUTH_SALT',        'da!}M9hG3!3`[Y_-[b=_aS#>lUGt-[f]U8{d}vje+wE*auJPp+ :5m/-pM+E>nAT' );
define( 'SECURE_AUTH_SALT', 'xB_x}65J1) W4m~O#*T/($O ]m}A--nB4PE`QGVfwJR]7K7HaLk?HIuv~r*87lg`' );
define( 'LOGGED_IN_SALT',   'Y>:F~HL/+}:{XzG+;H37:{0=Ep4N5WFNbqEgb^kMN2P^<8HvpN8K>)1I2XFN[7h,' );
define( 'NONCE_SALT',       'xwFYa?ee2BpXiFfv0P@4^?(Y<]GQf%] -IJF&D,a?iV_d)8U*-s81Hzx:3LbmUh-' );

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
