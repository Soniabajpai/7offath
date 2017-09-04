<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line


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
define('DB_NAME', 'loffgzef_rk200');

/** MySQL database username */
define('DB_USER', 'loffgzef_rk200');

/** MySQL database password */
define('DB_PASSWORD', '-4qp-39S97');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '29i2tn25tyut3sscv2dbpcr0oeojfosqslw4mgop9zfyapcajp4keh6gsetcbhqm');
define('SECURE_AUTH_KEY',  'd22otgzygnfstpcujj0mc8tkbj3deyl2lknlayb0b79nnoz19dxcad0kot5geef6');
define('LOGGED_IN_KEY',    'uatxzweovzqrxpxjy0nhyytv0nfrpcjknqmdg0c2i5uhu4b2xzgf97q5mvhvf5nu');
define('NONCE_KEY',        '59li9p2ciuojwao6bemkzeaoqpvzoofksysvcyuzdgyzo2rmtcrwjkuextuusxqt');
define('AUTH_SALT',        'ue5xpbhesfbecj0q8qipgy3fk2umrznydyk1dzgn05twfipba5tchnjfmzicqoqm');
define('SECURE_AUTH_SALT', 'zx2qvpvgnbi5cyppzxtqz3h2pmwty3fpfxf075y7smmayvtihldhdqo1oam3ofdu');
define('LOGGED_IN_SALT',   'e4i7uagdapexxuvdilgqtyzimwigyayqw0ds24sxaj6ak4bxmzc7r9hrbexxb6ky');
define('NONCE_SALT',       'zafmxh55wo2eosmlgmvefg8pmqag4qwwrbf3lh4geyflzayir9i92uvossx8s7c6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rkm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
