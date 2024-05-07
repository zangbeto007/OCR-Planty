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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[)GcZaaxEDI<)7<4p;9yi$dlIGEd}I4P@|>O0$;i`T8^yU(jj0}EN=M<A1mim(.0' );
define( 'SECURE_AUTH_KEY',   'Ao&l/tsbW5<,,c%3!k-+#:0ra}aNdesOV;2cC-}-S}Y:`vCfXxT -1CL2c9yfa$}' );
define( 'LOGGED_IN_KEY',     '8SE9aVy(~vKIz_1]h3-;nXZt2[O9kb~ZIQTpLV<r<[&RT{*[$]cRLO=z`M`~f-Ds' );
define( 'NONCE_KEY',         '>:uk)*VgubuP!2L.Mn.Hrs9JoU!1WWoUv?C09Ur!V)py@.;,QB}lnz(1 6LD_R^t' );
define( 'AUTH_SALT',         'd&8eLxlBJhr:RY[?5x,l4JY2p>|g9}o %k_c:xEpEDHWZqzP`>V`Yfy-MPx(G3<N' );
define( 'SECURE_AUTH_SALT',  'w;)AeJx4V<KYTSY`8tZ3Jl,!`?q&]`@B`r>T-QG!Q{zd^6.^<wGc>lBGi,6lQVTB' );
define( 'LOGGED_IN_SALT',    ')_Rf3oV,!+%8MW3-I<&&k|Z61 ?H1dB3Ef7`{ZYy-h u}+0El_T*Kb__B9bzMBTD' );
define( 'NONCE_SALT',        'jV b%/vtd(@s>(u?tmwy|%@HkcQ{3nk]M+_s-@<_G0bCqg)RK}NCCE)%!7^jYWB-' );
define( 'WP_CACHE_KEY_SALT', 'U~Kv~=n>gQ}fX~nyrOroymkX;p_F6uY>K$%5c*h5jz7-}<`s:|[UjO<OC|_I_t~|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
