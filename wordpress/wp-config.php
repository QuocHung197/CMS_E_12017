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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', '192.168.100.38');

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
define('AUTH_KEY',         '%qNJW20j:)2lx_=98~.:=Jx$O^Nomz*c~bwI1!1QC/O@9ylE;~CW^%VoH)Q9JuIo');
define('SECURE_AUTH_KEY',  'dOGx%IF?wq{BtMOs^m-ceDM.Ud <Xnta1f$.L]Zxdqg<?PN^*:HoB#iI2mtBeVu#');
define('LOGGED_IN_KEY',    'a9I7$2PMW_f%0fqEiPs2~hx1Fz fD.NT}lxfM:ALvj9$Z}&42?xxn9)7 M-~pOy(');
define('NONCE_KEY',        '3cLd7$jT!L;nr=A6xz9fEYoqM*;.|vAD0ezlwpi76Y5<fa5iB2v`#[Sw[gl^[HcM');
define('AUTH_SALT',        '17 !IXz ]uN#Evrm}r$/c? /3 i|zC5+H,dJEIZIteZ@<NN.kz8UTI=,JSF^Y0>)');
define('SECURE_AUTH_SALT', 'gD=E2j4IE-/ak0?=^eX7MaYZ,pE59eaQ +fIzk0Mb/iRa+yFQ$doD+k3ph-p<.|y');
define('LOGGED_IN_SALT',   'iH?X^w*`M-cfiXs&.FY7-l7rDF?UAw [?Lp)=+Id6C)P9=v_}i[iC)qt$l/8h.R?');
define('NONCE_SALT',       '%ls:c1CD.H32Ey?4hf4PqN_^Btyu5sp{{&C%{)c`rs3;gGS=gmKyf7/N_&Q30?oj');

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
