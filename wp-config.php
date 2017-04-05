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
define('DB_NAME', 'lustfull');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '68!%Lw:DS?P)`G{@&[^H{nS%b B;H(sJ7pEN6aPm/i` 7/?_s]99S}>?E!@YYv:#');
define('SECURE_AUTH_KEY',  '+62@g<pM<h|T!f=6e2wyznayaVr;_Q5SY]a9])hTxIid,wXy3e;^NBH&F;CBlFte');
define('LOGGED_IN_KEY',    'Gq_5d4$GO^]3;QD)ZY0C[YL@HM8L6CZCU /cYxcW@XpFgcMpU1X8P)7(;T x2iCF');
define('NONCE_KEY',        'adCvwdt[!1C1l(8vGziFIg}5c5eZ*N8ll!IsOx:jPL@J^mZ]_o>P*.Vlc}*gxauU');
define('AUTH_SALT',        '^&a`p>7B.D7YkdQi}1Ob?VtWZ022Iq_Xcp0~.(<S$_r4OU/EnRA-9F6 0?wAHB:e');
define('SECURE_AUTH_SALT', '^ixw7=:Nn$5a9PSR8`W]`W_ww2GQg<i6EJz0:(R>v4RORoWo*gfNW%$>[*ww{vau');
define('LOGGED_IN_SALT',   '`lyw_Hrvg:vvc<em<&z#BB/E7kezpJXqzzcgWYf?E;KLhz=7 ,0+0jp<PWJvIH8w');
define('NONCE_SALT',       't4MUVh<YmHl2<NBo{}T_uf5eP^W[KOMP<X-N?rsuh.EvJ[V.5vo#zr*SkT)+_Iw{');

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
