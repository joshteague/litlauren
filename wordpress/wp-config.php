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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         ',3oWL#ba_5IT>31R<E[b:~2H)Et_=E @*(i#4:Fm-M09)(Z|-D%N{x!hs5%QOfx&');
define('SECURE_AUTH_KEY',  'V{Ge1+;[K@,l}bwOBpe::0;/6-GlRfD27`|Ro4z:H!y0`jZ[<s.C^T?eN*Kqzv$+');
define('LOGGED_IN_KEY',    ')IpF& {**JpJP`I@m;n*-I$A_F40Hyj#@u-FLe;CAx3=vw(b8o`Zl61]408S_s&T');
define('NONCE_KEY',        'u%b$e%W,/o7!9wReLM`e=X1q}Xla9>JibpV^Fg+S-e*GCmES0&e&;Qi=QxiS&=[V');
define('AUTH_SALT',        'ASROJ3p&R#Dv2dHy9yAJ+x*/Uak3Qq9]q[wuSjW{<tTiy%P[bxX_?7dly2=9rg(5');
define('SECURE_AUTH_SALT', 'kgIKw}sPyIJ `:P.krBGG}WPPzkkI0#DNjpU^Nuj%x?vZF}H]g;-j(ys#o?J,VS7');
define('LOGGED_IN_SALT',   '97z~NvCgOdH~su7vey{j-=>F!b[P^d)l4P_z00w=EDy@Q?c7iH;WWaH]b7]HwKvA');
define('NONCE_SALT',       'yl )]=<AA~:!1?^w^}``r[{x~|]&hvz+|3O;jyA;h49CGR0nYuMnC=Ihl5F2>30$');

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
