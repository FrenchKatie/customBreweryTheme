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
define('DB_NAME', 'brewery');

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
define('AUTH_KEY',         '/.U4P`-*?o]};:6_s@M]uyE|b00PK**m}%bWi8`a`|8*F;F#C3>=,Au`jOCx9&BE');
define('SECURE_AUTH_KEY',  'u*Dtc)xI!DXQeH^$$~sm0eNQ1!8!OE[lq2sYoYAq|_;ZVA{h_a4A&30QmJh]QpfD');
define('LOGGED_IN_KEY',    '{.o946HxEnb%@%Vg>a4kIOM2y2va7!g9V.e3kZ2&G)(&^fIRB_=@B7kN)obF/4)}');
define('NONCE_KEY',        'lF.t7ec$VmeuR`y-@n l9&DZXt4W:ca4/@:GdX5W9aojf)`mTf*z9(RJO>dbG*3,');
define('AUTH_SALT',        'YyQL2Fi5uM6S37HrBng:+(19g}`7z78;*1{qo}@Yzh_|63pAlYrN&W!I8]>~:LQL');
define('SECURE_AUTH_SALT', 'J3g$X]wRw)p8RpT=Qu-|K06Tp0M<]ELg1;4!<#c^!e$jm+Eybn#m%.{e_K@0p6mV');
define('LOGGED_IN_SALT',   'IBQg/(`pAY3{fsDL5_%SC8J~ypSE:_>C@SgIKO$XfR?dJk(qa`]wBE.g%Dv>W91_');
define('NONCE_SALT',       '[@iZFbX#6lA?}=tdD^KqNpYW~Xj6(a)&@PVq9<}$g-@=p9Bnfic=@7CZS`:=65y{');

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
