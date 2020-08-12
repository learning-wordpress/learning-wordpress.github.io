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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learning_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '10=cMPBI=qMS5hGhxD*fv1,yj#E9]NOfj`u+9naW0BI,Ac{YU+^Y$?Jp=%=+*M%;' );
define( 'SECURE_AUTH_KEY',  'Z6H/J,Wwz9g1YoBY7>/~z7dk~5w^rEZu^kfET8j }YUHhBMDqDXrw5`){(XnE:oa' );
define( 'LOGGED_IN_KEY',    '%;D9Sc+sSW,.8VG(p%Ofwr)74E!_FI,dND|h&>|44!P5dY]Jj,arzGHM1ru9|7V<' );
define( 'NONCE_KEY',        'px[+xAOm1hMKhDEr*d2gn7X5L]$6Rtvb9`u}Xzx:rhiUnX9{S &[qPuMx2.Nr>Rz' );
define( 'AUTH_SALT',        '&l%n(EEi&cn0kB{B+=)OPEf|y?;$74uOZe8buSb(Iwx|u{?&*=7~(P3UOG!p>mzZ' );
define( 'SECURE_AUTH_SALT', '`|j|W|HkXn7)*o.]+&r86U]B*V?R9Xeu=Wg >SbJTk_${G$p-{;HO:}[m lLU1%f' );
define( 'LOGGED_IN_SALT',   '&U7MOfssPqL$S1VSNMW9gHDvdppYkEUW6nlthZ%-N_wmWX2q:epSM:6f&5g.seIN' );
define( 'NONCE_SALT',       'd_sHoRip8RZrrWZ0c27Atnw(UA<K=kXR/]$Yw=NNx/}C:J=BWu!0,Fcs3OOJ+;[t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
