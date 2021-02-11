<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'vulkantheme' );

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


define('FORCE_SSL_ADMIN', true);

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') 

$_SERVER['HTTPS']='on';
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':S|qVjkbtn[$s?yv9Z^prAQNEJztNcce!X/h1f{Muc!HdY=.3p5kQSrCwBY|ZMtZ' );
define( 'SECURE_AUTH_KEY',  ' 23H1cnOpO^fV5G8!FO4V_(Fjt.fMkypov#H~sbVs=7mb9[mP.}|Am!EZUNhq/AW' );
define( 'LOGGED_IN_KEY',    '=hNk2{a&g7=ZrA-N$!/t5fvV:(u3+]mxd+@nBRQmw,8`5-dz?D;*CK,Rz[BvMl<#' );
define( 'NONCE_KEY',        '8x%Lu`^m3-&0a<6F11Mu9#81?eP8{{:p)yAnLB~OJgF.CsmdD.>-77b0eX!k*ogc' );
define( 'AUTH_SALT',        '~=Lx`AEUa.z|=; ZA:]try_b{qJ%6MkGzf2n#?`646p{y[YV}$ZXpkeWO7?TDUI_' );
define( 'SECURE_AUTH_SALT', '#LTMKm]Z@txaYcO`6mt!31~_zbC+ufOQ:D)/rLA8=wC&e}B^z$_p`G=:O#F?DY~t' );
define( 'LOGGED_IN_SALT',   'g!l2.u]>m-9tU*.+.>;M( ^*OCo0F&RD_4vH[{s2@LfvYsXETH14kM}5E1PCjWM4' );
define( 'NONCE_SALT',       'am o>$V:kav!O_3ggi3<B.J+ wPP/R-j32G<l?1.7 nToPgLgIfa=q|Rg#oLhXD6' );

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
