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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'bbalu1123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.covsirm608lm.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'sVam+eM3:Z{9/,b>Ilz:n b/+8m!_P6,&+biI Ae2Q%/rY(MXT^4C@neN9=E>/+A');
define('SECURE_AUTH_KEY',  'A+Z|86_)7E,g9M+_U>dCJ+2N0|2&Yq5,eR<lczK/6!w+QKN@ _S`6`C25J0G#Fm-');
define('LOGGED_IN_KEY',    'xl}:$0w,64m(Kc=S%mNRm0$l)E*Qe+xI7w!Fso;5B]vXFn2bh%B3lQ@kvcGJ9;-x');
define('NONCE_KEY',        'YO3i?exo-$CuTqyROPK]9hIC*^n*<Yyu+[r{AW;s(loS9A*2QkNj?]wur=?]e49n');
define('AUTH_SALT',        'dUi3`FP_.cy=&P`|78c%HiLIuU2Y~lu0u+W/=%0nuI`*.V$*M5|Vh/(9jTg_- )0');
define('SECURE_AUTH_SALT', 'zYC/+aj+hnkjbtO:}su|;Lm}F;xI7+*|Oqp]dHi9ZSienm_B.b 2-Yr@_q3:UkSJ');
define('LOGGED_IN_SALT',   'Me4ayDfqLW|xQ-#|Pg$=|/^B_#;OlE13x*O2yTn+pFz#LeY4$MGxl_~?q @&[9F|');
define('NONCE_SALT',       '~^.<n]7Zk]%QO=edm=>E9GQ101#10tpih?1-EM;X&|6VB+%kFFHan|T%=FIZ?.B#');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
