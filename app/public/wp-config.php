<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'QIVq-{iCkp{]+2hKR:?9u(^&/2g{+O{<a{{v(2[KsU6Ae7P8=k|NntwJN@_,B~T ' );
define( 'SECURE_AUTH_KEY',   'AEm4>gt)L:rwo|Lv% &fn/|:YNq4e#,.2B,=&`q3opGIJWKBi(.s]1T#gesd.d$B' );
define( 'LOGGED_IN_KEY',     'z?~<anVX(cTNr]4s_V >6!e(R7gWfkT0)$9.(6}-YJfiC0tzJ4UeG+</o~9hb#`m' );
define( 'NONCE_KEY',         'G]t[OdmGNid*oDT$f,OT|l,8qj>/s|S@0,-cWenx8(xXDJ[tAI(KMKV59=k>c=HL' );
define( 'AUTH_SALT',         'hu9zG#C6&84@2PuG,#agnlk@_4S47eQN@^_nw}GX[?S7]$FwHwnA y6<vW(}aDFr' );
define( 'SECURE_AUTH_SALT',  'Laye9-j$!A&O$[Jd# UFFRecE5q9A?i^a?fOZ%$@ApQGg{}SHx$qyHh@iZt7zyD?' );
define( 'LOGGED_IN_SALT',    '+~bFg}xjiO@=A3vG_da6Mtej}$?zUI,W&A63`pFF*Qyvbgn)(WEK~ih Os=90Mx[' );
define( 'NONCE_SALT',        '.MF#6%U %fPlcLmWjpVfOM$EjK1v:)b~4W8Tw0Y.^?VFTvW^y=() qKc9|Q}#x42' );
define( 'WP_CACHE_KEY_SALT', 'K*%r:)MwzA& ~l8~l0ndz.^>qR4 ~mCF=>o8!v%-j$h~r6ssfAZ1|A HKPjsTRY@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
