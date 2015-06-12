<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'websameyeh');

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
define('AUTH_KEY',         '(BB uz5#|+Z@cNw*nE1RYP4>hPm(Op.66n {&}I|{*mfY{=Tok(xv5*XppN+C9=P');
define('SECURE_AUTH_KEY',  '~E61(WYAYDbfp6+xtqGJ.qB7EY+dOreW;GvJ+-S}Af#7S_O(DOdLD(Z?KC$=%Vk2');
define('LOGGED_IN_KEY',    ':o|<F)G,c-lug(XVk|Ri- f).iNvRPePTE/Jc=+JQ93:,?OI5DEcq=S[{ 9{=2GO');
define('NONCE_KEY',        'z9<<ODwu@&~+#fW#@4-t-?Yekcaw v(Df_IISaz$ 1e`>t-pl?cz2zw-|jH=Q)E-');
define('AUTH_SALT',        'R,hxjg<Nwdyd6D2HAO@e>b-)&oie2SzkeECZq 1v@p7K=*61g6HZ&{~1ekt.x-1A');
define('SECURE_AUTH_SALT', '!D<]|TU1@h,[2<|sQEf]+@}Q8$B23O=`Y#K&/=tj@]+V__-jN.qZ8y`)_Gk6#RD/');
define('LOGGED_IN_SALT',   '=AJIvM:v=JiH!q{!u*DSFuZ#~PhjorvitJm^Y,6a4O RSE|ki`UhnuF+alm(Ng,{');
define('NONCE_SALT',       '9@YFUX-eCrN%{$|;@GNxwd%j7[;r(dm:TJ}Anza|j},X$m*M%]U9U{<E1t,fPqD@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
