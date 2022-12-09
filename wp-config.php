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
define( 'DB_NAME', 'web_tramhuong' );

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
define( 'AUTH_KEY',         '--P^hQxf7U^WPG0qu*UrP:tvKj@.<]8Y _Q,/%kFJ8qGm&Kk1>5An!s@%z^70%ta' );
define( 'SECURE_AUTH_KEY',  'K2L5!kQ{Dr)VCAGF`Q.B/[i^#[nntkUSD*dw`Q8pY;F3sNP67R:{vgi)h!aG^GJ>' );
define( 'LOGGED_IN_KEY',    'bjx3,lL|Ra0_F@Em{s^UTt6&VavG5~F86yd_M0wr?d(fK5/8gN.2t9[}oueG;II[' );
define( 'NONCE_KEY',        'Y)n.4myXP.5mn@Qz1keb{C*)m^+[?F|l?cz0WCXq0G~95Ldo0N-$[#q7-8-Jq!3n' );
define( 'AUTH_SALT',        '>5 LweaKTYt2C=mtE@ZB;Um-=z+PA]=_/i$7WcOFnEZ==`/SooPyu.2_PPHg/+a2' );
define( 'SECURE_AUTH_SALT', '}XK._#y4EdC}_SsREl6WzD?_LwpsVi+[i/<Q52~{EAOd*oP%4dddqu p-(Vp,I*V' );
define( 'LOGGED_IN_SALT',   ':BAu<:{7#hE!u<4[U_G[;670?K`bya/n*:rS$}%Ah)<wO{[u7<t8LUia|s|qE:z)' );
define( 'NONCE_SALT',       'j#c)QfqYh@{;3&:<VhHZkt9:6X;XzIwe%iyzH/o5nb;J{fqXAu9E0:9IlaO$g]vI' );

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
