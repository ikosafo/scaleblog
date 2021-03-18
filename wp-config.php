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
define( 'DB_NAME', 'scaleblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L=-_=8!$PCBfB+dL/I>6c}&9;aCKx|;YCiR0HDuppYL(}JX9VkA0KAB{a;&fm`%A' );
define( 'SECURE_AUTH_KEY',  'Q>2td(1ls;C$#x8}pA)`3CX/VOhYk|)CR&spIkaDZ7=mG?wLQX6}F7d&*dJqb@IX' );
define( 'LOGGED_IN_KEY',    ';VF$%M@qHrl) QHr+h^_lX&~YMA(e4^zPZW% #$2yj(?^[aQ%S$U:%{sVx@2>Ur+' );
define( 'NONCE_KEY',        'T><wjr5d:3GL+hL`HzNho;[)(DZ-)9Fm(&KWMwdiAzfG /@{@~_K(zqDudEoW2dQ' );
define( 'AUTH_SALT',        'K*6/9^53 3 vXMi-B8StzF(FnWzHN/mwM9zs7T1j;*h)q24|cZUaR}XncrN@=%YZ' );
define( 'SECURE_AUTH_SALT', ':iG=s*!ko=$J@si<uwZm~]nL(p8tR)`t7<zl& `9R5KeKGyUI`8/Ik!{H#gLy@*H' );
define( 'LOGGED_IN_SALT',   '{bT,G>T3QQ< n!.[O(OR1sa)=#6B6dHLym`)B+N_5_@Z5ByU%&Ma?d*wF}ytX[P^' );
define( 'NONCE_SALT',       'D@~W,RI2cwG;Gc<VPGD9``c>HXSnl^Rpfy^31(qUc1{}$Wxe|/f9f6K{{W sSTkz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
