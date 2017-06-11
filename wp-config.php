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
define('DB_NAME', 'MWP');

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
define('AUTH_KEY',         'td5zn<iX2`1[RBBD]ZHNV=z=12.+OJU_mHzB 8pQ] z64x6Xl&]{H)Sietf;8p_w');
define('SECURE_AUTH_KEY',  'Y6T?eS^fcziUUQ,mbEK~Sr<^Sr_V%,ZXgLy-HMyf!N])g@|CeOsxdGNZupIlteE)');
define('LOGGED_IN_KEY',    'AVwLhcn61~hkVkg?&X@;Svl/cABQH>M{$^;^=W47)[Te){I8AvK0jc+&!!8~}_w<');
define('NONCE_KEY',        'kR9Ra4f7#QD4uT(_%]VN>^QErI3BI*X!p_-nL*?U$YTY0hP*o}.:tc2i7Ox$s>V ');
define('AUTH_SALT',        '*]F+Wh{Oh)L[bWe/ANBlpq+Ic,rw~`sc7HZYvfPeoN)g~!Gcl]u$.MaN9dd~vwp3');
define('SECURE_AUTH_SALT', '03V*hmlhUb(#4PwOih}3&jR150$tW~#u+s*Uo<kSO`=!L<]~GOUHl(VEmGEF<I5O');
define('LOGGED_IN_SALT',   'sa3>@I6N72;) + #aq-vRq*A971t{u>>`Z;[M=%{jR;wc!3vFnJ}>r$=C;z)f)(&');
define('NONCE_SALT',       'F3TXi>_Ly@BVOGFT-O5gf9GCra16;;dJ&=5tnbB~4?vx[1?&?=v!}L eWisXP0PB');

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
define('WP_DEBUG', true);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
