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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0aepmVbmftlB8b8AT3ts4+E6HaE5mjlUE1prQHDI9XxE+qyTbWuKZCzNQYF0p7zdFTwyVFKR80n2/ShPcel2Dw==');
define('SECURE_AUTH_KEY',  '2qYrqGz6aTQRux6gFA/s8BJ/qgLxuBOm/1iYcWVlo8JrsLAGbjBPQ8JNF8lisfIwaUvIBLBOGRMOqP87HJz4VQ==');
define('LOGGED_IN_KEY',    'R52OoapZyaeAFoLkl60MZ//EIM2BlSsEa5TMoLyHLD87h71ljJOHDToWzMyG4o1exj3ERLMuggOHkHq8DtK17Q==');
define('NONCE_KEY',        'DWGyujUYqdGfeEPnBVMg5uEPWA3DT3oAXy5ISC25wxmAYZr0o2E3EuTB6/7OaRAZ0uvEwUZoVWiHDGI8hvRWDA==');
define('AUTH_SALT',        '3VbVZONsFdDt2GtAnESxR+08RGiECtB530HJuiyj+RdQj2rZDzQW5+7Y/pdSbwPzT1IXSqgQiL8a7qZdkbgJvw==');
define('SECURE_AUTH_SALT', '+ncuPlklKuYMB8fzIq8TSm35UoHA6GChE0v4uFA74rbjdqitJFEsf7RcFRhZIg9P2d+UPKkFmu2zV5pPf1mLbQ==');
define('LOGGED_IN_SALT',   'ZyXDA4MyV6QyJqXGfQavUTK9OQR7doGIHmRb5JWLZDIbYiWftt8Q8vSTpDerkc+rLfPfzsnmULbj2J1Q+j2w+A==');
define('NONCE_SALT',       '9ydlb12wrBhpHENjAYy3h8q01MZ7hJ3DddVylWW5NOQAsD0OP8xYPUBYZJaUIbZwco6uKmasFBm+ZtzBS36atg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
