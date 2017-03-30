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
define('DB_NAME', 'world_voyager');

/** MySQL database username */
define('DB_USER', 'world_voyager');

/** MySQL database password */
define('DB_PASSWORD', 'B34xE2AT');

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
define('AUTH_KEY',         'KJ*O`VQmiso9E3d`&!=6>R`y[B{$0Jp`]maxP/c2r;%l44~WJb(,MMU^F4^[ WEL');
define('SECURE_AUTH_KEY',  '5;O2f8!v2!F8,< LJ!+DeV`)26MK_NKABC!-$0Np7pT_{[*Zka|/t5 ,Y$`t2hBL');
define('LOGGED_IN_KEY',    '1tghNB*]GJZ;K?V|FAe%+BjdSFy2wts~rn9Verj6h$L^*_uz|JiG)Z[lNzZZ;78F');
define('NONCE_KEY',        '+#iEoE,&0A|e T+RI;0u7)%EDF[R;ntvD/# ?,2q.&1pvvR;2[q$-mNP,Lx>U,tt');
define('AUTH_SALT',        'pEip/bA)t]MSdK~V%`,};[Dj %k(#~D7J^v%@a65{<-yG>-GdusS4OW{JFv5|$^[');
define('SECURE_AUTH_SALT', 'zjS$?L3nKj0m+ g#.zY]3{qQkYh#!6]w_9j(iCooia<rPO8r/{UjA:DGtxUw:YnP');
define('LOGGED_IN_SALT',   '}5#+{=L_-%Qpz)C{{..#/<&LM))=O)@;Dm|qr3L@AI_DtGLa~hKotM5U[wZr~~{2');
define('NONCE_SALT',       'oQ Qp2?mqEz]_UB1HfI!b/Ov@+bf$q|*K(>5r>,#s=jUsRNM78h*Kzeca4]56GdQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'geboh_';

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
