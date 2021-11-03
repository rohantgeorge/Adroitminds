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
define('AUTH_KEY',         '2i7atZP9kMGDee2U5GBBtx3JuGci+F6+S60Piuj8rX/PUdisEC8ETSrOXmN/QFFPj+mdl+T8ZGuUcZeVwA4MxQ==');
define('SECURE_AUTH_KEY',  'jON3WoMl64yjtSa/7igb1Se94pyblGN6cRoydxnsWss1mo+r1OzbNWIHvHM3CE3P2OXlgDiswCp0/hYTx2PehA==');
define('LOGGED_IN_KEY',    'pGIiF2Ff4ks6DWBFumGh0JG6p4NKTlAXrGO5heO0wnA1zI39UJzheCIASV09Aw3q+PEzt7zE3AIkGYA/KYiY6Q==');
define('NONCE_KEY',        'UUBpvc0Wu4uFT1GotMdUashP4tGMpo6LCMcjyGX7Eoqy/uAHkhnxGcxhxykaVvRXTycu6qnTiFwvBPi4Ugsn8w==');
define('AUTH_SALT',        'VvYfLi4mI2lhebYKEDSM/UNGsp1iEar31XOSHghFHwAO2vRfxwXXNFa3MXBHg3dCdw4hwUCJ/R0sfAw7EZjw8w==');
define('SECURE_AUTH_SALT', '0KUXF8AgkZk8mlxlCcnmxG5CdWwp+u2XXtIwq8JZMY/q5oZVWB0wbhSbHwTvaiVw2rKFmyjQpANINBtujTAsqQ==');
define('LOGGED_IN_SALT',   'KeDt6pqteth91xnn4lAaU/F07RuxyyJSY2wjF4h15SpgYvDJgz8sc+WBuAgoRMznl7h9kgdg1i/nmQ06YY5tIg==');
define('NONCE_SALT',       'tbzkM/lU0AcgUJxLvCdwUiFCvHTQRTtIUlKYzCc6OognGQGxhLgmIE60YwP8chCKSWP457fCBvb1UybIfz9Qgg==');

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
