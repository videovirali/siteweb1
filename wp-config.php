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
define( 'DB_NAME', 'siteweb' );

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
define( 'AUTH_KEY',         'p7-5 <eg!KEJWFT$31aLf!)xeZ0tPt2j]+zM}F+PuNuK^Nr8HDkM&Kh6ezqLk3 r' );
define( 'SECURE_AUTH_KEY',  '}m%n&cetF:`eg{JJs`K:Hp.-|Mc!M3YTDIYNfhnfikM+e(hYJH4vu5g4SdjKG:UR' );
define( 'LOGGED_IN_KEY',    'a;wT+zZ<Q>@_N!|{#V_`(b/&FDy1I)n^z0:||]Z9C)L{O#Gwl[s/FSP7#I?eR2=p' );
define( 'NONCE_KEY',        'M|A$^Go!?j.qWn5s>&k1dti*uC0}u:+:R=CrHj3dvP-3vfpOCsCaOPDl1UuCX)WR' );
define( 'AUTH_SALT',        'f2PFpeh,?ru9Tk1<7E5w(qryw!Ba(]Ec6MkMok/< iqQ*PV`_EOic*(1fD9lWS!@' );
define( 'SECURE_AUTH_SALT', 'LYnN$o{f3b9?q324k#4(HG%n9:&zvzeO_4*c$EG`SpSb^@>1z}TBY|~+%lB2Uzx_' );
define( 'LOGGED_IN_SALT',   '0pee.@e%q]*(:N.ddd/i0F,4dTYJ#e9>{se/pG]+]RdorG`m=1!`pQJ*]wG~[|`P' );
define( 'NONCE_SALT',       '!FGyU_-XSMk*:l4DrdR^#y_6QNXgS&%qKj?m~BWhIg2nB`OrRvs}C*i.^`QY/mkM' );

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
