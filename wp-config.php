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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'qdDUegRn4Q$z|$)~Eb;elYw<Q?$< &Hz 5lXZB^3-7dMz|oyPXgcV}qp_/AS*E{z');
define('SECURE_AUTH_KEY',  '+srP9qs+UVNHpzuj+3*w~SOzq =m=H.Zs Pn`W<;:g!M;0=~eRjF4qqnhqjBisd,');
define('LOGGED_IN_KEY',    'XVR&S2]&2k3Np@,1121UBiDa3V}AH&*=?Cp[@vt>ds[O@P>leFbc/eCgjB5n#D:D');
define('NONCE_KEY',        'uL5}Xs(Z(5 Zi_~>]EoQ3&:7{RHUDat0WdLom_fvFNs>7f-a5wnQeT&tvn`xZ7|i');
define('AUTH_SALT',        '#CF]9MCr2DSu=`_<]2greCfk?F:D6M7;m2~TtA6g0d}AW0*PUH:%d-T&z?5uU*qJ');
define('SECURE_AUTH_SALT', 'DKJ1M]&b)Gg0b]70,a@L^RY@w3``kJ1Vy,|2 3^/D85DT9Y7h|^<eo7~PYXwiV(J');
define('LOGGED_IN_SALT',   ')ufGY?(&$|D5RP,v F0o?SQ5b2]WbCJnKOt$KT(RFXn` 2,Xw_XEY4 r>bt/,SWa');
define('NONCE_SALT',       'E2LKt;4N|g#fr5h>Z,M!-szEj%J,E0vSs^~:.&0W r(y~;zu.$V2y8BP2oC=iy<9');

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
