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
define( 'DB_NAME', 'shabhalgnub1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-4_&=|nzE|W&7ubNIY.nMc1>Q {?YRn/t[2,.]z9~N%J@:}qsSu[3o:#f[&RH]AI' );
define( 'SECURE_AUTH_KEY',  ',cMj:q$S1WHHp2S.liaJPhJdZ~LAFnR=&![} #<K[yuj=VZF:HgA8LC;c55nQ=9@' );
define( 'LOGGED_IN_KEY',    'S*1e$sH[Q7VV9:o JvRaxQyBWd7<L}*lNj%/i2Zmc:c.=f!V%L1eB3Z]V^RN GNb' );
define( 'NONCE_KEY',        'YQcOw{H EA2hm(FkhdA~`~`NW=ve?9rjrSk%<*y-D`XWMa&/n!F7#qX<#*NGN>!+' );
define( 'AUTH_SALT',        'l#>k-BS&F);k v:^R8ubpCw8J0e2J@`ot0Nl%z7|rCc@Wz,v 0AaFoCkH@rwDvmn' );
define( 'SECURE_AUTH_SALT', 'v-E-gm_TH~jS^j kghMcP?r?ITT0k8*;;JLlQW>nc<.aO@^TU6OwHiG:nh_mMbk*' );
define( 'LOGGED_IN_SALT',   'K8-].|nW-Tv2{|4D7t{iOll b*jR|h4a/{g^jpM{!lj,5u{c~L)?G*mgpwwYJ*D ' );
define( 'NONCE_SALT',       'g+Mmh!ZdAfr?s:5%CRqfle,:Ey;[l(5JA+(OG9,iW{3D #_xTdAq=sD^1Gfn)f+9' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
