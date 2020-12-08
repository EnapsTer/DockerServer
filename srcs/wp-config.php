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
define( 'DB_NAME', 'server_db' );

/** MySQL database username */
define( 'DB_USER', 'aherlind' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aherlind21' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'j5<:lmo)llMF q?tG/_f-hb[k]4exK[kI<?&_kTjfHX|%D3Sr|5/Cpv`t1tw|J|>');
define('SECURE_AUTH_KEY',  'y2u 2s(S11)n@MejQ&7SA{A6qlx#?XZx8%&9Yn,r>#WD+zXzIG]^sP+x@G:vi|#=');
define('LOGGED_IN_KEY',    'v&6z<lz9FMBTQ$g)w:z*x+?Z2=b_)gG)QaJ(:rN2c-gYj6&-#FZ(!781jlw%43Zl');
define('NONCE_KEY',        'b,/?sc0+2*V*`U3/n-%bqYZiPUrnpO,ViW+j-PBo&3p{-ERgC,1Q?x@IAZWP32|H');
define('AUTH_SALT',        'e&YHS8g]&1U.2~RbC~0V|St%g3y:/jgzjR;5CNq!~JM)]KT^5)@o-35tHCrHF2Eo');
define('SECURE_AUTH_SALT', 'A CiZoBWwB<uq)EA|HaY|Lwwqb*p|gN%+ILmP[i?kZ{OlRf/e?QV-h%p.k1jPUB+');
define('LOGGED_IN_SALT',   'C4dZ%EDK4&393)yUu!in@sQ5+>K2fmOo`Xb]*rA,@Dr1qyJD{/xq,|st)J9#MN0y');
define('NONCE_SALT',       'mt0[^^}|<Udbc)cljP]`54z0e+-sC2;+ OrrOf_5r/{+3kMUtw-=aRi8s<-I4NT)');
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
