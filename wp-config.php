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
define('DB_NAME', 'wordpress-two');

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
define('AUTH_KEY',         'I,YdFU{<z){:f#fA}cN){so|abYV!C-<vkO{x,nguPjJr rOe*3sy/z/v kiO}58');
define('SECURE_AUTH_KEY',  'kqWn5aR.fLX.<NBHvKO7s]7b{`Bz=+q[idqAWB0uXsgh@,2l)v0M{s=L^2icUn*H');
define('LOGGED_IN_KEY',    'SvLA_*)td4yP>)Z}B]y:}xXzx%e{dGb |K-lv:Tr&sL6(&&`V&0]G2`[RdpgII:~');
define('NONCE_KEY',        'g(AlH%>m<;(ek]j7Tvh~eu`=xTi@jBcs,<kT~9|},8 ^[Hi/]@-eSR@4[MjVYOB#');
define('AUTH_SALT',        'gq676!gyRK3;}1:,R&FX.cLgCxP9YJOL#P=SE-|Ir7QCj:Xdr5@-o z{@5CKz|fP');
define('SECURE_AUTH_SALT', 'zTRHv|pdnCTJH&))N|96YGq4S-?#TRpfeTgl&,IKtm[wFCh<$GIM$XJ<Un3e>(YK');
define('LOGGED_IN_SALT',   '9j<i6#G)C]|^gu)f0Z$xVc@t{)=?W)>o[~Z6XVp3M w7$471lpSC.q),R=GFS8`%');
define('NONCE_SALT',       '19b@xA&XZJQd?tG]2 ?1^hfjtS+ pxcDn0n)ehpV8q.<onw_1;|B+N;+ >}`GBLa');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
