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
define('DB_NAME', 'letrungdinh_11b5');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CaX|w1<.pc9 YU]h ;|S3`-6%-NZ|?|-(?d6{R^DjO&7r+_Cn?mzlH1Cl~?]&R|S');
define('SECURE_AUTH_KEY',  '@oa*XSaq-~;3QH,f[?Xv|gwzP0eJtxNsAXYvqWyO*j K+E2#U;3DcA?pKdJ[t(^h');
define('LOGGED_IN_KEY',    'jdR,4FZT^}fU CLA$AmB}B|Dk84yVC$Y0Q2&z)%CE7-C90x<%E^1+UDRy>> [?3+');
define('NONCE_KEY',        'e-6u7Z4idBwh-[`B/^dn&mI{oo_mph.-5+)$%QFRN.5.!j5=xd!Zfe(Vz----{i4');
define('AUTH_SALT',        '_@QdB|F1XB68>k4b}8,__6q_Ws&E0t4&b^/^JGv^$oGi}d|]^J./BxcW(Z_1<TSK');
define('SECURE_AUTH_SALT', ']v>oiUDdyB(:b1mn;8&c.peO;;KF,]vE5z1]Oph,nHio&Lw_&X-86H,m%K6q,VCO');
define('LOGGED_IN_SALT',   'N&}E-FMz!|a%/uMV-JE`y{kT9c`lV&A7EaXL3Wk#Ljb%_ *+OCxt,T@y%d+iHcPd');
define('NONCE_SALT',       'nl]AX8oiiz<~<(%V.hBm/-nU+qejf0$eO1ULbu2kuy9,+JBn/^ <_-(Bf^9wst?H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
