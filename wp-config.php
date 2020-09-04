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
define( 'DB_NAME', 'tunganh' );

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
define( 'AUTH_KEY',         'AP}<Gk{l#)30z2jkCVG:pr_i5-NiWSSaku%t76wkG)ro`.Rb0MyHW+qN8HAp29!w' );
define( 'SECURE_AUTH_KEY',  '9.m2mG fR_7CMwDF:m}8pWQzy:xh5r9kJRaf)31|cxHHxH.x_aC-KiU>C>Ta(8YP' );
define( 'LOGGED_IN_KEY',    'oc<H4QGwe&>&I(5{e5f7U;o}NF3~{c?)_MF!$q+frzfB<+tp:jr]|a`/SOJ^$))8' );
define( 'NONCE_KEY',        '<?4c*%?nDA9pivrG OxRQ? WNq20pN${0L &F9 ] :*cZ{t{?g0lu?,Z~zIRs)H4' );
define( 'AUTH_SALT',        'Ogs,f_4VG2p!.#up?4S$BL_qhvE~;w:PJX14d+7v_?K&HFF^{2(ggxy+dhZPKbCz' );
define( 'SECURE_AUTH_SALT', '/^[%+VKZ<R!sHNzr6Ds1]0:g 5j_oxgAko2@jc,n.o3?O-gIp{Z+~&gNfV>X`V_=' );
define( 'LOGGED_IN_SALT',   'nQ*`Ay|8;>OES=yQ%9#bq}dbl+fI[4Y[x9?wcZ$o2+(g$u%i2Vd,v_i79QBFy3r*' );
define( 'NONCE_SALT',       'U1`%uSXQ5xt[f{Q<MHW,YuHX<SS ;#D[a^JE.smHGW?}VPN)rjNRbJe|+yB{Cx/6' );

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
