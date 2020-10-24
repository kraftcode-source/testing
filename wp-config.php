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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         ' /p+1F0V}l}pq &Uye=A}HO3AH)3.nuX]>:rx?YRUpt$]1z*VNqHFNY8V+vpi&B/' );
define( 'SECURE_AUTH_KEY',  '>>7/PH>,3z/Ij#AdwQXko,u/uJ^2uN$7~ZTLlW:B Wi<lU.Zqi;zA2_<e^K@Q/=0' );
define( 'LOGGED_IN_KEY',    ':CcNL,PL:RQS@M_PD!/KI]NLsX[0D;T5PWAE18QBHQ9tv&!{y[.7[!~FopMscxj:' );
define( 'NONCE_KEY',        'f~`de+F(UTqcg%;CHFb9_gTp9cp4k_;jP| [qSohd-!,aicD%m8H#Zy*[XrAqy17' );
define( 'AUTH_SALT',        '98Ae[i  by#:d: }bV@lXCQA{psLv4QS(p9ViL}uK$`&@PR^B]gzH<(cqq`e&}dj' );
define( 'SECURE_AUTH_SALT', '9)wKSc8xXt]xL](J^Z79vkc2Gc>%d),@S5?-B]{v$F(i/TE[3T8J#:u}adM.SK5G' );
define( 'LOGGED_IN_SALT',   '_t40tiO[^:ZjI{B^IC3`m.f}cZm+Q!hcATb@:9#q9vFQn`My|VkkpW@b_)pPxErA' );
define( 'NONCE_SALT',       '4p,|z&!)=WD5dIJ&Di0lkQ:{!l?AMWSb0c$,r2@VDJbg&<dj0w.F,o&|j|VRs9x5' );

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

