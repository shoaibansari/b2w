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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'ERzHHEDdvUEySwTA');

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
define('AUTH_KEY',         '{utg:67OQ@Awn-J;gjIzDGlune>zjN!)!ZbTZ#=?9A&-}QOB]:!czr!>q1LT|q6y');
define('SECURE_AUTH_KEY',  'M|x/2CXd:)EaX`mJ}Qwj*PnqfXS6ao]sbliF7|Pls+f*o5yhvI!@ dW-KAq=~=^;');
define('LOGGED_IN_KEY',    'A._2d}q2G(2c([ce?0GN=6%!k[zTfEuk&Q<?-u5by>)b11CJv|}*v.bGz8]FFeKX');
define('NONCE_KEY',        '9jjBY)4bYzf!A^JTaiY>+86^2:7[w/}oNp@-T~,+4h8|!tZwgocw~ $)_V-TGqv+');
define('AUTH_SALT',        'j~|6~^<O.bdlE8zJo}f;F8#*2YDhBLO.KP/|:Aqg~2EG99fJ]-B?jK]N5baZm,aW');
define('SECURE_AUTH_SALT', 'ongk;zKq_ j/4V !*p#~<n)]ISa Qt]#o7wu3G_9]G4U6744*6fILYa=S|;*-UR|');
define('LOGGED_IN_SALT',   '5X]dI~$fdh6I{0|a>ji3X_>x/Jh2X-yPo9v;c-B7:wANY+|&mX0/i1d]0*4k}?=E');
define('NONCE_SALT',       'IioYPt$DNQX-Kkbb5(,oEAl8$_FnG0b{+px5(1wzrrpP)1T{Qh8X3|#p%neTbgCh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
