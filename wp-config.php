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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'g8/L]B*n]6;8AA^-!;+Z>pfH+;+4L=MsDLOj8 n|3,W)8Qr:WK0|`QLd?4(@&V}u');
define('SECURE_AUTH_KEY',  ',(m h6{eC_?0h}R8&2+.N5|!B%kGUlfrHH_/3 M1M!Dg(+lm^E/z{+!y[b)RiH?z');
define('LOGGED_IN_KEY',    '{vU)W}L8uBG~Ntg`t!+J|&lau`fm-q=+-Y1`=bfHtzzXWV]EC:}?.COVbwD]o]$U');
define('NONCE_KEY',        '-l3_=q,$_QV^A-fv=4t*g01^k*TRYGSu$4FBT5U-~.z:PgAI@M&t/p(8[SoF{~w|');
define('AUTH_SALT',        'jNedk?#>>Y`9W=V|jnZf>D;<~}<(8AC@XV?-pF:T1_cu?=FB#7Ub[:2s@EJr1(a|');
define('SECURE_AUTH_SALT', 'wH!{VPP|S1j-64pR{kS+3i{0Jy+rC5:rF?+4h,8U#3=AKx}gcue:(Xc-*K}JY8I&');
define('LOGGED_IN_SALT',   '.`@0Tc?LG{?vDo!HLQZycxqeg2mB@?8fA>]a;js/zL}[LP3,fl%Pe4XA+R-B|>.N');
define('NONCE_SALT',       'ZBTOg7H0(//U?}~yOPr{)k2dK&!q#3^{J9cyhrcZQ#b/!y8-nT%S?IfZ$5*+zTR>');

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

