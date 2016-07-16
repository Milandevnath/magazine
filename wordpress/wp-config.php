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
define('DB_NAME', 'magazine_wordpress');

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
define('AUTH_KEY',         'J^PhpFm+cAwXV(w1:UI+cO5x`Oa`h,@BzOCLa=f7j^:m0(s^Jmw#E-3,iQ77_ON/');
define('SECURE_AUTH_KEY',  'MqeE@<n-1%QjrEWj{7*gb]PUj<gu@I~,<X@C8~.;~QPmqGo^r?n>fdyodB-vt&R)');
define('LOGGED_IN_KEY',    'FnckT.-Fk-/GiEpmE{.Cg]7%ipywRgna|RUFM1mlHXE`/{H4FXzQ)gA2~H!KWcF0');
define('NONCE_KEY',        '_#:Q{C:hZCExq|//=Ze>IV^kVF+GhL=F2LwBR$3}i*#%Yg>-*/8.:p_bFQ0,psDZ');
define('AUTH_SALT',        'o24=I{`E3_vS<pBh%e@A.|ah@nFJnV,C(kZe)XcV*`b@UEnE/NeIWtKF&,#Er54k');
define('SECURE_AUTH_SALT', 'B8~$Sl.pUM^W~uJ;j5PJ-Hheq3t;TPwQQ`=VT..S;oUd_=(~,*;} yBXgd3._1->');
define('LOGGED_IN_SALT',   'R($[1N~}|.v|HWdjiU[>2Cqc#I^OAONs9LW{n =(m.eK_Oh snL+,NgfkaG+[tNV');
define('NONCE_SALT',       '&QfM@,FbnJY/6HW7OSNss,W{*a)0/k@/y)E(k|9V-ArGV-hh<!v,?_S~AXJX))zr');

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
