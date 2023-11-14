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
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectikonic' );

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
define( 'AUTH_KEY',         'w CBI__MJqS9k/bGUHa3~eR,q?~` kp@Cu,0H7O(&*9{w0c<hL{=I:!S=z[%.vTu' );
define( 'SECURE_AUTH_KEY',  'NiC$k=jdq$!+esU$KqiD,j5Wo@zs&2&f>JM0&l+a*32~.4tJH4(luNVN*#t41tx?' );
define( 'LOGGED_IN_KEY',    'GipT+Reh#t6=JQESH!qwwlu;x/{:(THt!S5Rm}8?4YQ@Sz|#-5H7oRC}(0ZytB&D' );
define( 'NONCE_KEY',        'P($)g]q9@>`-_{hhcodSMo&6.m|&xjG:jg*N4QvpD@BPSbx9(]|$3?Cp+^HjE=m{' );
define( 'AUTH_SALT',        'ds{Q!#^#$&swG2?cfO)OAGIQ2`<qsMxlDn3wMe<Y5YEncjIQ^A#X<VqvF Aq@v,Q' );
define( 'SECURE_AUTH_SALT', 'XpwRiJ2<VQ*>yu{mYdF2OI,<Sb78x;E71Ota1H,Tez}q.VCZiJT~J<<Pm&guH7p^' );
define( 'LOGGED_IN_SALT',   'TbD/uWq*aItNyGnaMg PXz YvD+&fi(yVCgPeU c}#c^U%5u|iUeX26~ hb#2+PI' );
define( 'NONCE_SALT',       'fK<8@/R!yrfD96FbI&qh}{7vdp=2y!NF|W)$k~$q7sY;3O];)d:>n`O5i2G&aG`u' );

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
