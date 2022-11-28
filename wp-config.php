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
define( 'DB_NAME', 'wp-bistro-calme' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'zvg[-AX5rx_Sg(GN' );

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
define( 'AUTH_KEY',         '&)F[9<Af*DHH&{.i|?86P=y@_Jvur9=%l`V8,H?ELG[$l6+hEr7an;+g.WlRxQEf' );
define( 'SECURE_AUTH_KEY',  '-q!s&~R*Se1OEm(_Qzd+%4 u^W|9B6gp;3#XhCA@{^PDY`^1VYWTe.2Kci,bEtR5' );
define( 'LOGGED_IN_KEY',    'D|@0ZEd%L)AGizr$3M`}8cBL?E=-F!i2;?4H+2QRS}C!g%?Pbqxce<F%1N9p%G-=' );
define( 'NONCE_KEY',        'h{VS}&RdR;D5x02QShLgh_|7rUrV*Pa2Z]5ws~<RTq!UV9I?*F?w1~a=@GqU{_wD' );
define( 'AUTH_SALT',        'u6TL27HO@e`KLii:NLB,7-dDtBj)0K*K}1f#y,:/f,<Q{W/+dGx1D2HN5 8)N5=k' );
define( 'SECURE_AUTH_SALT', 'iSwvh {=XqX}*5gbf2bsf0A<z?C7&)17boY?,rRXL!TIZk5C?D`Lj)L)`dZ(z*m2' );
define( 'LOGGED_IN_SALT',   'V:)5}g}`tTn8=KUVa5N~Lm`/pPeqqC{W3kzg]8OwV#Dpb9|?3khd?EnhEQB=pKb$' );
define( 'NONCE_SALT',       'vN9F:npFKA-pM4yhF~T>OQ}]!-[hh<kNU/*VzE i$A4Y`~)&){1Zoa]A|0`V)SxQ' );

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
