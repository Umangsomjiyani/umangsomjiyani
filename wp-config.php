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
define( 'DB_NAME', 'mangalam_db' );

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
define( 'AUTH_KEY',         'Pc;/~B{=Qsj6HFg%9qk21{E53f3)u!^P IgM_Ap7]BV1]O3 lvK^XL^R~ptEVCM<' );
define( 'SECURE_AUTH_KEY',  'pNsTfZ)~$]p!?o->z<PqMTFK[Ufs/XEgBqb<2[/&2&H$r_ :|{+*LO!sv&PLCD+A' );
define( 'LOGGED_IN_KEY',    '}|*?S)B/IM-e8aPc}~s]G)61CZ[C1B2JhFz>0kzV:I|W@`Ms}6}ZB]ii]%Z}-Mxc' );
define( 'NONCE_KEY',        '?2xcey8#mHc&#D1_xpL4Qpf(9.RwRnmyCM4JDZbJ1b$v8:8^1/]dTEA].m}9$>gg' );
define( 'AUTH_SALT',        'dQY`q{:xBg9RJ/?R2oSV?GptNlqlBL>KrK+v~I$>>)cHaVL%<q>,w:Tq QX>As`T' );
define( 'SECURE_AUTH_SALT', 'sIwx00GZ2QWQJ3FL4-FFynk*&pRx4.>R~FJ;oRqgP#,H6-0%sW^y3.Cr:i~L}($}' );
define( 'LOGGED_IN_SALT',   'rj}#~,K<57w:+Sq&UnK>^=fr/@XVQy4E!a3f;OHww2nG91bD1tA1?<4~~ `/Ix?)' );
define( 'NONCE_SALT',       '%dkXofl9I^S>b=hw)cwvpg^UTsn5xDm3cLt,_n259pw7j*T!xP&v5^d-qixs K+N' );

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
