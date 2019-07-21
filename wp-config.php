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
define( 'DB_NAME', 'wordpress_plugin' );

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
define( 'AUTH_KEY',         'M>vzu?%#tq+)y(%g%GpE;Cg|P48(3?H]5jRBR;vg~s84k3a]i^IGDg]q[8%6jfz_' );
define( 'SECURE_AUTH_KEY',  ';p<jyJq#{f=q[AQ-^l)ETt0#Zm;2S:;L-Ce9ZEJ)j^;;MeXm#<iVe2>C6uw16C2h' );
define( 'LOGGED_IN_KEY',    '(I${<$088W#&UU17{R1/TI<NeUO!8jto- m{V8j=LP PP;s&L!YxjsPzU]3G1[#x' );
define( 'NONCE_KEY',        'i+[6XctL8{e6[*(![#w,=dEz7h~[Y`<8qaF^=n`ge&@?J]1O[HwW 2lyGR(yjJMQ' );
define( 'AUTH_SALT',        '&1y@,k}ap]zo*ztyVe46lc#e,B)i_j)9awgOrOlY%v018@T*KjgCXQ=J)kVE{3mJ' );
define( 'SECURE_AUTH_SALT', '$[6diy{zu]J/0{z$!$jMo@H$H)D&,}8%WuFH8dugyoe|]UZu2N>b@@_IU;@e?nWo' );
define( 'LOGGED_IN_SALT',   '&kD?r9l5Q2[]`p(m3q~Ru ej@@]Cu,dUdj:1mwuGF? R0>hz47o?btLX]VbnE8lg' );
define( 'NONCE_SALT',       'd~(}Z)g=u>a.cEo?l(Refc;b.p;:u% #X?}=B}d6=+L^9loo,|kr]b,n=l Sxg}`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_plugin_';

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
