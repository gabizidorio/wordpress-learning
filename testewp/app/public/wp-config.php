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
define('AUTH_KEY',         'VXDzBiRGidm4dWNo206SHAuA5LoQBMvAnl2eg3eYWzMXxv9cKUm/JaEMRsdroG1n7midDHaDEEqD13aPRiyR3A==');
define('SECURE_AUTH_KEY',  'LXhPp/4TEMEtPsUpy0ZMdMxK06pgunby817jcgmCWgg9wLS+nmq4GQdtlnD2E2Z7m5LKrcZhh1l/JVSNecuQ1w==');
define('LOGGED_IN_KEY',    'oC4uSJJ3EfZniD+MkPI/kdizVDplpa/Ud2gk6FeGvBufIUKIsqRMu1cBNe5EZdZDC19gXdkzquijK77Pv5i88w==');
define('NONCE_KEY',        'vt+YwxPG0PG+rbs9wsYYQ7KEwOKixlRCW71D+SjUxkFL6TpK/H3HpM4lEWEipwzwTyd1h0I4Ex5McHBvrvWNsg==');
define('AUTH_SALT',        '3RljoDqhvlem1pJdNvWlUru4tmSTj1k7eM7Y98wV+W0JsidBjAy71K/nCgpe4Pb5Gjdswl1Mzfbu7g/eRyB1Rg==');
define('SECURE_AUTH_SALT', 'cPeLsivHQWpyFxXNBmQJ1HzNTxhRib7KeX0Sk3nM64gs1gB/+/JapP3GKxeBpM02I+cUf0tYS09E10TdjHs5GQ==');
define('LOGGED_IN_SALT',   'oltLbv069Unr4DIBisUch4ZuN7WheuEPBC5muO28zKKptmUrCnfJUDaiQH+AbX+NRJGu77xT5Xb4QXw75H3XNg==');
define('NONCE_SALT',       'RB3CJtPAP/Bb+FydEslkW5gYeZ9Zpr6XIN8Xfbo+i/lb6dVyEfF/iZOhpEv4dgA/rbOaFhuHMnJQaUPoQ+4bOw==');

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
