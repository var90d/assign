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
define('AUTH_KEY',         'LFl50iEd3Qe39jnFVenJciDmBctg9tpRga6oPc/XE628711phW8TSomdtWTmGaG9+QZ9NUMq1Sy7jeARQCTm7Q==');
define('SECURE_AUTH_KEY',  'vUMG0bYe7HZv40D15RpIcBES5OTEHdB+5KXYSPKcttawqK/WsUGN8ayJ7RsV9KBcF8VWKJGH3oaQ99VWoLVE6A==');
define('LOGGED_IN_KEY',    'vvCNbJZfjD9H4NvFccdB71p/9sbuowtHqVq2t+CCLGz9WP37FLfYFTXLAGiHASkhLd82z3qmHiBYlrAlHai+SA==');
define('NONCE_KEY',        'AXRbrBgxrqaDEk1prEXRXX2IPWK6wV5EMfXl4iuZC0GUoNi4AYiCINOwSC6EwA90dkR3N6cyv602WUSOqOwkAw==');
define('AUTH_SALT',        'CRfL2S7uHW8t4eZMhslB/Ir8Ywn5tPVLPRIsG9SSb9xblLjlSEqkQ/xdPJq6bBtJJ8uBx8fVPNtvRqYTLdnk3A==');
define('SECURE_AUTH_SALT', '7uikpBcDXaKQVEkHr7O+8TtVMKSslTvq7YiM96EfEYaW1OlzedmDy0i6HD+kymJdAGGby18GoUjW+UL61u4mew==');
define('LOGGED_IN_SALT',   'o62WRckZG5Sf1SjUd+rNKOpjf8ziChIiRkfCd7zIVgfAk91TOQWYtLhs8Yhp8lZGIfQUFVPUE3CHqt9UGQjt9A==');
define('NONCE_SALT',       'wvI11HxMmVvYIru0m5FbLQ/f/c6asCbHxGHo+VeXfNzAv/zXP0fhbm/H10F/fz9qftlvtQ/0xgC1ALYN/1Atyg==');

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
