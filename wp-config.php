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
define('DB_NAME', 'spanishwp');

/** MySQL database username */
define('DB_USER', 'spanishwp');

/** MySQL database password */
define('DB_PASSWORD', 'gesbBmEh21tc2bfZ');

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
define('AUTH_KEY',         'e( z!%Y7r@B2w+*4b]opR||wm2[S|h~ym(pUhv{hw[%s<aR@xbN7wODs2d6VuF]F');
define('SECURE_AUTH_KEY',  '0M@wI54s78yp1[$nvjjakFS0zF|_ia*10b,FN|?4k.[BZ7V,Jy+(Of*B#gKNhXwJ');
define('LOGGED_IN_KEY',    'A1<OYzdzgbOC^D9v-c?v~S)O[#T3|0z 5K|_W0rovai2e8$L=[%`Nlv8)+a`+(P<');
define('NONCE_KEY',        '_}Sw;W8Cr^y.,t+{2Gj|fTK6E%eui[lfaN4%*8h-8t1lIY}0Zz.-[rP5wcC<I##;');
define('AUTH_SALT',        '@I<>rx>s>xd_*hKq+yL&QNI1`LOiDbwIAMEp.rSh8G8e7EyB~FAyu%$KsYz**OPN');
define('SECURE_AUTH_SALT', 'BSwkI~?cyop0P:eykT4XGgJ1l]2?!DI],[N7E1krP+uaRS(5@%3GQTXELy5b2V8V');
define('LOGGED_IN_SALT',   'o@y3g@1]<CjTKrIGsOQz=/hL^#(pCnI53dE:Fkw[xm[fxj@6W}V(a.L5GLS_7qR8');
define('NONCE_SALT',       'V*7^jC*%2^F!vazKp~02?~lDY+D17ps|3LDp9|)6zJv+,D_(Gl !ux-XgDw5gYQ4');

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
