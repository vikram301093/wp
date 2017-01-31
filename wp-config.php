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
//define('DB_NAME','wordpress');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD',  'sonamverma');

/** MySQL hostname */
//define('DB_HOST', 'rds-mysql-sonam.cem5k1umd4qd.us-east-1.rds.amazonaws.com');



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
$dbhost = getenv("MYSQL_DB_HOST");
$dbname = getenv("MYSQL_DB_NAME");
$dbuser = getenv("MYSQL_DB_USERNAME");
$dbpwd = getenv("MYSQL_DB_PASSWORD");

define('DB_NAME',$dbname);

/** MySQL database username */
define('DB_USER', $dbuser);

/** MySQL database password */
define('DB_PASSWORD',  '');

/** MySQL hostname */
define('DB_HOST', $dbhost);

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
/*
define('AUTH_KEY',         '*|rNPCNCbx7}Ti3OnO~26D|uk@x[?|:AfOqwOPVK[TsId-|1o`~j>^fNR-8~#0A-');
define('SECURE_AUTH_KEY',  '=a=~6GIaB_X|F?|+EkYBn*y,!?Z-0TXE.Pt>I`2*U-?`#5ab9Q5`9.c )uw7,*GE');
define('LOGGED_IN_KEY',    '+G?x/+5I6U;OiejY5caBxH-tyW&<]3L!&O?+J)0*?+hS-;i$k]3acnkfJh4gDP0M');
define('NONCE_KEY',        'by[eR6~>?(7GRx{;.P,&5yKSg9q]IH5NViC<bJumayA>1@Ot%2):l8$viJ*tDKZZ');
define('AUTH_SALT',        'shsA/U1_h>Vv|$)B##L+j+r5f9:m$5[^|7w>Qa R B+^?/28syL/Qpr(C6M+G4OG');
define('SECURE_AUTH_SALT', 'u_NDg-glwKYGYUVPXj9V=1r+-S-U<vh82S=BDg=UoGo-O;$DEa/]4Y6+BFOF,),B');
define('LOGGED_IN_SALT',   '0A4<8}rL]0vze?2hib/H}|(H=QPj~|R[Zfk!wy9-RY5LI>-W+Za{7h V`0ht!n;m');
define('NONCE_SALT',       'NnRiQ<=fzPBxd-4Cg-b-H.Rjs Dy}+a/T2GQ%dmetb%^BlM+*#yeZtJ&*J>&eu-.'); */

/**#@-*/
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');
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
