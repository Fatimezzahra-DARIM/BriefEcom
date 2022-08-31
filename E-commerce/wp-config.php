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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'E-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'l0W185BdvRAe7N3NlcTVCXOWrDQkfc10vfbEXCLdvz4U6PB68py6WSTMRmpuWPgK' );
define( 'SECURE_AUTH_KEY',  'SIZE5EYZCni0kkCA6OYQ6IgZ93dLynPYpdyZc1Ul2TpJLVR106rTAi9tUihRIdDq' );
define( 'LOGGED_IN_KEY',    'lDl9cWElCAcS1pJ8UBW1gIwkwa24W9kmtdwiEvFdwuHpBtlHi53LpZYssmTD89eR' );
define( 'NONCE_KEY',        'RcnL9w28K7UNdWkUDc2UJtXmeyouei0bmcTDTTOk3O3ehyACkKVz4pdaviLZUvBx' );
define( 'AUTH_SALT',        'sr7xSp5jXVoUYUnWgCdyvYA8gek5rSit60F2W0mGyQqcMaAMd88kwyOz37RW4kKt' );
define( 'SECURE_AUTH_SALT', '7kvrpAOVi5EdhjTeNRvWydnAEaPPyRNcD5RqLihi5AQi9jlcZbB3OqNG5LcszBFF' );
define( 'LOGGED_IN_SALT',   'cPGlwOmtmpqRmLGfDMxvFHp4m2fG1GD6XMT48ATAClzpjamhT0apSnqLwud3IZZF' );
define( 'NONCE_SALT',       'kadj2GJfuoA7dsHTV89rV43me2r9VH9HHY9cSOIZbsN6TMftJYofQGJbeDQqw7Ih' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
