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
define( 'DB_NAME', 'wp_theme_basic' );

/** MySQL database username */
define( 'DB_USER', 'bospos' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bossgamr11' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Epj<1JS5dE]]Dq_<|~)=T]kbz;Y~S=T;<x,ab]eN~}U?SC^GE@kYz`n/R3AzD5vk' );
define( 'SECURE_AUTH_KEY',  '%kp716xxQ nZY,uO5acy%[>T6J;6{IM/=T%;T-*;^1s>e-JP.k}En/NV!{8iKZK0' );
define( 'LOGGED_IN_KEY',    ')9Rp[G1AFiE:Pj{2Sr*Og<<:0bv(HJ/(x gK[ C~<)Fj/${/Wu%E6fk^}m5FAJ.}' );
define( 'NONCE_KEY',        '$6m;$Qb}.SNQu?ZTSb7|!50{:;}zWcuUA!2kQku$e[6GIU,rs`Y@2&YmW;(3~!s3' );
define( 'AUTH_SALT',        ',y.MqmrVn*xN;AD3?cc@OV*5)&)@nF~ZpVRbeYo_/OUB5wsu%ul3J!!2p>QM7t1e' );
define( 'SECURE_AUTH_SALT', 'S[OqpSFaN<zHp68k7FV-r|ez4BTX$4bv$4X_,Sd,!Tjaw((<mV|KNqLW/1[I@&Ev' );
define( 'LOGGED_IN_SALT',   'SF E<h@(yvI)H`vE]9#Q{bCMk@*Lw$E9o9Qk[Mb&&Wv{U&[IR0vz04:9@@$0zFs|' );
define( 'NONCE_SALT',       '9)qJm`nDLF(agUwIR+|Cdm7>#F42WR3JtV[Ne?F?J6&hCjr{&/~o0-H6*0:Y@8ly' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_theme_';

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
