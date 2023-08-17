<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'W/IK9lVWZeyB5Uw7w1ezivcXo6uCDWUive81DBSt4DsKSnXysE7uD8ZuP1M0+J2myw/qBOj47TnTwknIFtqI8g==');
define('SECURE_AUTH_KEY',  'xrbBKPV/fNHwoyE7TriKC1B1cRpQiTJ+Ipb73h2UOCovLVakYYlcXg1g65QaVaQDnREa2t679LPodECJfMbqMA==');
define('LOGGED_IN_KEY',    'gpzCYfZqAaEtvXmW4qFD5D3ViZeuQFjOE3tRHJgo9yEDF/NQHtlM7c1rZBGBnRgQvULIVoKHKRsB/SOuI0ExAQ==');
define('NONCE_KEY',        'U7JxJ3kxD65tkV84oGUIH8r1O/GxFk/V+QVpy2GHYpOdptoLNtzyJ/Bb7vPwGZanBsl+9vFdrylMW92+yWJrmA==');
define('AUTH_SALT',        'gtjgZGDfnNYUVkaqFXko6zPImY3yePnrP0UpojwWj1TJdlYX2TLTzSxhqP0+selBcOsLQ1SsDJYm+4XiFxbdkA==');
define('SECURE_AUTH_SALT', 'VoZnHwUT5BIX6UzHLV8+C2TaSbOSPcE31pSMq1XFgylwPIzsaCs1Td/+ayCLwzP+op3EFb8/YVaiujC3ovFwwA==');
define('LOGGED_IN_SALT',   '4eDr/xWgJrAWuTCuvfdi6UllqtuhFXXw75i+UzmcA4n//W5WScblJK5KdkfTZZUOMLNMpQuBqGvSZirzCk3qOw==');
define('NONCE_SALT',       'yzFiGn+zZXyNKnn4iek2c7CIhDPq4VRLPgJqbHT48CGzybsQVpqbDH+8rkCmlgslfPqmG9RKPNGL59es182nAg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
