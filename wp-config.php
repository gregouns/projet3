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
define('DB_NAME', 'data-wordpress');

/** MySQL database username */
define('DB_USER', 'greg');

/** MySQL database password */
define('DB_PASSWORD', 'tititi77');

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
define('AUTH_KEY',         'J}!56Y3361dd2cck]Tk22viL0k)I!@G}f&]vk:B?<;^ Nn#rgk6YU,1QxP}<,Zf6');
define('SECURE_AUTH_KEY',  ']Q=(;=.jg87W0i<uhti?7<C^w9/#:I[EVjG>1f),3~;Z@5KNWlZ&%AYD!:m7(=$q');
define('LOGGED_IN_KEY',    '@&*dm1a+D+8u&GC0T.y9eEdfFhRYnos3H&A57=P5x,A;)rPD/UwZ4[eco?lW9{/o');
define('NONCE_KEY',        '&{LMxw2#R&L.r8Kds81C(,swz!;g3d0qrWTz{@ZP`yTq3B;-2|qonrT|9mJkRpe1');
define('AUTH_SALT',        'P%XG=h5#ZPO!hgjR[/V7s35ld>;71?pL>+gdrbyCGy`,Q]h7?T~^?=C0Fsfa431n');
define('SECURE_AUTH_SALT', 'G)1*;5 3Y!oucmX /Z!|VP4EK1!h]7T+A4!J=P<Om{M12 EUjkL@p@1_D;@zQ]Y$');
define('LOGGED_IN_SALT',   'X +SM=Go@1;97+K_1K;,2R.P^zl7opb2nir_f-Z!tK2dd8VlO^(L4V0kx%dnZFt}');
define('NONCE_SALT',       't-k)MAH&KsUxS,n%qr4%{Y8QK,B]^gfBnQ%zzKn3xV3mdkE;?/KNG~NiR+6]~pMP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_site';

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
