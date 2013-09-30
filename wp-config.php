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
define('DB_NAME', 'analytica');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'BZjz8mL,:jiO*b{3@[x>B~YQ[;p.iHFVr3OQ$:P,G*!lfYKG3wX71P D>#?_hro_');
define('SECURE_AUTH_KEY',  '7G;Zrt9f>2:q({]Bh:I1R-e8yY:pYD%axuK|!-(@Hi_o8}Qe.nPA!KOS*oj~-&|5');
define('LOGGED_IN_KEY',    'r_#)z!.:16nT_(.cHjf@AGW=&dyOEl4uGEeCfET/8#+81*!TO<5kPtbGame1{NyJ');
define('NONCE_KEY',        'g;n83Kdc-TY?Z6hp4MN~I7v{::15f-^~P-OfPu0V`Q!Mr/)td}U3x2/}_lc/&PPP');
define('AUTH_SALT',        '[+.Xm-QegH%evxnAC;(]UE3Ds%gS}CTB<@e#$Tr-TU#(Y%ZI;FB]*:4e`sb>Su2)');
define('SECURE_AUTH_SALT', 'nZB,U8P-7r*B`P7o,7}~<8f]Uyq*4;7SQz2hT-c(;<kns-WJ{}sR<nHe6coA}3k0');
define('LOGGED_IN_SALT',   'EZpDVu?g6Tm/_2u[`qX/UN7p9qfq,6:s!(Qvb-ZeL?N;mk]21*mIqBB*$:E%zl-L');
define('NONCE_SALT',       'CqR:c;zeLV:he.Hu|Lwwkt 8vMWdB<cel1O7b%;I-U.V#a)f4kC(G^3O9NCe_Xex');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
