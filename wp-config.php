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
define('DB_NAME', 'trimurty_foreverid');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%7~m(QDUE');

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
define('AUTH_KEY',         '-D+(;Hj}8$nE!h:nI>(#.$-xLwe/pA|P>Fs[X? )QQ_44Xp]Oi+dTniBw<-OI_:{');
define('SECURE_AUTH_KEY',  'uvObdf*^qYa=*UT.GmZVELhKc_O`s<6n9EoGEbYu&4`<$4ms.b,)3sL>BK&anpa[');
define('LOGGED_IN_KEY',    ',%7+ E+?}WVBEf!}33r~s95~P}5S$t45@^.`*W$}21BOw<hmniQ%acpUKJFY5:!R');
define('NONCE_KEY',        'O <;v|EciNF6=P_#a`;{bLk-!mde;vc7m$ryxX]{0>c ESSB_Xr/K{KL@1uX=tod');
define('AUTH_SALT',        '<Q,FjdX3;l=DrcGzHM:Bj?[gR([geu.<I_7ZPF=t`W_~E|S+fOEG%57DIX`#TCn?');
define('SECURE_AUTH_SALT', 'Q]Xl|w.wr>LfE.Io-h<k_?_n)Kp>nx-+6*sfB;[SHd#iI0GC{Aop])Z!*-)D37Ph');
define('LOGGED_IN_SALT',   'r.qw xeGNONN*y|,9G70PlnP%WUXjPSkJ1oLxh8&EpdZq)huX@QZ@4Z{xWzS`Ce<');
define('NONCE_SALT',       'l3!eI=,G1}w-GNqsH=g0H4JJXB9|.&b*x~@Zt@#hNoY{m&QnKjjfg*di<|I).[[s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfi_';

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
