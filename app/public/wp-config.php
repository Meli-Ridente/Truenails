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
define( 'AUTH_KEY',          'd.0l*,OneI-Y[UPy#$sN/M5@DYRB, AL5L^@(xKwc^;jM(Qy,L?D>su[~JBu|v:*' );
define( 'SECURE_AUTH_KEY',   '1%>;4%HVp#&=n(7M#eSfk>BbZ|SmHq[jsQ8. s;k/H-2 n#dp`]f+>L6_:T3i=$@' );
define( 'LOGGED_IN_KEY',     'S^ Qj4Dz~atJVOmZ9 >^PMpLf4_9;D?L*{k/)6^O}g+aELGfOXG]Lehc|KlM2;p|' );
define( 'NONCE_KEY',         'C27-*MiIZ_ Me8mC+CIF|18,8118p?ZOhGX/]=E@#rJ`,omQmCFTIJjnR:^+$T`E' );
define( 'AUTH_SALT',         'M-BAbbLl-f(q~$E_-*b~rF]42%fcyddRUs=GiEY4lQL:Bpk#L[Lnym_ekpU()YR;' );
define( 'SECURE_AUTH_SALT',  '#rhdmoRJ(.7&0cg=D/85K;pGNaEB$hOAfNqyP^`:ii~J8DL!8Ca_gEWB24X|}aWu' );
define( 'LOGGED_IN_SALT',    'Dh)&:,;^LwneluU5E$6P>}V. uYMd?uX)9<zw@rEUO+H<)8C=#m&_m!;Hvdk:IM^' );
define( 'NONCE_SALT',        'PcpkhT`Eah&e+XZC4O/T+hMb!3y@t;qNcSkY>1-YkkIWfn(4_Q#+>)_gAd]Hm@M]' );
define( 'WP_CACHE_KEY_SALT', '1CI@9t+IWiXO0$p6_cbUt0bD^Ke[%76yx_+;>n(@AJ~Ag`p=0XqBgy]N!h6@O2eO' );


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
