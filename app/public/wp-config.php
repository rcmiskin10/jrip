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
define('AUTH_KEY',         'mmqtdfsQlPd2vcS6sBD05HQaeN1ChW9vaTq+UMjtpOFfIJC9E+ddfqrwnHC/BYmjwvyCz0tfqJDRnghMi+wNhA==');
define('SECURE_AUTH_KEY',  'aS89pcfdavUyPA92q6uoXyt31RYUYqKbOPV/+N1IXWSUWlRzQ7TjH3noz1zZ8r4liKMQBrX9PFyc8DjU7irDWw==');
define('LOGGED_IN_KEY',    '4AllESv/8Z78oFJPTHyeZsGhQ3nzTOOcQMKmbfRuPJgMFFvQiVsU1R78Tgh8e+0CWLkEui8qVV2NFcPv7pZzRw==');
define('NONCE_KEY',        'Zw3m7pNeIC96awYCmR2PLE+xWVtBiN9TUTn3xrDiDQZq/UoKI0AAkFSLWtOM9fc+7vrtJUkbqkEZnzbpvBeedg==');
define('AUTH_SALT',        '/F/djS1r8pcYywQEcU/+9XxALPAaipsf3ApN6Lw79PtsrioO4gPVX92RD30iZ2t27FhgSyZ86vyY31laFRSL4g==');
define('SECURE_AUTH_SALT', 'KUW73/5MsG4SoCzHrSHoVVvj3fSNbGYATOH2VP0hckKCrlqsLS4GX4QL9tA9eYAteO03LAWiP6GmqxltcOEirA==');
define('LOGGED_IN_SALT',   'O5/0FrDTY170T+SYfspZPVqvhkXI8I+Qk6fgGJkl9VUR4c68APGa94ypk2VkrTlPCfTDNq3hSDFuEzrXauKVQQ==');
define('NONCE_SALT',       'o/d4iHBEPFk2+Kj987pZrfmyVWQrO+GWXxWuLDWd1bAEnxmHrxF+LbWa7ZUy2ygQnjMZSu/5RrB5g2OEqdq22g==');

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
