<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', '2ndass' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9I#5%<XfZs6xi}C97H-2?VHos@*R1yhvaFt|?#5.+!(pvo5,X&u;QLQ.UweR8:+R' );
define( 'SECURE_AUTH_KEY',  'h}}a/UT_jg0DQJ.<ezYu#^izFJvys6*1m1S1iNWG9;ABauET53r3vReAZ$~b!8W$' );
define( 'LOGGED_IN_KEY',    '0a%/B?b*-://fA@!pjIZ}N 6NT!S:=uq1=UB(4Os,EUEO{yA;MLe=U1[^hl}Ppq9' );
define( 'NONCE_KEY',        'X={,h!-S2U!`cfc-tQme ]5{Qbkp/iP.Yy!v]PCNuIitG=#c%ACD9 Wo%[<q_aVV' );
define( 'AUTH_SALT',        '@7F6+[]IX1Z*.DxOY+Xvedqj+Jp<=#I<k-)Y*?4|}_m5icRFHr[G]`*#y~HOMwZp' );
define( 'SECURE_AUTH_SALT', 'V<}S&uJ%,t]^kV?pT;108_8DU8y&JyqKrM!8cM%C{7Ktz7qB5D(V{2%N6VTfI*[l' );
define( 'LOGGED_IN_SALT',   'u,jO^}4H[W0`doh*{9p5u#!GT!OCO*O~KqW2+5mx[.U~Mg8kzIh^(gEQR75e.w0-' );
define( 'NONCE_SALT',       '$+g.C0Q:j40f5hv j9[WlS&6R}9@f=lf(,,3YIBq?Ec4?Ht`!Wk27S0D.&4@G./*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ukvdh_';

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
