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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'bsqWlzLlb5dNxPYk4mjRsE1p+Xz/N2xYiKtIPjlHs+dts08vMUrVuQaGKJyRb+AIJFyGmxfiqiEsEFQCDteglQ==');
define('SECURE_AUTH_KEY',  'jBKTRr/XayWGAcds/FnADCQglK5IqCW/qZ7WMSymjP3kWTMrHFjTrOUUiulUGiqhaSL1EuAqe6/kcG1xRlqiGg==');
define('LOGGED_IN_KEY',    '2yE6alkkhlLsd+6nHlj9+EZW6IuPhNp7mfqUE0fxDPsD/XrIjwojBLEVdeBv0NNO6A8HmkbCPiqFFJcQwPyJeQ==');
define('NONCE_KEY',        'Tz3VnragJMcCZg0IXyEnMalDH/NanSnw686nTr+TVqy4n2/A0Jq0xK5o1E2u4wWdYGBanolj4Q7BVSTeJGEtkA==');
define('AUTH_SALT',        '1uKQNybv4pns1wn1iFF26kHtV98WoHIq1LfcqqhB8Zgkx9cyj+CSHN4t5xogZvgnYXYlvDIZ0IaIitLCO9oO2Q==');
define('SECURE_AUTH_SALT', 'vTgzkUh5BQEgy2THo9DqGcQjNal2EAfpvtH7rpRgTR9EDyKwDy++N4rXQuCFYecy+9V3TCwYfOMaTl3BkevyRQ==');
define('LOGGED_IN_SALT',   '2//r3E8I2r3PllgziGdVdyYhGQUlvFn01Q/XarXYxwIzDIwz97+QjxfLdyWUGB7hB7aa+1sFkU3RFHsKFYRp/g==');
define('NONCE_SALT',       '7oPLVg3UQe55KQFCFGHHESCKqyAfHpYyP+i4oztEA9yIsZbhX1boAS+BWF8ubaGVfu066zynafp7sH7ljYSp4Q==');

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
