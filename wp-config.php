<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deliverychinaback' );

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
define( 'AUTH_KEY',         '7$F/Z|~nslC&j#+|G8ppe>Kj2Bc@UOtj,p~)&$8ONQG~EWhM X1{S(/,:-/ERn{X' );
define( 'SECURE_AUTH_KEY',  '1dk<:0TUh?L=9n9Dm|op*^7j_RbfzE<!SQG7,[)94J+b?.S(O}+&HbaQqzaHpb5l' );
define( 'LOGGED_IN_KEY',    'huS$R]Q;_xB[Jut9jO!qn=Mtz8?zx`H2rJ_ 1t6=,PDUP}8.}mUr{jH)v2nf$bAB' );
define( 'NONCE_KEY',        '&P`nQdb4.^,|^!3AsT)I~}0:H})6g8lDXqGKOAhk:L{@d6]$4ZKjc`ug_x;Qgn=}' );
define( 'AUTH_SALT',        'anZ*>2aLjtx0OdhSJ=;P98$D7Bu=Gy]8!rx]VyogLSegrvf#(qc+ofWARp{,t(9r' );
define( 'SECURE_AUTH_SALT', '2zD$2Ypw {vtqyFhrWetRPWJwihh/<O{z{aDt?L4zrn-,#VW/.ni%Av,b >qXF,W' );
define( 'LOGGED_IN_SALT',   'R fn_fhbNTrY8V.wj8JCG80I8j8@Y9kcJ:khG0|qWd3qT*2z(%$Vj0F[gWEW4j$A' );
define( 'NONCE_SALT',       'AgvLlX[uIzm1wk~%RwpVYyV/uO9)e6WUZwF5&*AZSIKl<#~$;.tc)lhA ~au.<JW' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
