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
define('DB_NAME', 'kleaner_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't0!kJ5h9FBWkLBNJ VJI};g_=G=2X?Zb@J&gUo{hE@(M;YTH)za  68#&7Wef>BV');
define('SECURE_AUTH_KEY',  '1)SOtD/=,f!aJ-;E5DggMj)l4.^6S$|FSj]Lhz!BusQ4=eFjOC7:eAiaVYPc]O*]');
define('LOGGED_IN_KEY',    'up-~?t-8Aa&Q8nT.c|A|xb9U<4E)((XrjKoZJ{zp!VuuTMD)YU4Y{>UZ-$]{z25t');
define('NONCE_KEY',        'lS}]b+(c3;R>0[Y3do7;9`ggA2.KzqVt,Yoh>xWia4-+~hZVt8-;;.G!ujTrA~Y-');
define('AUTH_SALT',        '|3tjmuxXrm1T8TH$HJk1foE}5M?4c6(LxQ>ukkqc9N#m>q:`D#Y2I1f3y1>sCM8l');
define('SECURE_AUTH_SALT', 'hEK!f~-j)m,<T$q+p!42{m bO2EF3Ut}Y/zfGj:c_IT*<mrO|SnS&2YlRpw;>nvY');
define('LOGGED_IN_SALT',   'UcTKCn :?x*T%=-E-?c)/~`*{Pwo#Ikf}3r}aiw`8^/f@uh_mf-TFM9il9pxvErO');
define('NONCE_SALT',       '9%K2B<l:}VPh{hF2,!y:*V6A+$t@/7Y-l(V<8DTn<MD@a?PIIBpQ}!tX$k6xZc(D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
