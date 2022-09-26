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
define( 'DB_NAME', 'web_atc' );

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
define( 'AUTH_KEY',         '>Zp{yRIx>W2k{I4*JuH^`|lj64>.|PM(/t-}?jm>FA=gMJ],FGYzPC 7:c2}BkfQ' );
define( 'SECURE_AUTH_KEY',  '^(m/#w)Dkn`sq]-yIrzrI52n#FR%3i^GKW&01R$UzZ$A:+TP<NrA[]ZqQ,aTik7;' );
define( 'LOGGED_IN_KEY',    'e+jKnc/&a-G{SUXr.UX2n:6R{3Lg0=9Fn-ESN`![*wQ7s#5IYqpL1si~5~6cO*,z' );
define( 'NONCE_KEY',        'As)p-yFs8!hEb% e~*cb+hmPz0?2iwr$D]:|%>#HLkw_]cHA^Z!.}xccP[{tRSCM' );
define( 'AUTH_SALT',        'n8Qvw4(HX,e71,wsFX5Yh|L`[xaV$,ax%Ro28q*oKXnA+2)NP|;jZ,o/u2iAMDFa' );
define( 'SECURE_AUTH_SALT', 'qAN>pR$F#Mw-?0- tE YP}^*Gi2Uz3c56^>;dHQa3>/fOqTf}oRC}{ZLC]e?FC)y' );
define( 'LOGGED_IN_SALT',   'Cjrrt_TxBth[ Zi3d#R$;{:j@Bk9l</*JdQ;nmb64i5r~]EnJTOo|pYMI?QXZqFJ' );
define( 'NONCE_SALT',       'OC&2:*dfM$::*I/>6 1R{ykNIqW/9v%~vM_eTkg1;Ir:>YMwCp-<!^QOrTTS{W>;' );

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
