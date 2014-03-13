<?php

/**
* Define type of server
*
* Depending on the type other stuff can be configured
* Note: Define them all, don't skip one if other is already defined
*/

define('DB_CREDENTIALS_PATH', dirname(ABSPATH)); // cache it for multiple use
define('WP_LOCAL_SERVER', file_exists(DB_CREDENTIALS_PATH . '/local-config.php'));
define('WP_DEV_SERVER', file_exists(DB_CREDENTIALS_PATH . '/dev-config.php'));

/**
* Load configuration.
*
* Database credentials.
* 
* define('DB_NAME',          'db');
* define('DB_USER',          'username');
* define('DB_PASSWORD',      'hunter2');
* define('DB_HOST',          'hostname');
*
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* define('AUTH_KEY',         'wn{2-/F ;s6-+>0p}E}X5H9+ kF2B!Kou-w-rZj!M(w5(i1KSD^#yT<o~KSoo.`3');
* define('SECURE_AUTH_KEY',  '&P2;DkHW|+ FBw4[n9zgVM-#B<l0w`YFlqVt9a|E=<yA12!2?*.1>TZp-K}O}il=');
* define('LOGGED_IN_KEY',    ']<c^tU@Mo4]t%(-Xj28Fe]$<Dg]6.vz*H/LoYH9 L=U6l[{kLt&#9zH/3/|Up-]I');
* define('NONCE_KEY',        'H`V;bTv4,v)sYom?:|8pSZC2%Zur9~9m-zN^vTI$&KM{dXPeL,pMG{T0gZ`f^{N6');
* define('AUTH_SALT',        'so+HeC{1-u>`? @[|)Y-*ysXj?+45w,EP_|.]!tT7*+cS-g{+/T87I^e`hB-%Ri!');
* define('SECURE_AUTH_SALT', '|r=`ETr0obuvYE3*xF hc D(KO%<fF2vM`LB_(QXZ}1RGos~9|TnJZ0sFRwCC3s!');
* define('LOGGED_IN_SALT',   'X{kCdd6hA+!pW#N2X@`BJzIjb+W,rf%bb7W}:q2`Lw~nzhgYns9qA|+@`{tg5@[(');
* define('NONCE_SALT',
*/

if (WP_LOCAL_SERVER) {
  require DB_CREDENTIALS_PATH . '/local-config.php';
} elseif (WP_DEV_SERVER) {
  require DB_CREDENTIALS_PATH . '/dev-config.php';
} else {
  require DB_CREDENTIALS_PATH . '/production-config.php';
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Paths
 */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/

$table_prefix = 'wp_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/

define( 'WPLANG', '' );

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/

if (WP_LOCAL_SERVER || WP_DEV_SERVER) {
  define('WP_DEBUG', true);
  define('WP_DEBUG_LOG', true); // Stored in wp-content/debug.log
  define('WP_DEBUG_DISPLAY', true);
  define('SCRIPT_DEBUG', true);
  define('SAVEQUERIES', true);
} else {
  define('WP_DEBUG', false);
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
