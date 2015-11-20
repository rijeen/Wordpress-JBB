<?php

/**
 * Define type of server
 *
 * Depending on the type other stuff can be configured
 * Note: Define them all, don't skip one if other is already defined
 */

define('DB_CREDENTIALS_PATH', dirname(__FILE__).'/config');
define('WP_DEV_SERVER', file_exists( DB_CREDENTIALS_PATH . '/dev-config.php'));
define('WP_STAGING_SERVER', file_exists( DB_CREDENTIALS_PATH . '/staging-config.php'));


/**
 * disable xDebug by default
 */

if (function_exists("xdebug_disable")) {
	xdebug_disable();
}

/**
 * Load DB credentials
 */

if (WP_DEV_SERVER) {
    require DB_CREDENTIALS_PATH . '/dev-config.php';
} elseif (WP_STAGING_SERVER) {
    require DB_CREDENTIALS_PATH . '/staging-config.php';
} else {
    require DB_CREDENTIALS_PATH . '/production-config.php';
}


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 */

if ( ! defined( 'AUTH_KEY' ) )
    define('AUTH_KEY', '9*W=5&lt;Rw-)c].9}g?^[:!j]h+Efr&lt;y$&lt;YmV0XOo|lOIujEE}+[R}iAQZ :Sy3wN}');
if ( ! defined( 'SECURE_AUTH_KEY' ) )
    define('SECURE_AUTH_KEY', 'APge3~H;g+b0FyNF&amp;e`$=g?qj9@FQwqFe^Q4(@p#kDa=NR? $Z9|@v*a(tOj*B+.');
if ( ! defined( 'LOGGED_IN_KEY' ) )
    define('LOGGED_IN_KEY', '5l0+:WTpj8#[V|;&lt;Iw;%rkB(A}r++HwT|s[LW!.wt.=5J!b%Z{F1/[LxQ*d7J&gt;Cm');
if ( ! defined( 'NONCE_KEY' ) )
    define('NONCE_KEY', 'zO2cmQX`Kc~_XltJR&amp;T !Uc72=5Cc6`SxQ3;$f]#J)p&lt;/wwX&amp;7RTB2)K1Qn2Y*c0');
if ( ! defined( 'AUTH_SALT' ) )
    define('AUTH_SALT', 'je]#Yh=RN DCrP9/N=IX^,TWqvNsCZJ4f7@3,|@L]at .-,yc^-^+?0ZfcHjD,WV');
if ( ! defined( 'SECURE_AUTH_SALT' ) )
    define('SECURE_AUTH_SALT', '^`6z+F!|+$BmIp&gt;y}Kr7]0]Xb@&gt;2sGc&gt;Mk6,$5FycK;u.KU[Tw$345K9qoF}WV,-');
if ( ! defined( 'LOGGED_IN_SALT' ) )
    define('LOGGED_IN_SALT', 'a|+yZsR-k&lt;cSf@PQ~v82a_+{+hRCnL&amp;|aF|Z~yU&amp;V0IZ}Mrz@ND])YD22iUM[%Oc');
if ( ! defined( 'NONCE_SALT' ) )
    define('NONCE_SALT', '|1.e9Tx{fPv8D#IXO6[&lt;WY*,)+7+URp0~|:]uqiCOzu93b8,h4;iak+eIN7klkrW');


/* Debug
 * Log stored in custom/debug.log
 */
if (WP_DEV_SERVER) {

    define('WP_DEBUG', true);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', true);
    define('SCRIPT_DEBUG', true);
    define('SAVEQUERIES', true);

} else if (WP_STAGING_SERVER) {

    define('WP_DEBUG', true);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);

} else {

	@ini_set( 'log_errors', 'On' );
	@ini_set( 'display_errors', 'Off' );
	define( 'WP_DEBUG', false );
	define( 'WP_DEBUG_LOG', false );
	define( 'WP_DEBUG_DISPLAY', false );

}

//Rights, do allow minor automatic updates
define('AUTOMATIC_UPDATER_DISABLED', false);
define('WP_AUTO_UPDATE_CORE', 'minor');

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

//Post revisions
define('WP_POST_REVISIONS', 5);

//Content dir
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/custom');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/custom');

//For security
$table_prefix  = 'wp_efbc57_';
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
