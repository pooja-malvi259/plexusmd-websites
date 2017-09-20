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
define('DB_NAME', 'websites');

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
define('AUTH_KEY',         'iG[dPO?<!v_!WX)tu+{:o~LmH8cAro/^U|NUPlYX#x|Hx;$U)<2TvizDz)dHZtpz');
define('SECURE_AUTH_KEY',  '0nkS4X8UZ{%~16/2>[:,S8Y]IBo4<uWErY%10U>#$*EeV>QbG&w:Cu.rN^39R<l}');
define('LOGGED_IN_KEY',    '#=,#tm01+a>6NIj% C-z]_8Q@m96DLQN&Mg.hzr/oesl USF[~H,)?a9)X~GSpc9');
define('NONCE_KEY',        'l|dt7w}1q+x ); NdQijJ`]}OpWIF39c<%l]y}i%dS>drDv(D `XC&*2~0` 7ht4');
define('AUTH_SALT',        '%f@Ymo0T3j);#2XK>/D u2Z>9.-U!_LV*blc/y:;3hH_Y}+&Xfo?-,(?HFRbKtlc');
define('SECURE_AUTH_SALT', ',fpOX<5VHga RtirH;wTN 74]*o([wy6K?`_qwW/``a(U7$c=NvWvEHTAI1WM&B!');
define('LOGGED_IN_SALT',   'cdvrgpXfL>[[,ug7%Ed1.R[4j*k5Z$Sk1n*PKP9@yl#&l_1U?5.YA)m:WV7$uQ_A');
define('NONCE_SALT',       'c7aj[<,hO,9U79NpQqM0hTy|c B<oZIA7.!|bwmg#6D;;RUp9SU/#+vUKOKbVjfv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_websites';

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
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
