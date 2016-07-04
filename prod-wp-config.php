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
define('DB_NAME', 'gm-arquitectura');

/** MySQL database username */
define('DB_USER', 'gm-arquitectura');

/** MySQL database password */
define('DB_PASSWORD', 'Agust1na');

/** MySQL hostname */
define('DB_HOST', '192.168.0.196');

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
define('AUTH_KEY',         'SI*N1BMT*k|BMK_-A2n|khxb)5FuT<%4l(Rd`H[)yEG)5y6n)Jb}qC]@kurpG</w');
define('SECURE_AUTH_KEY',  'jMXW-KY$Lr<,6Wr${9OXtu+[]{m7pi]]RJ<d8U1s[%-s-}6~v<xGLip+[M.QlMsk');
define('LOGGED_IN_KEY',    'pAWf-$PSk;*.wkPl,rAL@Qw)P0ry@r&1V,33TWbn;R&&1CXKf%e4yO,:8||6-xl}');
define('NONCE_KEY',        '3] 0N&BM>8]V0ax?a.xqayBo*8z%*7bx!#X>:&dO-J-g2ARA1mko>8Z&:~D_]N3D');
define('AUTH_SALT',        'jDbY(PYCgs*!Kz+>Q9Z_0%g^qAygMFr;n:1S)R-*pW|urtaVwosmk+D-d-M>XuC|');
define('SECURE_AUTH_SALT', 'zhmCs(~KZ!unrF3Lf=}Tdb]}BD.9~-,9rf?[Hm)R6|/ZM_D.+X{1WciR: 5-KC:p');
define('LOGGED_IN_SALT',   '~<!v|-? <mWy|_GfxEZv/7+CDVb]J32Rv0<0S%/Kk{ttu8vELmtJvRalE=eWJBZX');
define('NONCE_SALT',       'pV3Zst@+@kWYh2ZS|k+?zS>fGoyRy-x3sp|3:!5|&q2[s|GzNS=;dHH-`XeV1~WL');

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
define('WP_HOME','http://gm-arquitectos.com');
define('WP_SITEURL','http://gm-arquitectos.com');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

