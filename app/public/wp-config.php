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
<<<<<<< HEAD
define('AUTH_KEY',         'aW6iAINd3zwmi5e4cMd8ABEN6xni4o9d0gS/AD6k+VDtJhQO2RCRt0PlCCtWOoPoj2KbQkTcqEkaxiYnmfCkLQ==');
define('SECURE_AUTH_KEY',  'xcCmIVqlkp5ixzG+5r6K0o8dx2XBZQ2M6nOlu5OYhlzFXxe6wXGdPCF2+vbgxuE+fY9GfREDW/HBQWH1Te8KDQ==');
define('LOGGED_IN_KEY',    'FhzWcG5ftV3xGFO3a59ws8XuHb+GMC6wXPO2UvkXIyCyojtS5YlcYBp9pgNZz7rjpjDwyFxDQoH7qrIaShG3bQ==');
define('NONCE_KEY',        '1Vp9IAoE+Y2rdXOyP6C2+LVaOSEu4r0YB2Tv51oITHPdkCyy7MMZxq30mIheWjnfrYiU/rw++S1MSZwtclSLfw==');
define('AUTH_SALT',        'XkxjWXPLfeokQYDJlyc8Y9m214zqIFx8guU2hrpeM7Nh01DWh7LmVxheK46U77PeYb28kNV45appsE0/QVs6AA==');
define('SECURE_AUTH_SALT', '8dMViRsD44tsGGljrBbLhOg7KDIVwAJbvnSlL/G+uGD8PPC4UtNK6etBGg8d/zMxaX82SUDEbnTFXzqLCauqww==');
define('LOGGED_IN_SALT',   '92N0WbEp2IdzDSou7nPR5M8ZH+aGVPhqaux1C+mqF1IKvfmqm/X1enDgtvbj8wkcxvOdkSVra9cGhNp+lIEjSA==');
define('NONCE_SALT',       '2jsgT/Cwegik/fdaiTac5lZDczfAv5WzKgirgTck2exdFsF6liux99fI7xvRQleipiLgbFoCgMb4tcvLweEZtA==');
=======
define('AUTH_KEY',         'mmqtdfsQlPd2vcS6sBD05HQaeN1ChW9vaTq+UMjtpOFfIJC9E+ddfqrwnHC/BYmjwvyCz0tfqJDRnghMi+wNhA==');
define('SECURE_AUTH_KEY',  'aS89pcfdavUyPA92q6uoXyt31RYUYqKbOPV/+N1IXWSUWlRzQ7TjH3noz1zZ8r4liKMQBrX9PFyc8DjU7irDWw==');
define('LOGGED_IN_KEY',    '4AllESv/8Z78oFJPTHyeZsGhQ3nzTOOcQMKmbfRuPJgMFFvQiVsU1R78Tgh8e+0CWLkEui8qVV2NFcPv7pZzRw==');
define('NONCE_KEY',        'Zw3m7pNeIC96awYCmR2PLE+xWVtBiN9TUTn3xrDiDQZq/UoKI0AAkFSLWtOM9fc+7vrtJUkbqkEZnzbpvBeedg==');
define('AUTH_SALT',        '/F/djS1r8pcYywQEcU/+9XxALPAaipsf3ApN6Lw79PtsrioO4gPVX92RD30iZ2t27FhgSyZ86vyY31laFRSL4g==');
define('SECURE_AUTH_SALT', 'KUW73/5MsG4SoCzHrSHoVVvj3fSNbGYATOH2VP0hckKCrlqsLS4GX4QL9tA9eYAteO03LAWiP6GmqxltcOEirA==');
define('LOGGED_IN_SALT',   'O5/0FrDTY170T+SYfspZPVqvhkXI8I+Qk6fgGJkl9VUR4c68APGa94ypk2VkrTlPCfTDNq3hSDFuEzrXauKVQQ==');
define('NONCE_SALT',       'o/d4iHBEPFk2+Kj987pZrfmyVWQrO+GWXxWuLDWd1bAEnxmHrxF+LbWa7ZUy2ygQnjMZSu/5RrB5g2OEqdq22g==');
>>>>>>> 301a0590121ad7aba50981136149ff8a9405ec84

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
