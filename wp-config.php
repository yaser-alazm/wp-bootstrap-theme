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
define('DB_NAME', 'wp-bootstrap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'z 4E6,!_&BXBt4)3Cl]H^6vh3$9QOM^8bE2Nbp%G<cY;P=[Uqpiqibr`.;]U w`}');
define('SECURE_AUTH_KEY', 'GtI Pg_gq*yk[>+~}Ra>U`(b(-4%623&={3+/3)n&B3:7;ISJf$487ExO?iiL3V;');
define('LOGGED_IN_KEY', '`pfk$>4)01f#@QWH+P4fae)nJUz=bK6NK`( ,6rm*Xj-LBosUmr3y?[Q/plr$i$[');
define('NONCE_KEY', 'jvwPwWaI8:f6T8B>#^fsONi`+Sd8B$`$=q&EelFrJ:*gU{R-kz!o#^3bJS$K4l]W');
define('AUTH_SALT', 'z|CM&II>NxFaT_wyy4t8@V/!6%VcK;wEvsQQ9LpnRhP;t6Cdx,/^I]s-tF{)mj<Z');
define('SECURE_AUTH_SALT', 'i1pKC!&BT!U2(R]8$ODj[waVOxw{/?N=5Y.oTUHq?H-UP(7]:,ih}6`>B0u}i(d~');
define('LOGGED_IN_SALT', 'q1hglmt)S?Ecs3MhcgHCN,P #aWaM&7h3@mRyI!PA%b+8V`4wX,VKzW+~T9{yJW#');
define('NONCE_SALT', 'O{UKy|BeD<PlM7=j:S8_[2re5cX}8o`U^2<$:6u?jRpyKJi:Um]ZMB,JwykCx}3G');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'FS_METHOD', 'direct' );
