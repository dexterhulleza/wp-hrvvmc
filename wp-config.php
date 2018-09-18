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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         'dF_]WU#ic_wty_3gw%t,VC9d}i`_!r@Ju4.m4=;_=]^KqgQLWx,TY+>xY(pd/HYh');
define('SECURE_AUTH_KEY',  '(<Fu=RsqN)6$>yg/9GcCowqemmtA8h~$UHXuPuo=!0vNNFKsY`*)X6XpfjQ4B?~B');
define('LOGGED_IN_KEY',    '-lw[wcI1iz^zG%aB&;c6qNOVKkRXyrcQ~75#Xf?^X&r&|cm!DK}qo_+*cdqL8$X1');
define('NONCE_KEY',        '9S0m^EniMQ]j,,9>({-6wT5+VHlIO/.MAz_1>}dG_doi8JYA<qCrXFwRSF}dF$]*');
define('AUTH_SALT',        'y+=@&7%d4OqNf$Xpxw4,tF9HKJ#6RWr<o5{9hQc9)u;@uxfm=N[lV)zy]T;`(]+Y');
define('SECURE_AUTH_SALT', '{gK#56/:.0wa`:=0^Z8!fuN`^GD_!_2~-_)ke;.,3@!>|Ug80{P.q~l2ONK+LBh3');
define('LOGGED_IN_SALT',   'j7#t3:T>Hck^ ^veb2-v0Z[Zyh~[7mgwBw&S(,Ft?UX|ne0ig0tEE^d]q5y;*sF2');
define('NONCE_SALT',       '?|Y_Ywc?6ZiiCI<Dn.D/pJ*;mq>4{$R?+#aj{/Q(uGejswxrGt]Pe^nj)@;$-vWg');

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
