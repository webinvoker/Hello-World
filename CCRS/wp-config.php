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
define('DB_NAME', 'CCRS');

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
define('AUTH_KEY',         'ecz d`AeO9`9QSv}<L0xEU]V-4jphKgq57tCi`x5oaMBgu|t,nhb6(/0<`0rDzpj');
define('SECURE_AUTH_KEY',  ':*%#5VZrgZFY7x6FU[]3@;P~hyt2xuib#a5w ,CMY[3!WgiE;CdnGTP rG py3#z');
define('LOGGED_IN_KEY',    '0y!SFg_9CT_b.B`}H3Ba>y%r>GU6c*Y-LQ)4m&4&|$<0tdl5kinBNVhi:<kPjy?d');
define('NONCE_KEY',        '|qe)e*GHT[)xZ=nUO|eT_jh()~?1.|j@3vEq8G.1E)Bqg0.iuulAlczH&wt!#;dW');
define('AUTH_SALT',        'D<-BR1sxb&tj3#W7Ex V,6W|ctJCwoN7Ex9:2? MTre5A7W760f6]Kr[q?.w8i2+');
define('SECURE_AUTH_SALT', 'IlGY=H<k)Ov|nEUaw2PeH~.WUt2_ZSvcE$eqP5/xJ&5 { r+!ytfBlpSvDOgoRn)');
define('LOGGED_IN_SALT',   '1pGfQ0`5n&,^)^j;WFQ,VEVr?tVYff]B7+O~[r(NGdPMU`X,8yp(K^M6SWpHX{N7');
define('NONCE_SALT',       '80mN@RRt;qp=~8wAHa8@%u=nr0K/>EN~]o<QKT~Z6Hc _JO{XttscV/}*4{K*w~U');

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
