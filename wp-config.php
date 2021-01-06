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
define( 'DB_NAME', 'aupair' );

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
define( 'AUTH_KEY',         'UB*0Y;=TQh;8dfeJv(XtMwm7kxQX2GtI*&e%.*[I0aTXgP/ Y^ikuyz.J&vAI;0x' );
define( 'SECURE_AUTH_KEY',  '(AJAis/*1[#2{+zUk%A enzZ/kR}c2wT}UvFpX(-y3Nj:u4QtsI.F&12Ld;J{XI%' );
define( 'LOGGED_IN_KEY',    'l/yTcG9a6DMkba(@%0-OxW(Y-83c1gZcUnC|1c$JUxry@b@_S>}8w!{v.q &X)^F' );
define( 'NONCE_KEY',        'ilN0rLac6cks7~WL7Q6jtc>G*UR>cx8&|}lwziQgp:OQbLQ$Cyqp~6>]UAD|:frb' );
define( 'AUTH_SALT',        'a%QywHO|>QzVU@wD,[CYkT(4G,TG!o~W@=k?4xpgK(j:=dR#WC74EF/P#u)/Efry' );
define( 'SECURE_AUTH_SALT', 'P0voJ20uS]m,i_x<Bx7yj]D>`s+R#PJ@nPeFnRjqWi?@C5dN1h%lMc!pN0>knoy<' );
define( 'LOGGED_IN_SALT',   'J PY(#S-E4qPmyP-(T|3G!o|v,k~%[x^8JN{FrQ>%Nkw&DdpGh-5~t,2<J:j;dm0' );
define( 'NONCE_SALT',       'C3$$AL.=o!0!T{?F`]`zBlYR^-Sg<[0vE>N/~f`>|:AiWn}eSJhFySiw~96w&`lI' );

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
