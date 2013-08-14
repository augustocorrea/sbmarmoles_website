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
define('DB_NAME', 'augu115_sbmarmoles');

/** MySQL database username */
define('DB_USER', 'augu115_website2');

/** MySQL database password */
define('DB_PASSWORD', '1P,ypMskr{pP');

/** MySQL hostname */
define('DB_HOST', '201.235.253.60');

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
define('AUTH_KEY',         '<OE1=d@qnJ9lm HrDXQwl~nLcd3,N]|K<PRwYW[s,j{3*@@P4s6y/vfF_Vue~6p,');
define('SECURE_AUTH_KEY',  'eys!>3s6Mx.l8D-j< l@XOxuBENnph0mX:C8G!Gq-vh3}.6KV!Ej_G#]>oL.z<+v');
define('LOGGED_IN_KEY',    'Nv&615DMy;xKJp::@s*tn-F0VTN_7{h3cr&9`[fQplq5`*>7=dE-GvwhqswHwF.i');
define('NONCE_KEY',        'i1`;AmmhT<QZ<%p~i& NEnhbic_>UIBM69c.X-b4jI8OB[)Q:D$T%:,6^gL`,:eb');
define('AUTH_SALT',        ';66K^Ze}Fiq:{h8BU8$[:ql~ws+5bSr4<4Uy]zJnS~%=PVi8,$A;F79V9Er)__Eh');
define('SECURE_AUTH_SALT', '}$?,9}.mvl~]}hhX<d6ELIuEt^TJZ,AfVSvcG+:KwWu%nedT6LXM8tkPTsq GS{F');
define('LOGGED_IN_SALT',   '0r87E|<iV*uVKtF}uP9z)MU1%.M2)J5Qzh^RIuP@ezAX!t7 -Hz6UHF%0YMRRIH?');
define('NONCE_SALT',       'XYEk!:A?;8`$?}WK$f>0:trK:<K#A1D$x2Z)@%RXGs5xuErYEz DF34rbyYOFzp0');

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
