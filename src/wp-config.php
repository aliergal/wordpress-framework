<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'framework');

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
define('AUTH_KEY',         '(xw9&g$rHO9Yte ]aZ[]`zSTAO5wZP*<5<6d<Bl<5$E%57u~L,d/yj$&:XeNh$M4');
define('SECURE_AUTH_KEY',  '.wqI&ckS~D >o> H+bF{}A-Olo[1{z&u7;Z3mSO2Yfn&{H[x3Y[}G0.}7(Cm9d4U');
define('LOGGED_IN_KEY',    '%_Bbuziz64$X,jkvuE+lBMhLB%T?yrAo5&=x&cbrmvi,E,1G_`(D8G4 >2yUo{1b');
define('NONCE_KEY',        'fdp(-EQu9>#BCS$?jZ7e:))`V6|#XbPv0B`,R3/^]jJE:HV?mm^3.~qlbnauw_Z8');
define('AUTH_SALT',        'YHk-5z`im6,/Mv@Xa+p$DuIQ&P!}7x&Vv)Erj?&d)dh2Ettl*rPe.F+pv1!bI,+h');
define('SECURE_AUTH_SALT', '2cc!$)?E1lVtDqW;Lgiuz+gOfCb}G-rua$w^/xEeO>n]v*b<ZHnK;,fQ1^?~DoLW');
define('LOGGED_IN_SALT',   'RY+;tc`(RIIPsyhV6r6R3wb<d=rDxYA|%t2xsEOV#0>ck[AlLibP.,@uhkT+Xy! ');
define('NONCE_SALT',       '-28<~5]He7C2q_wy*|oZz if#a%;!@F-m5WtnO_mq:_.rt~JDuOelGyF/Rj+=].b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'awf_';

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
