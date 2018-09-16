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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ISbnHTiMWOFwelTvyP3+9WxNUIHWrJM6DZ3sBxZTb+fxkMuH+vIN85hgghvnnxU3EcYF34Ykm+1vxSDNjWA0FQ==');
define('SECURE_AUTH_KEY',  'q39q4I/vt3EYWd17hxQqcFi3v7ZCV1L3r3IdDIy8bnuHq7tzyGsiy3epiF0t4/bDLxte78fyc6OBxKWN4W3zHQ==');
define('LOGGED_IN_KEY',    'NKb0F/Bqx5sDLZdLzff4XMeJPEHIaRl6Q2ZJNcJ9EobpGVvKQ20U7vEdxAcJLAmrlrWoWxQtMpEQr45+FWNK2g==');
define('NONCE_KEY',        'P5sLVQLZ2JboZ7+xx0D4XsEw0O8ivJJVuq2vOsJHSF1euujBzuLKhwuJQtkL/RuCAtavy5BNTY08AOrqOm3ZTQ==');
define('AUTH_SALT',        'k7o97oTNjfGE45+tP4AJwk5Slz75uii0z3F4+27S5qCgOVRm3LsZs9Wa9u87e9L9T/tigOG/Fa8ceDt8xh3tZA==');
define('SECURE_AUTH_SALT', '08vUm2SoTGdcBEhp0mehMy/qdOz8ZXMHlXfBWTRcmbeSDEBudMZScUPKovj041Pb3Uw70jr/DPAWr2CV/GIILw==');
define('LOGGED_IN_SALT',   'kMkN82tfpH77dWWbV6ZMTzd5XgEF3IgeIMOUIS6GsuCtnRXGzRfldpu+Gzn5pVs2tIffLd/tJOlOmwX559cZhg==');
define('NONCE_SALT',       'YBfVVxlNlrphlQs7OYgHcCewkxnaXiRyxUtawX0gHISQWFJR4+UqZSqNGs2Z0kWehCZeMdtLJXppX6n9HFRBUQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
