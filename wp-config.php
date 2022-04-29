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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'A{!>bce/.g,^V#jJs&R.AMi[>KLk*f+o|`187$mdH1IO4^Ai(xLc^QpJV$R#IgKE' );
define( 'SECURE_AUTH_KEY',  'Uj*pJG]~AqMr(GKoje+lD9J<~{-cWk_Vy%:V{Xc[`!i+EG&,E8d},)G&>*ZA$d!F' );
define( 'LOGGED_IN_KEY',    'd&^<SbnH/)H+/rDoD8R:uw@PZdeC{:_.75.BB;|i@BdiknkU*Enjk?O1.vy.zlUU' );
define( 'NONCE_KEY',        'ANqNa]8.vdqTh8hW/H>@CWL*Xck1xAz#^~,>853Ko~GaSKE|_&vk^a*NJ^%VYkiS' );
define( 'AUTH_SALT',        'L%5V{,+$l/n?/LgoKyQ82X3N;~MQ`0+4bz]ds$MTXD#O][FzpdW_`[WOBIBgH72*' );
define( 'SECURE_AUTH_SALT', 'iSuhB-;*_3&D8c?f>:DvL[nrc-/.d6&lz6)Z0igD1j@:F8I}%c]? :U%g&!=7Zzs' );
define( 'LOGGED_IN_SALT',   'o!+gB+[9MqQbG?w7{C6.~v-HXF2NcF=2_bm@>m/+l,Je{=u3_/RS$?hCiTX0g__m' );
define( 'NONCE_SALT',       'Tp)O9L/h#@i6K?XLSO54#EW-:U,ncAw!n`2t^ISe.#;#`LO}Zn0Lv&$+; Xtc$`:' );

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
