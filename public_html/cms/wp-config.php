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

define('DB_NAME', 'operatio_wrdp1');



/** MySQL database username */

define('DB_USER', 'operatio_wrdp1');



/** MySQL database password */

define('DB_PASSWORD', 'Xs6YYhfSlbH5ijVt');



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

define('AUTH_KEY',         '7mo~nJ9mK(u~b4KVw^h3o1s\`~Du*Ce;coXin=o7C*scVwLi4(:/bH!7\`5O53;BicVp?m~');

define('SECURE_AUTH_KEY',  'UBF#M\`Va\`wNg?H\`?(-~?lTxa/r^y7*AAtp375/Lw*pv3s/Mn2y7v?~;h/i3(;k4|ObEL<JeF*e?\`?3>?TXF');

define('LOGGED_IN_KEY',    'Dn6iLd=xHYACSHVP0uiGVQZ5Z8!9gzpHXw5o2GT*u=kA8g(ButKMrwV>>JG8yqSp0?');

define('NONCE_KEY',        '-5zsOaU@VVaB~0D@*kwZx6#!r7UO$tFT5npmjiMYf:bYIFmx8GxwQgE8M?7AfE@<oSk6U6S2w');

define('AUTH_SALT',        'tLOKydHvO@zQNNZQ>a\`tj<nh;T;?pcVxFrnkLKozdZf3FLe4?6<PABUTdOr?Qh*Gl91oK/-k:MO');

define('SECURE_AUTH_SALT', 'R5>f5/Hm#yEs!e2B4=ZQO)og0X:fPTFA4\`MUYkk*RvW#6@fq($j53i$37uo|n^J<viuSW@SHd#O!S@;Cg');

define('LOGGED_IN_SALT',   '|Dcck4_LNzl8g$jPt:zdnZ^Y=7^TCzQK_-pB/V\`VLK#!hPGy=J\`XnE;IoR~>IOh~C*nt|iAv');

define('NONCE_SALT',       'E2jcIRjX4OLJ8B>:YWbtyLA-~V)cAjAPPaSudEN_eSzpz\`t4|)Rd/=SXdt3)d6PCxpjJ@P>');



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

