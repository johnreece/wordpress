<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Moi54jsr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q=<d_mo!p3E#:D.Y[2jZ0=gJ &YJH?3XxA4|@6Pe`7f.D]$Y%6o(Xx[+lTGU)913');
define('SECURE_AUTH_KEY',  '_MyYj2+K&l`h#eW5)%E-<uZ+M9|7X(X#l:frI3/O@.xKYUzRnK; ].2S4L{{*o-C');
define('LOGGED_IN_KEY',    'J:)CxzSg?X!b9IS-rnJQ`=9&#hDBv7VoIVx!&].z%)iBc~tF.&+_o4 *%`mzwZh>');
define('NONCE_KEY',        'cBWYJIZ>V2D zqXa|r@9QVZsSE(iW?%a,8LI9@w|?19V4uvxH+T;pzXx![x*-zFS');
define('AUTH_SALT',        '.=E2?5PpwVurjj}xbs!=>}K;eZ#@+yV>Rd4~TVyZup`@<=x.|+KP6RW9&i(*k-4K');
define('SECURE_AUTH_SALT', '^dnF $`?)T+8~ciCFKM#MA^y`r8Y!=APXS*9<[!;p OAE#}TkIcuh5 }tYH]lh*P');
define('LOGGED_IN_SALT',   ';NcI4_1V7IZyZ:eZPgxE$c(? HL~Nq-ut(_7A}l;0>]U=8MwV|.|CZ(-GwRe,pVu');
define('NONCE_SALT',       '3nF((#6@iV Tk!9BAj$3s9gD--WFH >qPKa 6Zd9FKVZHp]Zc&or_R10{:abB#J.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
