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
define( 'DB_NAME', 'ontoureducation' );

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
define( 'AUTH_KEY',         'lx+G/7E{d,(crze4/PY3<Vih3.~#725Z`9}bwjeLz,o~%q^.,F&4dy.j?+D(r>c(' );
define( 'SECURE_AUTH_KEY',  'b hG#_,?:1b8cV wIfL[n6]e)/SoiP#`G=3~SFFci>q.8g+xebKeLJXpbEZLY&BQ' );
define( 'LOGGED_IN_KEY',    'LIbp#o>`y#LHjl>L8G,oM~NrSF.F}Vy}v>v1&b(zzef3S;9a!drT,ng~.-Tnx:m]' );
define( 'NONCE_KEY',        'oO -Ixbqq7ICJ%O,72Dhr=2>JEh4g tjCBM.N8Ad2lB8I+;kZu,qLlY*7N7>>c?p' );
define( 'AUTH_SALT',        '63]p?r5RtkL;6KcTg~ J5DCxe3jm9Ye&=G+}]5)4ctA@`ex1AccA9[<XVq-]:`]1' );
define( 'SECURE_AUTH_SALT', '51EKRjSOk+TIAYnf]6&mi/hsHYsl?$sD4BwG]O1N>p{qJ,7cd]M[>bMKw;omNI3t' );
define( 'LOGGED_IN_SALT',   'X5_Q7uTRZO2SWv6!/0m/GFZ^mEVx4W@kq<6ie2XGR2QL5J2, b(R}d?ANI.5>4v+' );
define( 'NONCE_SALT',       '*L@qB/`GG{.s5?RBpa>`$#s3l{55mrAIfH&2f$t1?)e%~8rp_{F:~x(d`(_p.oFB' );

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
