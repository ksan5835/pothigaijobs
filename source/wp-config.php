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
define('DB_NAME', 'pothigaijobs');

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
define('AUTH_KEY',         ').UU4=ViaDJ8`.<+oC#?gu&]O?) YtF`qocWk?sE32fa]P2my$bBj:iX!lR+n$h<');
define('SECURE_AUTH_KEY',  'hMZ8sn@%}^I# 6oyu9&;:&3Ezve)-bS#2@Ytuo0^gAkWeL>#+PnEdcOC~}kQGr4t');
define('LOGGED_IN_KEY',    '_jzB{<P+JXdQR`/sR|8:~K 6B)u`-K;>9SbO_ /kIK27`DWUdZ=`>s2V^t#=~U[z');
define('NONCE_KEY',        '5ca5gVot)&( U/**9/D5lfJ?:ip$I<OqR34s^!fnsjOOd![hH~xMM8j`E{$VX+Jw');
define('AUTH_SALT',        'M-sj$`Z5?[k+ndU{#J~gX>Y~8p/~`)0@v(z,qE+*c4ru[2y`LgNm)DIgJPww)gt[');
define('SECURE_AUTH_SALT', '0p=P(e:KB=f-ACVUTuv:vnhX!<r[y9RecE{fxyK&/8i@`d?]eSd$G5e>owk38$qG');
define('LOGGED_IN_SALT',   '_N3cj>WU.}Bow2QA[T50w7P6H]uGu$uu;FgB$TPtmljrmd{YCOsvBtv:&!<fpF[~');
define('NONCE_SALT',       '(+?~P`YG&r| L)m=.*mI}!&dQj2`D<!upc061ZwnSb@:s`x?4eV}$*8RDcznH/7]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nj_';

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
