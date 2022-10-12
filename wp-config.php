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
define( 'DB_NAME', 'cahari-facility' );

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
define( 'AUTH_KEY',         'Diy_Qel.@%QPMekm#wn#xcTj?tA[K @R^aHo#<dN:|)<a7[>8iu:o@-8Z~PEYMr7' );
define( 'SECURE_AUTH_KEY',  'i|ze(9&kYqD,/r|8[bJs#mt7-[G-N|%#Y[plHVZsJzoz|O4c`iY4@sQ)@?~W>DrP' );
define( 'LOGGED_IN_KEY',    'Pqj].VeKwa>ChM(FPrO2_AYL[Po/E17ERV&SteKst@|7cwv9zD%lJo9F-0Y7ZU#_' );
define( 'NONCE_KEY',        ' 8q_ZIf6zo 1YNq&V!n*/E:)_-O:n H<3Ez%K(M{3a ZE nK -<cHWU0Yf/7?d(l' );
define( 'AUTH_SALT',        'qN`i5k68%<ELwK/pAmC><,SUn tCZAO]Sz-p5?]}{NZI/[]P6:DNeikd)UHg<&wA' );
define( 'SECURE_AUTH_SALT', ';:a{<C4:AFr-o|}+[}n!P&~]Sp%s!-60@YA-yFuy+c[EL2A#g|jOD4wG3B-SG=nU' );
define( 'LOGGED_IN_SALT',   '5+JrC}!8v#p-9})_2p{0tbOS)4 T:Edqb,cr[KC/E{xxi8KcFH^tBq8Njwc9Cj30' );
define( 'NONCE_SALT',       ')>a)),Z0Gsu(Y[y8w|Q;OIwMMU%sM81lm>KYVYXD<(/2W!bdt*~c5]Ux8{U,BqS3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cf_';

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
