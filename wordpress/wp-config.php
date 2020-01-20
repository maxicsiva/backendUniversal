<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'angular_universal' );

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
define( 'AUTH_KEY',         '}FfrF&X+_<wIXL${NcZh_dT#i]TVE{kPwtu88o,hk]+D&t&,(h)[9cz?&lJ#02q6' );
define( 'SECURE_AUTH_KEY',  '6qoBs^0;j)[#}%Wv1tFMZvvH4},k>pk0E1]d-1P4*hsUK,SW?7.rla1+LYD(>&_=' );
define( 'LOGGED_IN_KEY',    'G;?6tx*zNxPKBBLePb40<r./r0Z7~#h9V}]%ultb}R^x6/J]*m6[sgTd6av=hK2S' );
define( 'NONCE_KEY',        'v{HG)1SYyDezAha8[mrot~n>Ji@(rDY/cW,^Ah,-$%=ue~jiElE)#xHeVx/qpu^1' );
define( 'AUTH_SALT',        'oR9vdT_Z( T<]R6lN<htIna%Qm?!?g9?eT{pl9y0iBRAEs|?_4a G/2d}%h+<N<d' );
define( 'SECURE_AUTH_SALT', 'dv()}_IzikLDgxo|JnzF?NPR0Hp <TtaIOd!+W@gqv!kp+Wl+DW+as0%jQw$(hPc' );
define( 'LOGGED_IN_SALT',   'Ey1%^sT|NH$yR$?2Og7PD=ilzzJ)@jxn/REJ$XL12i?+9=bbj+?@ktK|WiJqX2J(' );
define( 'NONCE_SALT',       ':80fSwY#yA+z/eR0J(p9H$]55}-tceZf/.RD,+V5_!f- qah}<n0@CMI;gi/.V9^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
