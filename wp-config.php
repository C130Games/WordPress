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
define('DB_NAME', 'WordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rgO| Mw&9!{ctr2Hb@lm^$ 1H86+C4,3frx0>H;%hV.tjAhtI8wTq!ED8)tKG18-');
define('SECURE_AUTH_KEY',  'O^<6DpZ>ESP+rj9)Es*seD/Xytib{<uwQuh17Q}pCP,.&b]T@2gQa1yrxwrtIGi-');
define('LOGGED_IN_KEY',    '_}{,_}U+4: ,6q%Q4}V:]!r*`2 Ja7xAsjp@%)J15[pMT_`S1IE@B7i#[wDPAnkS');
define('NONCE_KEY',        '6[aqkTQ!#DXnZcCM))Z4-GY<m|6b[;/HkD,.-;KG!&`{ovELKwlSnpp;*pTR#nlD');
define('AUTH_SALT',        'Uuc=U$t)I~YIRzvg;v.(3L,8OY)p;]deHDHOm<C<0qCEpe$4t{t={J~(bGbH[_#P');
define('SECURE_AUTH_SALT', '7.: ol>Zt5!D3l!<W4G3U8^(|J70TphNT0M|rvi<LU,mU,zf+rAZ:t1K(G|#_i!b');
define('LOGGED_IN_SALT',   'Gs$@iv#/h97|`pJ~(|8Wz&5`J>ALxe|>5e92iX0s7Smy$k&n>JQ @COPA]$[qzHU');
define('NONCE_SALT',       'NjoxSv&UIu0]~l@ui uLil8/j:997 orBJbyFwuAy?S5U^u||cPL9Q5SyLR`tYzz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
