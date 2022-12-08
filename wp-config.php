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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UwTx7OyNoa|Sc?ioXLq5wW[?SHQR8%8,m)o4 y/}(|5$LpS%_v<_TeX[58^JC2_(' );
define( 'SECURE_AUTH_KEY',  'yb=pmR.!eHeIArew]Kp8 6 97qB)qWV;ca!s&MId-m*F&;+*HO0uFAzp[<fI8OhE' );
define( 'LOGGED_IN_KEY',    's6v:}vDAY-.6^y>#2:x*wa|y1kJfy>OM>fOhy?.Cy4LbT3T=j?#MmH&lTv)ef`_Q' );
define( 'NONCE_KEY',        'FZMtg]6.Me(4kEJ7/X5-OjcB{yMr<W!}ooGIW4pGC[)r<IXBtPG<l/k8[d3K{VPE' );
define( 'AUTH_SALT',        '7ml?@Vl[2fLoyUwLx?}T$3;X(AGpK]a<Dir0iVO,STTTJ$25aS]p5f$90[@<`t7b' );
define( 'SECURE_AUTH_SALT', '<avOcCFJ1d9]xG^1FErFr|{>vcB6aQSXJsCsft:&#t%M$-%P3^dd{^-wte#u3)H]' );
define( 'LOGGED_IN_SALT',   '4a9BbPEPE`$=3hJgx`> s>|u:vtf$Vp9Lj/@LmG.^9QlnIC11nZax3Y/JAZnl{`=' );
define( 'NONCE_SALT',       'L3BLV4gg-VscSy.TEeguHv<>IS,wX[C@X!A}cx|8fO{SJ6[ht: cqP0)y2~Xc{uf' );

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
