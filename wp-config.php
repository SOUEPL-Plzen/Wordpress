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
define( 'DB_NAME', 'webovka' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q+SKD[{{]-}-?}8n!v_P&b0n&-JA~jqq*Eb_/l!<Io:j~}t4xqC`S2<Bx1I^6*w7' );
define( 'SECURE_AUTH_KEY',  'kf*aLyeL^/N$V6d:I8;XQ#@LKEtg&zK}UI x2%j?&+o][q=4sS?%mc8f(zM{gcxs' );
define( 'LOGGED_IN_KEY',    'vW|vr^Z=.]HPHyns!i/z,qXJ%*TbHxilX~ -OZ^GGj_)@f|=cx0U{:jBBq#m+WB<' );
define( 'NONCE_KEY',        '>f;ZK_],GDzJr9&$-?KQv/xTpRt_6:h>^>vZ!Zjx[fB)(ztR-JtNw,Gz}4q> g&@' );
define( 'AUTH_SALT',        '6Hn7**_+@zo?]a.]*Z))d}bRH$?bqBsUARpakfD6+|{Ku1OyCZ^7.ZO,B<!-jHU,' );
define( 'SECURE_AUTH_SALT', '3{{+$r7?3A,?^GI<f><hlN=uP{dA;}C5a%E$|}Du{.UQ[|*6.1Xz]se!7yEwyE:L' );
define( 'LOGGED_IN_SALT',   '|B qg5$j2=naK3dUvM.wD2)Iya)o~n,4Or6r_Ibo><Y)ZT [adDJ`{LdVvmdr?x.' );
define( 'NONCE_SALT',       'tF*J6~XQ+,bj4+:7=FVFR0O7;Dp#mw.jNxhwsKp<B|i((daYa^fJ0y@!un2q~+xj' );

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
