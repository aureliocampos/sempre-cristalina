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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_smp_cristalina' );

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
define( 'AUTH_KEY',         '*VeCnIv$Ja]MR*{6g<$r*[HV#ApJgGC2S99FDlA(Rt!s;H`<Z$*X7jV0zLU;PJ5>' );
define( 'SECURE_AUTH_KEY',  'euXP?<Mu{-ZVH[(dd;=o<ujrFI;$(qLL[m<:C ?k<?R?9y]mYz=oR0lT,iKbR^mS' );
define( 'LOGGED_IN_KEY',    'Fds2`VmuQ*qEQ?;ZsZ&jeMR:rVOD^hv0nVY~6FKg7w  G6Sp1gHm+)Qp@&L7:_pF' );
define( 'NONCE_KEY',        'o T<H?@!ow;;EfFD,,ZEKgfn4=.29fzB)O4MLe@y2S^T.k9 *XWlN; {c#IC2`P6' );
define( 'AUTH_SALT',        'KxYB_4o)^5 :J?iU<kObX~2Fy&g/@36vUA{g&>3&,yAw]FATcR([ ]}9*0Sr}aa{' );
define( 'SECURE_AUTH_SALT', 'AFn%4dQRg_S*@QyyrDfI=Hq7j;np4+d8~L}y:_Mqxd<C>SwWQky{_QJ[boHh$Qog' );
define( 'LOGGED_IN_SALT',   '4, Dyi1~,4Us0$56>-=cod^f @8YG6Rjm&r4FmcunjzfPFWhk7I zct)*v6sB^)u' );
define( 'NONCE_SALT',       'jU01Zv.-0eagt6B3l]I9Lp8{f+[iMyO3`L!hTvu/aVJN%:g*-VDTD+hkA|w#s*iA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_danl6uSwofra8l8_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
