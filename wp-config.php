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
define('DB_NAME', 'demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '5&5)!JLRf.{Fw<T~B;0[ytdEU+jC<aM_bd/.9cyj<%a11O|<bXI!ka`3/F&*_2J$');
define('SECURE_AUTH_KEY',  'H~aBc1K$NxcGgT(zMom`:yyIQre|o*t{m/-d_d:U)vg&1OW~emr^8CxHdBx6B+j_');
define('LOGGED_IN_KEY',    'rj*oO24<+u_:q+Dl-z70}!#sP4/BQQF,@*jj{ZysS*-,ZC2pV{t{lan;#h^[pjUq');
define('NONCE_KEY',        'w@9dU<dp?XgClUm*$C3@F$)62ki13=Ha>39nRM#pRNWr i6kM?F=Fn0oi*$b)d[(');
define('AUTH_SALT',        ';kKO8J5W}Q]X8]`.qhSoEyN?!ywXlZ=c}4;6dJG%;bZ;2#){{GdbC;^=f=3-/&I)');
define('SECURE_AUTH_SALT', '9cB`PvBpz, B->kD$Ys.kzT-%`4! VFK2s|6JIn_rK*f!98LSR|7SWi {2DDyRuQ');
define('LOGGED_IN_SALT',   '=e+<bnT!0Vt9dD0qhHqQ~ct4Q|{DzSLE+[V{EX`?Usg{o-^WL1f39t7+tU0R}C+-');
define('NONCE_SALT',       'T:WcdPpl}_cLN}5x0[XlS;:g+cLZN)T(}tdfnkI#/)!dt@,^Rz$oh[9E6SC)0+C ');

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
