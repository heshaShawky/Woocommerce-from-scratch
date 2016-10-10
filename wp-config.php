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
define('DB_NAME', 'woo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'T*Q;^]`DW.<Fv3rtf|MW4pZ<$|PU}CsLd|b3+4m7x1l[O|3=+([{o?t6$C<ynKx,');
define('SECURE_AUTH_KEY',  'Xg?/VGJX8!lHP-[o`zu|cAIff+f2<KF~8 ]M4@Ow&Sl-LoKAMerfx#rA/+,k:xn)');
define('LOGGED_IN_KEY',    '4-w_/yu)nfU7N%bIk_24e&>+DB54cV#&,-1IqM$BsVQv<VK1g+KG7MR&GQ~V:!cN');
define('NONCE_KEY',        '{g5[BIHE`7d(#!6XN%&LV{qCiq+$qzBww=8|$GGOreaT>{4l|s[*`t?&I%A@fFWG');
define('AUTH_SALT',        'Ud.]uYvVS>:@$TWxMz9wZ]uu.OH>:fJX+(x#|a,Hh =XEklJh478>m^nHh|([rQ7');
define('SECURE_AUTH_SALT', 'vz@?zmSv|8#D%jjJra[Rw)8xC)w+H)z%T9v)vwE?$s?0+{MLN3oH~s!VYfTs{SX[');
define('LOGGED_IN_SALT',   '5|pH*z;ZGN; D]R)MtJ6UlI2iepP,W+$mm40Xl#+9/%2b(oH.jS~rmO]:Eib=%Ab');
define('NONCE_SALT',       ')0vOPDZB/O{Xy]}3ZefW`9{0{f`&y:nD^LE {LsBZ =+J!-vyp|dF[A9pDhKcio ');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwoo_';

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
	