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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'smvdu-alumni-db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'smvdu');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'smvdu');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j[:.rlLe&}^;20e !|4:hvp-J#&le^X8)c!`MSdX-gu6GaJt$h6|mOdD`6|l/^ER');
define('SECURE_AUTH_KEY',  '[KW?}Md!#SlkMz|q%r};;9:-EN/OaA!>|Oe64V3S}KbXZg*h|gv$Pf.UBtUZ0g#m');
define('LOGGED_IN_KEY',    'AC.%;4XM |8jrHpxVZ4%-96],a~kkY-iMs|?^^5^@DY8{Anua|#kDJLd`L.5V&hs');
define('NONCE_KEY',        'FI.R?q-2BiLi,8hlRRh-f^kFiaCfC:.-.Wo1OF&o:+?~)UHE=:Yg[]!m0Xev2{Sk');
define('AUTH_SALT',        'raB$tt+8#[%?Ylj+*m$|:gjmKwdb@mVa$(:W^~I[PpJ7-T5Fuyv}<rw9=jss*X53');
define('SECURE_AUTH_SALT', 'IW8n?g&-dt;DSz7?3~fneMK3:+MXPrJY|xo<WS!`Sb5(O3J0S%o{:%+KtS+vkdO[');
define('LOGGED_IN_SALT',   'mTkXB.SkJ[f4[8qxCYM_+|C%5Q^KS?M&(KAFJ+=@>rr~V:H|+^s@g HjSFft:_}|');
define('NONCE_SALT',       '`/b9+-WTj-~|8DY=MUL`vA>||e7IeE<X?1G=]A5IHHb5Au(bj,X7m+%a#r5rC.|6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alumni_';

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/app');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
