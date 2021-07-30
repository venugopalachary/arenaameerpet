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
define( 'DB_NAME', 'dmarena' );

/** MySQL database username */
define( 'DB_USER', 'academics' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Academics!@#$' );

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
define( 'AUTH_KEY',         'D6^tq%=7+KPE2!k,M%<A&n8yD60[1)Z=3(m6PAlw[+=;-8RF0E|LEcn1XV^mf4VE' );
define( 'SECURE_AUTH_KEY',  '$+mU8!-$]dp)i.:bMw$/rON&HJfN1*eQ}R5#Z5Cl<}p<u)2!aLCqcoZ;+`MW8p^?' );
define( 'LOGGED_IN_KEY',    '=o$-z4Uh3FWE:x,g7L.m^QG;~>VOPIW%W?>P|pnuz#A-sIS`2nRCv^Ylf9=Dz>R?' );
define( 'NONCE_KEY',        'p-Z@9I@E%yHTuEopXBvi1!g^D*A12?q|>Llc@.SNhGp{7nU)]l]$(mu{FurV#W(F' );
define( 'AUTH_SALT',        'Rj+c=:DIPd8(mFM4XAbO/e9tAGJF!.jS``BSlI|pSwW(FM#VI`@-JC=T&u|?ZF/g' );
define( 'SECURE_AUTH_SALT', 'CJqLxPp0Zhu*~7O_*#4g[@kfbL4dA<!qkfzfW:~R0B)P}iO2 b-QD?yvh=M))58E' );
define( 'LOGGED_IN_SALT',   '{fcSQ  cY;qRe/Zv!Ud] UjbGAu~P.s&r-e;cGsJ[%V]D@#h8kf5@C0m#x{p|tmS' );
define( 'NONCE_SALT',       ')RzI<g00])MA3$4.M3^i1<5&WDfv?!*hu~$I@7;OuNl$r2*g!]|I0/Qa 83I2$>g' );

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
