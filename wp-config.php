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
define( 'DB_NAME', 'economist' );

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

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'ZuM:O(/<RRkXnAeybQZu,FxsKheU08)UXsU3OtcAsh+)r>PSN/2S2aOTKz<8J1>J' );
define( 'SECURE_AUTH_KEY',  'R3^CX%^o_J6h<=@1O}]hzOo(IxG]1BC.o2yF`dZG2sJxT,&unU-agz82B&+19Rz(' );
define( 'LOGGED_IN_KEY',    'O,=I6m$Q4;/co`cqHf@!,s,|v&((^db>^S.?i1X)q~x,^$k9-@VHqP/<7lHa8T7-' );
define( 'NONCE_KEY',        '?rk;e7Sy#U$Q@]Agix?q] tABikkCEY,rI1X<LZ74QVzx%nuHqJE s.o1P:Scofy' );
define( 'AUTH_SALT',        '-BE?aO5LEoF1b7c7XX:>0@59J?17y2&7bU,TciOWjd7~OH.TC:T@.4FyQCd8ia:{' );
define( 'SECURE_AUTH_SALT', 'V!,sU,L&iWmc.F9/yG7+#dze|^5v_g3tan;0OSCm_gon4w7%_zV*jQ}6K|I.>=83' );
define( 'LOGGED_IN_SALT',   'i>UJfMc0n$tMX/AbW 9b(3ZQQS6hVjALJR~&p1ut_^x3|q=pe]3D:};)zo:#lNNr' );
define( 'NONCE_SALT',       '$^C,_XNPs!5l)caol;bauiH#?I]8#Y.1Ndh|+b ,((CMk/2;J+]Qs=0T`$E[#E+b' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
