<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u451240370_Ln21W' );

/** Database username */
define( 'DB_USER', 'u451240370_sy34d' );

/** Database password */
define( 'DB_PASSWORD', 'wsRdimmIGX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '}x!54:^viAkem~h_&1-TDI<Q6xP*5h`:(9IfE!3/B!4R,H[JOS_fkpiQJ;Sp+Tm|' );
define( 'SECURE_AUTH_KEY',   'rTw)&h>cu6k|MxvAK_3XU6,].E.L:gSs46c U(ypJ>2pPGTrK=15:8 `G>=H]+4g' );
define( 'LOGGED_IN_KEY',     'FG}jh;O7*p>iJE[Sj7/?Ob3sS`kBg= (sSUU9}U1e< fgb.sc|GI6v,]NDsvW!C6' );
define( 'NONCE_KEY',         'TL>&BE75$-k-K?c<&p)9X|ZI{tCwqD/n)y_.oCT@=2SHgHrEVrqbQv*}/4kkjzT,' );
define( 'AUTH_SALT',         'FS6(ah$#k`q ZXbBt!MoHmk6!F4otP}~ndF.}:@40VIEb1sAm3jJvx@t`bFQwON4' );
define( 'SECURE_AUTH_SALT',  '^Gq49NR#DC(9RVn#lU5e8j=oh=At>|rSsP~u23eNmy}bK&UhysjAa[GXQpEewjo:' );
define( 'LOGGED_IN_SALT',    '>NS=pl&LMgf Q.%]xJyT8<K&ub6@;YcsJi&LmYmodab6|a@nO.?C`[=q_4>Mc%Yl' );
define( 'NONCE_SALT',        '+m(.:2|U~+ZVOBUPMt8h|,w;Sq|n?$}mp1A(AKm]oc<ERz>RHQ}~QX#BFdFzAb`C' );
define( 'WP_CACHE_KEY_SALT', 's[;R[hFf~#=%{Yu(PvL;*XLYo;v ]H<VaGF$h~vsJ?5U,cNP~I%k|.km&FS[!E`m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3e1565e96b75ff58706b406f1fbba9e6' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
