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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

/** Звертаємося до БД з назвою accounts_bd */
define( 'DB_NAME', 'accounts_bd' );

/** Підключаємося до БД */
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Кодування бази даних для створення таблиць бази даних. utf8mb4 - підтримує різні мовні системи: кирилицю латиницю, також різні смайли*/
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
define( 'AUTH_KEY',         '^!OnfsdB&xh$SA03Y5[a*;![uISi5GY{dxSXku)=A,=lL!Bh%dP)?|8:mh-$J[-9' );
define( 'SECURE_AUTH_KEY',  'g^GO+hFaq7LR5l!K1#$RTdbJ]vN!2m=c{wvn`-*Oe>cdaPlq8|Cv7FAp@2cZdO)3' );
define( 'LOGGED_IN_KEY',    'fLOR1=-tiwAp @<hqK8)(|E/Wd>`VM<<ZLu##q35ld!d &+HD,wU3p1d^/i9_% u' );
define( 'NONCE_KEY',        '%mX(;O)/f6`SBRS9g0:+:m qbYBOEM0_#`GwZ_=xUi.1|nb:>FoRj{*^O7g7n>}6' );
define( 'AUTH_SALT',        'Pom`yuK{_+eFdQC);C_q[n1s.5=?>b!#?:Ou+DG:vpS{s%][00&$vwYcmwT7T$y3' );
define( 'SECURE_AUTH_SALT', 'bKzgPTFct+ioD3&d)5%M(qd2=2K]{~AXo.^u@r#ZIhxTKxYeLe}[[ZZ.F$>/BV6e' );
define( 'LOGGED_IN_SALT',   'X6?g#+91x%]AgPsq:%Py*gR6(puy&S1c>R;wERolH}Y^zZ_wb_7=|&N%?Q3*zq$j' );
define( 'NONCE_SALT',       'wE%qLiEq.@b4QwF:saBv9Fl@1Y.xs)`&Z jv>e$fZ$F=wV)oFqv(3O(Hlp9JXAcv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
