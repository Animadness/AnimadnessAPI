<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/../../'))->load();

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
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'KSl7/R;Q][3K),|kV( .X%UC1`)aya8&pJ6iSW+WBqZTLF;d5N/@q]wj3y.w:ZaU');
define('SECURE_AUTH_KEY',  'IE64u2Wp=5[@&6rN/?{xVc%eJX01OlXL~!>&eka?*cvjkJRNZ{> qS(9?m|}m9!q');
define('LOGGED_IN_KEY',    '3n;ED!tQvrg@FGa1.a{kB14[U)ciDBV;!};*}Yy12yxt_*j[/?w#Hr@}1wfy1Gnv');
define('NONCE_KEY',        'a+C]z {{Dt^TphT83e=+Ym(hcLh[XguV>=dB:TM[mo&!]wyQZ/P.1m9 l}(;E[o5');
define('AUTH_SALT',        'vS @Tv:d+%:GE#8Kud(86rPu|;X>6F%Old^)tj9jAW4)sh }?s:sBmijI 6Q(,OQ');
define('SECURE_AUTH_SALT', 'E`0x{C&s%j=<ka4U(bg0K!0FY@QWx%6~?[3:t!ds-WL,A|?{GKzTJn>J?G[3dWv)');
define('LOGGED_IN_SALT',   'rcwM0,n4[0G;K|!6&Pk)`(iJn+D_ {8PlyG>UUZ_6iJ=blG`R^5Q|2>6N}E^v5w@');
define('NONCE_SALT',       '6szK0-Q}y[@XXH8D_ibdU:|n^@BgU{Ev}G!YxUuW0f}U40& e0=l {A:p@609Vq;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_PREFIX');

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
define('WP_DEBUG', getenv('APP_DEBUG'));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
