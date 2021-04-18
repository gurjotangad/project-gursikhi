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
define('AUTH_KEY',         'hTYTAoBvelHGelr4cbMQxyMjJ8o/AUh14deLoHz90fDyJKETxmtMFYqYkKFg/Fbi7o1teQ3sdYzCIBwRSbKXgg==');
define('SECURE_AUTH_KEY',  'httDdk4RLTWja7y4gan9PIIC7U67/6eNS801B60LYKDb2AZr0hkn04xDjR4lN5UCCP7pYhQZPgUffIbyumBojQ==');
define('LOGGED_IN_KEY',    'LFoQOnretGcYFp1IFYJq0CtUDIi5WdWWAcuT8w8Jvu46214X1VNZphdR+WYABLXTQcvcqlZ0aj1kgSqf2H8qNg==');
define('NONCE_KEY',        'QnkRpV0FP+ctbvhSsXQhbGBahidxZKUgnQkH424io0iZRAT3zkE2YjEFTU5/Jk4JWcL2LtbUeDl0uIj8LuBTZA==');
define('AUTH_SALT',        'pQ0n1+fPmtji0adc6csTTdz7fdlF7lavb3WwW3lUkwbovlKSyp/NrMPexxCvOhygG5UFGjRrtH002JxPGc9lDQ==');
define('SECURE_AUTH_SALT', 'xQEo0ZsPR/yOW/VdRsIekA62fBSth59H1W7nr6MIT8pGsQiv/bAdrqaB1a5Lzf4TH6rr2pzJS8vgV0wPszptJA==');
define('LOGGED_IN_SALT',   '6hw8C8Wgf889fQF0cLEiRHW4fRTs0rcfpeQlZsecBw2Se3UPvzWgoIjM/QwnXgLy0HtNeKSDFLh6ZkIn2i0lKw==');
define('NONCE_SALT',       'iN//5+Z9lpsZRnr/F8UzrZSYjhYVTONwS12bPVKG1vp7pII9i3a3HW90VgZGtfDy7MKklOY+cOE5guaB/p6iIg==');

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
