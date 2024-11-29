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
define( 'AUTH_KEY',          'ihI[ZX[v[0H&++#sSw$Id[(%y<ZE)Z6R*7:a%e_@,_MH&*TLGML9L<vpN^nDxH|Q' );
define( 'SECURE_AUTH_KEY',   'Q|iS5yB9f.wdiZEykkr(z/ >}]6`qx{G>eKmWbpa)DVnm2v8cn9z(]P !z,lUJTG' );
define( 'LOGGED_IN_KEY',     'KBqlra5F8yxA[!y bNa0C150fNdjyj!hg_(s~z~WPf-}Vrj2* `njW`0vuvPqNTD' );
define( 'NONCE_KEY',         '|awbPJ_:J9b7/N/+/=F9(y@d;J*51Y8@z6omk~8WTM[dYi#ujzFG{RuIOzf;@dJq' );
define( 'AUTH_SALT',         '} +0O!TJlX)aotr>Bs#4[G6U~OAz%_g6_hR20/XU8q$?s!{*Y.e`?(DA{t[Ygt`S' );
define( 'SECURE_AUTH_SALT',  'm|[ ?vQ5J`D0~VN]:~~,wO$/=2MUb];!9lb(!I0d&jd}jNb@(&``3t/X(N{1c?ed' );
define( 'LOGGED_IN_SALT',    '!=LRT+s(cQ3cU7hJO L&:~1%3sJ/~yk<xYc+| $I~BgZjRs6*No*sz5s%Gjg[:U%' );
define( 'NONCE_SALT',        'Tys;9bc<viY84+4/)>Z(Z]?GxLRd9EkFqizWnEsvxgj^1P/WJ!:Gy[{IgqHQf1yZ' );
define( 'WP_CACHE_KEY_SALT', 'B@;u$n5c|IUd=3Io;C6GFI]IrvFn{U|-9{V~x]YtirczwNpD!l,Q+iu4hT2z@m(!' );


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
