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
define('DB_NAME', 'SimplificateurDeQuotidien');

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
define('AUTH_KEY',         '4SiHth+L}}C|dz%YP6u*nVM5boQF&5T5Es#BAVvp1q?y5Eb CH/<p3KG:h=67G.$');
define('SECURE_AUTH_KEY',  '{,1-F_wI]V#$Vy]-~A?Z,S_5qcnT-jYzGDJyBb#WQ,*83%d=}^.|+?bofo{@^2D{');
define('LOGGED_IN_KEY',    'a`tYtCV*Uc,pz- dQ7Q1;7tR~OicB,1p}j,`;T7jD=r|JqtBG5*MZC|*#~rf~P*(');
define('NONCE_KEY',        '&]ZSN-e^:},?&-]W-{}#y,GJ2cJ$U``| c{$1vJk/6|)RB|pfw|sVf`z&X;=r0n}');
define('AUTH_SALT',        'ZV,aZ#f1WG;]+f{HTR_VT$N&HK|aXGgi(;kXzsOiH4GNn$#<woe0keGUs(>Th<r,');
define('SECURE_AUTH_SALT', '>@v0T(8TWf^nSU H)P2M+?ET|Itpxj^`kFwE{<Gud=`W:QD{Pm^2l2^*NJ)pFpO)');
define('LOGGED_IN_SALT',   'H`_C2:W=;>#:LHXM`jQ5S|Y+ZCCSpliufN2uFC`(|:GyJG+tp%QXN4zeo-#xS6x.');
define('NONCE_SALT',       'vb>Dlztrx?ZbtNb|P7`$, DW4dYZ[^ZB|4+BrAj3e-v-Z7~ Z@1;Wzfxj&,:4 )_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
