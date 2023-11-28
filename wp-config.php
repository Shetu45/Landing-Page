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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mypage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8@PdZgkBQ:<A`1i=P*n05gx}i m~3UQTB&:JcjM=VNo0Dq;{!Uj]~yyR^}eN(rBs' );
define( 'SECURE_AUTH_KEY',  'K$e4FeCK[4r#3S6Q>Ak;$o{^+>LI6z=&,mV=XY yPLlS-,4B *+5AW(xwHY#h>q5' );
define( 'LOGGED_IN_KEY',    ')CStpu179jE>X;Z<(Fm:S6xwKB[Yt},3)+3s3*pvb^Cl8Mx;tiqYl{zizKp>QLa3' );
define( 'NONCE_KEY',        'yAR/w!R W=u#+ 1NbI r^g@a0/!i=IE6ASE.u]x-#&>x@Rc9V@A(0cAl[`84u&@o' );
define( 'AUTH_SALT',        'z*>$!+qCshKQ$e{9#(prQ/fe1NQUYOZ:D:(+v H^Kv*|V!R:EHiExFla1v#mPmY}' );
define( 'SECURE_AUTH_SALT', 'vR$F41/+1h/BClzW:!97EgIFz[-1/_;e2P)-}8!@>G.Mnz4vT}R%C5o5*%<:^W>^' );
define( 'LOGGED_IN_SALT',   'aVMG<xe6Yg$!9q;=d)z1Pjx2nG97;S|sxAcJUaX:m}O^b(`j:A@>M-d1R&M~5u=D' );
define( 'NONCE_SALT',       '&ASjsF1<rlTJvzknt<H;0rl.b5xg.(A=qO<V*Yw9hxzYRg*5M*<p|$@#j`nK]w$H' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
