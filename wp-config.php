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
define('DB_NAME', 'fancy_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'X#R/fUd|q3$*u=A@b,A|uOEe8%q|U/cAXw.v;||xTQg]xC^tP(?lJ+gLM#*ibHkR');
define('SECURE_AUTH_KEY',  'ujUr(Sl,a|[9d8FXh_aKnW4Y;7GmX`%<;Ryr)2?@69O, |-%}b}XAn=|+<LpP<k?');
define('LOGGED_IN_KEY',    'pmd3n-V8=14|Dh3!jbR%4GdFBY{DHd-5IUIue[alISL0Vk:M0RsA$UL+})BXo.q7');
define('NONCE_KEY',        ')o@pR|cakbi/~Iv>Cg-.oDL*|vBTn6OrZ._+>k+%2A4vhmp$9 1?a3~Q=BcWoGzY');
define('AUTH_SALT',        '<y[9cK-t[h9Dqv?SQu1lGjT0];]u|xiY7nz_##B<6PcB!B%rO:<WEzQ5>Hg6d+e9');
define('SECURE_AUTH_SALT', 'j5JK>*Z8g+ZY*i=F;}Ublrz0k`0nGhWbK0Bez`A-VS;1+MHg!^rU8wwm&=hjKQ;R');
define('LOGGED_IN_SALT',   'KP.wMq|^oV@<$MYK%qsV]Y;|D3koH-|etQLW23_mH+r|OtQ[FUq?VOyXUu?R/499');
define('NONCE_SALT',       '3=-,R`DMX;|(!j330eYh>{tKf/U|((v*hQ5.oW+R:KJ@J,:Z3`U/n`+q+;y&WxUV');

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
