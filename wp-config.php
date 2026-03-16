<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emacademy_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%!{ENmb@S*J^qZ<X. 7*0+~{$#)(ZFCOUr6XsOb_%:M6rZHdAOzX~PiY4b?c@POg' );
define( 'SECURE_AUTH_KEY',  'm{D%h{`9XcF4{$ZA>#91E;E6EsBuFiUhRUp`HsQxG&B[<u><a[`9gd[Ef;!G+0fL' );
define( 'LOGGED_IN_KEY',    'b%,jVYQ`b0,^t%ojzU^@.<UI[if/U6DPwkl$B%Q+}3&[s>D#_B[9de8.DG34}|>i' );
define( 'NONCE_KEY',        ':jQ,Dl=;WfOUCF&^7cTY:Lg%1TT$7i?Ovx30/=nq@L8fm<9CnUR5B<w$>EKHN*Lz' );
define( 'AUTH_SALT',        ' t=JcBZ<2)~$n+.p?R<rolt=llW&^R#^t[s&5:nDsMCHQF.37k4 KSwqh[1o/XtG' );
define( 'SECURE_AUTH_SALT', '&nwX.vUD1Cc2-#-*]smAx&c^AgCF[T 5(/Ana90~}BJgDVKDe)VZN(l-X{Kgf%UK' );
define( 'LOGGED_IN_SALT',   '%s|=U[4X)yCX/Sc7ZMi~k<bk)Mt>hNu}W4kP+PO:&$VO@4#U s~52Ss1tF<CurP^' );
define( 'NONCE_SALT',       'ccDtlp>cqJA(7ZS`1;@0jC6vd3]z$~_J=X34F2J_Cl`PaXfbZHGLgY#P:&TI5TtP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
