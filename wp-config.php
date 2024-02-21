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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Supervisor1@mariadb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'sed~sFdy_qJ0Ilm8kvdoyT$~STQ2Y--WC:3yTR>#MzD<fnk%wP-DDbpIwA{q9IJy');
define('SECURE_AUTH_KEY',  'C38JbCPiLb./=}+*nM#YYh.PQ_ik=S([uE tU%E`Fg_80]lLg1G*|cE:UWRHpej*');
define('LOGGED_IN_KEY',    'W7HU-R)am@!,=*doB|QuNxbKb!|ZI,={[Tm)c^@`xb;N!<4Z),q:R;(,?`E)&.Rk');
define('NONCE_KEY',        './]wqq6*BGJk!]j`P7fud^`)Cxg$wP-}whGvkyq;k&KyeJ{U*@^3Tbx;[rAB@u+0');
define('AUTH_SALT',        'J.nVCNdrI+7n>NwSo>+R1qXkdA%~&@vN|9$qd_+$,wrSR0215RGUU^$PY7)%DG{ ');
define('SECURE_AUTH_SALT', 'zTDgUQMD/dCt)Z<Cc-UhA|j--uIo5]d<b;[TBD=E|FCXLO`4I[D){h-lLX_v&CuV');
define('LOGGED_IN_SALT',   'X@v@zm1WU{(=jzoX-gU!%ydgAgMN=V7{GtrKwujM1m`qeBrl6(-55+)Ai_V2/lY+');
define('NONCE_SALT',       '. LeO1-8;/-nJAq$}icQ~m7$741r;)d}{EMfBxL*qC F1? t#AiF=:P?ln@6+Xsr');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define("FS_METHOD", "direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';






define('WPLANG','zh_CN');

