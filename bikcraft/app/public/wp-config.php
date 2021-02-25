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
define('AUTH_KEY',         '5rlk7dbM/tgN4HaQT/A2cT0DgRz8GHdHbU/rR3FfIg8WLqoYSiIbkUhm1DmTg/ST4M28hWgbnnrJbzRDco+EmQ==');
define('SECURE_AUTH_KEY',  't/QzusFurW2yRTke7AK3xb2olmIWtcglowhrAwYNp+wr9LOG2NN3sy+NMER+3SMkC8pNLqGruPrVHq+m6TBnIA==');
define('LOGGED_IN_KEY',    'VYo6LDSbQ1b8ppIm4B0tuQbDFSUMyjxmOvyOFeNAMozYth86d2F/zMjnUWmnauMrq/NEWQw1ROPZXoRvxPzOSA==');
define('NONCE_KEY',        'pHSqDalxjmRNrnoViJGHG8/ej6vNnhrhfeiLNsZ1mDz0ltrttgJNTv2JF5k+aIUaDdyUd9Hs+nkuFGJbSbAAZw==');
define('AUTH_SALT',        'lcFYNQZyF33iWcICbn8nemRaXiR0D8HvVfCpCV9vTdYRfU7mTG8oKgnwGtqjDQzz7eb85EFHrq+VN5LWmVo4Tw==');
define('SECURE_AUTH_SALT', 'OcVOVlkU49/l6q2lWEjCUcFL+r9+1aDFl5BBKxjITx1n/KHh94IyQefZBhEaNzRP7mL0wHJE8CqZEZQKsEpHjw==');
define('LOGGED_IN_SALT',   'e0zEYG7ceZa51GsPt2BOP5Pf4roE823L362SXwzHNGNLosD9sWwQnC9sSOshhE/x99m0RSeMRafnw5f/0esv5A==');
define('NONCE_SALT',       '25VaD2vDEST39VnzSid2evCfjsTctca6nlWriLHhDjjaa+nl/DDxPvYUaQKVaAozzEVhrHfYt6iWrxL656jN2g==');

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
