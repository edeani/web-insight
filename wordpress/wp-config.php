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
define( 'DB_NAME', 'insightdb' );

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
define( 'AUTH_KEY',         '*L4,l>vE<~+@C[^VoXnr<?.NE<fKCQD.Y-$6zzbVU6RX,x_h J[.GT<lxNx@4Q%$' );
define( 'SECURE_AUTH_KEY',  'doK/^P=8<d6W8T6EA-H^G>a)Q*k[3YC/dL_;BIN7e~sV2sVpO]?H !LTT3>8N>w`' );
define( 'LOGGED_IN_KEY',    'V%aO<>GUs,h%&BQ.XS;ocb$P%Gl<(_FtO(g|/~?Gb:b>mF]Z5polDWG@``PC`T=Y' );
define( 'NONCE_KEY',        '6&o}w=56P1]^|WR1w_M1+E;[eh(3O }G4lZ+R=TAKu9D_3Y.u)sH.4i~;%> eHkT' );
define( 'AUTH_SALT',        'nBp8VcKS!$|j3On6<7!4dPujY<B9eF(x2*<^pY%g-T?*QDW.!KY3uHVD}>VDmQ[s' );
define( 'SECURE_AUTH_SALT', '&8eF[Cn C=$lw^@g/Qmu]nMamo9}3 u0J5&MQ~MI)V+}H&k7JmRabE~F]o7gu2h<' );
define( 'LOGGED_IN_SALT',   '7}1ZdFESK4ZBJsL2za2uQLH/PF&?%JFOg,JiUZmIuL[o%jWR /uKvM3mOQf{IP3[' );
define( 'NONCE_SALT',       '!lF0QlciDBax-oL4u>pP0,8j<HfIb A[QY:xHNYMG?;:ng!xZ4g^J6K7zM>a3d9C' );

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
