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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '2WxL,t>xh7_**Z~_VCtMUdx(P)K.LJ-kmnKm9]z59qZ]n=K<1#+wd&h&mZtOXLak');
define('SECURE_AUTH_KEY',  'Ol@>Qp[-+Ar K+?n#[/L&Hp<N&NYS9@&NHxad*EHmra`Bs<{kjzNOpBa|o!:l6+*');
define('LOGGED_IN_KEY',    ';%#fyh!6,p)H-n=t#%Du_uBIV.ChBwp5g +di>C;6jiIyFcwC$!};7Z7[PB)MdLw');
define('NONCE_KEY',        'Y?$ 1(#Yc]y@M}Q(=U)jzj`x2P4s`vZ|7ho-e{G>Edn&+4BT[&Y&D.Xs7 +Jl7*a');
define('AUTH_SALT',        'iw64OAhmB?-g.rhRu9t2zCa!y1FGAcK|&=>/L5 V^6I~EHZX(.tH@##MekYcL[Od');
define('SECURE_AUTH_SALT', 'M:MM(o`r!)|<WrLQ-h9Cuf5qx;JDu?&2V{AWsMCd`K(Go-~msRp+8#+ypuuN8?TH');
define('LOGGED_IN_SALT',   ',lO ys^~][Ym!)R7ZmFuh03I>&^7~pw#[N:tr-w{E2CTsfPV0U9y9R 7Y|,c|J)P');
define('NONCE_SALT',       '^TRS]U|&tz,CO?aMOLY+<j.KK,SG3$Va7>c?**EcPqw3XNGB3Q`h.ag451[qhaZF');

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
