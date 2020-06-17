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

define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gym' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.169.10.10' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')WhtW`?Pp`Yw&x/:CMkM*;vQgD+m[uCv{v`yBRGo:F2=2I9J|i3aJ!/SEcv5zDP|' );
define( 'SECURE_AUTH_KEY',   'NIyHcQI$0N7g<[r(&8uxW4Fr(v}`}iH%r_}Y6SMDF9t<cS*IkdRSN2e-VF$GQ8h$' );
define( 'LOGGED_IN_KEY',     '/@n Z^X.^jq9xKX& cxbdwB-Oh0I=F_!-gNctUR;ejOVwZozstJCT)$:RUn]hq]/' );
define( 'NONCE_KEY',         'l{f#gtTj2ln`[|9HFaGD-d1y3gUqq@6&10Pa9sxKBJvfW!5FB2C(eQY}15na%j#-' );
define( 'AUTH_SALT',         'HaTz,8G`_5p2Yl^O}J6V|IZw@KAGPvK8dC~G~M9>[5MygNhKud:-Veh|c5{p$?J$' );
define( 'SECURE_AUTH_SALT',  ' +5_Dlv7PDeRE`6+1pBKyr)6k,eJxNkt0+w*IOsZDDG^+p%adTr]>Au$T/Lo=G<2' );
define( 'LOGGED_IN_SALT',    ']!FADr$N2fSe|-z-J4 5,VLdx&9annr/p7f*?gAh(@l3koQcQx.[Z@hqe)5z>GW^' );
define( 'NONCE_SALT',        'T3Y@|;Y:urteib% xbX_,YO>b9H<t2!{0heX4` i.g?<S%}2j@:0!}8b/MRoHQdt' );
define( 'WP_CACHE_KEY_SALT', 'x!_~o?9N -B@snNWozBzPuL^)ZXEhujWj~)J~et^)#/X=MJSi>s%GNB8aAO  j?C' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// Define the default HOME/SITEURL constants and set them to our root domain
if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', 'http://gym.test' );
}
if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', WP_HOME );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );
}
if ( ! defined( 'WP_CONTENT_URL' ) ) {
	define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );
}





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

if ( ! defined( 'LOGPATH' ) ) {
    define( 'LOGPATH', __DIR__ . '/debug/' );
}
require_once(LOGPATH.'debugger.php');
//file_put_contents(WP_CONTENT_DIR.'/debugger.log','working still??');
//printInfo(ABSPATH);
/** Sets up WordPress vars and included files. */
//echo('here now'); exit;
require_once ABSPATH . 'wp-settings.php';
