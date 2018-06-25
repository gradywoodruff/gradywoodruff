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
define('AUTH_KEY',         '5zohBeD7QYiCHUw0W1ig8PzmI6sxtgheEOSDaOtz+9cfwxq67Omkr66vvXmVDh9+woM2xxBcplfe62xN5TZqqw==');
define('SECURE_AUTH_KEY',  'jxLsICkbzRmZEYMsaX/hIlvWtQlpWJYl6zvBSbC8AHqZsh0ZhelP3BpVCswuuiqd0lOv6mDwCDFDdKSibr4MDQ==');
define('LOGGED_IN_KEY',    'zhiYPu+RmNjBpMv/ycupUQJWE7sj4zhSH/mnhUfcIiI3T7CLw78esy/OKQPJKdKGLMnqE6G/S2bhFUHoXD3PLg==');
define('NONCE_KEY',        'azbLkYbn+OuPUkVLp7K9utjplpcww6cQaj6QqJCYQUyPBvn93HQk+iX0RmUG1y6cleZJ+U/u7l6nL8M83dfnNw==');
define('AUTH_SALT',        'J5y1rC5L04wHjX73HkWdr7g/hBGy/a5Ws7+9OWW319D2iSOr72MSaZMIZkMoSeH7xddwqpcAbPPH8ch3qs0s6g==');
define('SECURE_AUTH_SALT', 'iVcOJi6oNGF/rX2QCJ2p458wA4YHHYidyPTaGLfmlWDmY4dxC06FVq4Vq+GnBu/O/yZXFuiR2vKz/Fy4Im2CEQ==');
define('LOGGED_IN_SALT',   'QuMmDDlfcgnltR1/21B0RYHr7pwz8y5H3qmqXdAOhDcB0DHWLb7zuciKwx5q/DjIrGcU5D3x747RT/RWrciNmg==');
define('NONCE_SALT',       'GIL/NNYQJ985phL32YOZ5QLsLatJNktnkb6E4oGgrwda+MTAoy6YQbTTUvoKpXJ/V8dB9MLGzseu8ZCquYz/6w==');

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
