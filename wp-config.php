<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'missiletest_com_1');

/** MySQL database username */
define('DB_USER', 'missiletestcom1');

/** MySQL database password */
define('DB_PASSWORD', 'KrbuF9Ay');

/** MySQL hostname */
define('DB_HOST', 'mysql.missiletest.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'g&A9;rtOSi%Od$*5?X+s*iC!3@N4un7ui"p&*_%LGFk!OqK$w9*eKWnz(_$B^7XB');
define('SECURE_AUTH_KEY',  '+l|uM34t?WmT^W!Nl|_6(sk02T_I*jr5~3&iO%XzW(fCL&^Tzh~k!NE~w;UgGPL|');
define('LOGGED_IN_KEY',    '5|`Ah6b$R?fNYW$%YsfhZAWlbno$_"`G)BTX2`9/%:pWpcIvk*+6K`CW#quB^U@Q');
define('NONCE_KEY',        'E3cvsv9%iY0)mKTHE;c$+w(;D7nKzi3pufGUDU$V`TeWJjNaO(dt8@K#|aRBLk`v');
define('AUTH_SALT',        'Fjy+^tSQnAo8i5:L8MbiO1?nprIrg7@ACX(Il;RJ|Kj5@Q"5_SLiy/kwZ?V!%ask');
define('SECURE_AUTH_SALT', 'e:T*mM1tKNL&9civ#qy%gWJWf#?j)7`5ptapTxsEIu&:|D/$ug*u;N?pHx#w@GD@');
define('LOGGED_IN_SALT',   'Z"P|Bp&|ibXFx"454NyUi3L/)"_y?le$I)e1V3C;JYPE#abJ`Mct3#L9Pg#pn_SG');
define('NONCE_SALT',       'dps8:d9xxk;_xYdJnv6VeIn^s+CDu9coEPc(7@kPKM:0q5M;Pk9uLM9A%0u:VEZT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_94zhqf_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Try and address image upload http error by increasing memory limit */
define('WP_MEMORY_LIMIT', '128M');
define('WP_MAX_MEMORY_LIMIT’, 512M');

