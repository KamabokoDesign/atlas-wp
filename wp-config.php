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
define( 'DB_NAME', 'atlas-wp' );

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
define( 'AUTH_KEY',         'K^QQ3W(Q`wh|f86?(MM&E@V#W,GDAz{UCiia!Lv2RX^fL=Ncj,#f=iQ!M]|YT-2x' );
define( 'SECURE_AUTH_KEY',  ':(3t0k*uX__gzDkuEvflE%%0e#C<dxuseCrEe-F/E1U=Is6I/Aj^C.cx6Ht:KWc%' );
define( 'LOGGED_IN_KEY',    'zt#dqk0$,!KI5Sk-QP~78~cf!M.+o2F&yOrK)3XE#%FV]UE[5bjH6Pt$o.~`j+yd' );
define( 'NONCE_KEY',        'EIU7+PvUy%#CZ,cw9.qCR.*5PIFS5Kf5XjyM,Unqr!H{b[U8K5R;#{GG1UPzp7I:' );
define( 'AUTH_SALT',        'WT02{Vt851RH)H{U~^!O!fe}+X2MzI z+|yC=YsINA)dDu;yE6E<BJ=:-Gbz#},t' );
define( 'SECURE_AUTH_SALT', ',N-mLPFr@c&<xnSx.Y_kKfA2a?tm-fb-.(.kutYYp/HO36Q56?gy3Ji@?mJ<sG7j' );
define( 'LOGGED_IN_SALT',   'XhYZK%Es(_z(|JV;^!{vhZYMaEBu*j5}pKKKAv;DncmhapN{ISof).5!+D8wz>E{' );
define( 'NONCE_SALT',       'bZGCIfo !I*!iJ[^Kqv@Kswu0xS{|t CoeDSA64a}z1Kt1]+Xl92A/4j)SUt(7H;' );

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
