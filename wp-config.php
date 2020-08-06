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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w*2zBfuL$K>[DbvHaFgsr)n#c~0GTd;1oQH2)3a?-2[:#6qZ]TG:RGa,8zp&H>M,' );
define( 'SECURE_AUTH_KEY',  'P$DH2[A:<jP%Fvg4+MXCpCR;Q7p0G.j*KB=-F4*Y^V1<nolZ9&[g237|DO$?Iyuh' );
define( 'LOGGED_IN_KEY',    '3B1`Y!nH(4.!;!B;aZi`8,MYF?.#.yo40|}ZLB 7W,!I!mc8Ng5E+j.&d{auUj~q' );
define( 'NONCE_KEY',        'g1_;Trp` >?yu:nDFP6lVZ|#g7TIVT%Ll4|x@glkRWjF,3_dWK47dEV=C:/QKfPq' );
define( 'AUTH_SALT',        'EVU6<!E3y;_Dc4W&4ViWLOs-5M4Praq1>cOM,qkq}&Lvd?2=0B/Gy4/HTqpO!C6s' );
define( 'SECURE_AUTH_SALT', 'z@~PCo <3M=(UI495i]FDISXH:Tgu9$bo]4H{`k(hjA5RFzya(2SB*S*Q@$n@}U+' );
define( 'LOGGED_IN_SALT',   'V(k~bC5|~Y;xmeeKV7 O4]15sZY9%7+gA)o1X7yvXYBpf@X69Uj,.898=6J)L5KN' );
define( 'NONCE_SALT',       '&8N|ztOA.5JPsXA;<&OWn7Iqz1kX$)rN]>:!^`:&YZyBGx7_aU|-^F&[A{kjE2Z$' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
