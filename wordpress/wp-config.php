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
define('DB_NAME', 'dulce-vicio');

/** MySQL database username */
define('DB_USER', 'cafeteria');

/** MySQL database password */
define('DB_PASSWORD', 'ci3spEv1MUfuBhpS');

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
define('AUTH_KEY',         '=M+NeNSuUWF/tR|a,x-2-^|z&cVB-EEx-0-.8IW+/x*W8j?oRAQZE}/cx|rE@x8j');
define('SECURE_AUTH_KEY',  '3PsWRUka%BXX^P]958<y-=jvlIu3P8G|=m1pRK$#VcD*X|`A40MK,|6I,)T|?9*p');
define('LOGGED_IN_KEY',    '#>j,D{em$Htz|kK;$E}(ry!&=J/KHTqk7XKQ$iOXT= dls{gexj9`U|R4Bp_Ftin');
define('NONCE_KEY',        'GkNIi_U|+!H3ESv1wm&f%.OB<,YM?dQ:PgfG~tV e4 j<rS_ady.%KpGm.:a6wD6');
define('AUTH_SALT',        '/~@f!bgdMrVZ;(cl7TF/($*rtOrgNopO-&J*|V0oL{sxU|*m#gNvTUpxOeJXlMK.');
define('SECURE_AUTH_SALT', '3Dkz_+xk<*lh9}U([}M^CR;%-!$f3wp8#7B1gRN(<j2cl)+hi-e=~6%_PPQ+_H`9');
define('LOGGED_IN_SALT',   '%^5_M3MsN%QA(7]cXW]o:ZMv Qb3g6qKWL;S*BJy?fTQ7O|UJ(=-G8QY1g{/#QBH');
define('NONCE_SALT',       'v|K6z-6%EMOa9Et+l^N:I36-6S`5kU`y[_c;Zb{S|AgHyAX<?`zH7`w*$U2lo0N4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbdv_';

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
