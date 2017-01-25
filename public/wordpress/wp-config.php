<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
if (!class_exists('Dotenv\Dotenv')) {
	(new \Dotenv\Dotenv(__DIR__.'/../../'))->load();
	$APP_DEBUG = getenv('APP_DEBUG');
	$DB_NAME = getenv('DB_DATABASE');
	$DB_USER = getenv('DB_USERNAME');
	$DB_PASSWORD = getenv('DB_PASSWORD');
	$DB_HOST = getenv('DB_HOST');
	$DB_PREFIX = getenv('DB_PREFIX');
	$WP_AUTH_KEY = getenv('WP_AUTH_KEY');
	$WP_SECURE_AUTH_KEY = getenv('WP_SECURE_AUTH_KEY');
	$WP_LOGGED_IN_KEY = getenv('WP_LOGGED_IN_KEY');
	$WP_NONCE_KEY = getenv('WP_NONCE_KEY');
	$WP_AUTH_SALT = getenv('WP_AUTH_SALT');
	$WP_SECURE_AUTH_SALT = getenv('WP_SECURE_AUTH_SALT');
	$WP_LOGGED_IN_SALT = getenv('WP_LOGGED_IN_SALT');
	$WP_NONCE_SALT = getenv('WP_NONCE_SALT');
} else {
	$APP_DEBUG = env('APP_DEBUG');
	$DB_NAME = env('DB_DATABASE');
	$DB_USER = env('DB_USERNAME');
	$DB_PASSWORD = env('DB_PASSWORD');
	$DB_HOST = env('DB_HOST');
	$DB_PREFIX = env('DB_PREFIX');
	$WP_AUTH_KEY = env('WP_AUTH_KEY');
	$WP_SECURE_AUTH_KEY = env('WP_SECURE_AUTH_KEY');
	$WP_LOGGED_IN_KEY = env('WP_LOGGED_IN_KEY');
	$WP_NONCE_KEY = env('WP_NONCE_KEY');
	$WP_AUTH_SALT = env('WP_AUTH_SALT');
	$WP_SECURE_AUTH_SALT = env('WP_SECURE_AUTH_SALT');
	$WP_LOGGED_IN_SALT = env('WP_LOGGED_IN_SALT');
	$WP_NONCE_SALT = env('WP_NONCE_SALT');
}


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
define('DB_NAME', $DB_NAME);

/** MySQL database username */
define('DB_USER', $DB_USER);

/** MySQL database password */
define('DB_PASSWORD', $DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', $DB_HOST);

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
define('AUTH_KEY',         $WP_AUTH_KEY);
define('SECURE_AUTH_KEY',  $WP_SECURE_AUTH_KEY);
define('LOGGED_IN_KEY',    $WP_LOGGED_IN_KEY);
define('NONCE_KEY',        $WP_NONCE_KEY);
define('AUTH_SALT',        $WP_AUTH_SALT);
define('SECURE_AUTH_SALT', $WP_SECURE_AUTH_SALT);
define('LOGGED_IN_SALT',   $WP_LOGGED_IN_SALT);
define('NONCE_SALT',       $WP_NONCE_SALT);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $DB_PREFIX;

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
define('WP_DEBUG', $APP_DEBUG);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
