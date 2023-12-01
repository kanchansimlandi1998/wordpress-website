<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alongkari_jewellery' );

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
define( 'AUTH_KEY',         'ApOPXD(X!+{LK,l7&ah_>jxFJk[/]P5qZTBsWw*}}J)n#VG:yr,Gb@+g Ui8,B&}' );
define( 'SECURE_AUTH_KEY',  'As>L=(h/ow_J+Mg$d)fH5^{<>-W7aMvwKetHg*|@FCH6f|;K;z!5&:cs^Ru)V1y[' );
define( 'LOGGED_IN_KEY',    '$(-lRd@l D5NG`CYRYQOB(}Sr$IG2O8eF,hg=Ck-MBw,L^OWzU=)b> &MgEsNrZD' );
define( 'NONCE_KEY',        'C&AlE[LL-{5sk|6^W)XbQlf|GPLLJlyhQ4ySOE&)tA`rksyzVu6a_IC9oTN=dwZ1' );
define( 'AUTH_SALT',        '&D8/Q(fFCCj)]|Y++08T^l<SCVg@C_ol4ppn/q>.${hsQObK9BgpQ T3wg=*rp#8' );
define( 'SECURE_AUTH_SALT', 'xr[tO!w}<T^bKLIj$Ef-3FZMII &oq?^xmGcC/?)<|H*eV{XOgPcum00R?nle_:k' );
define( 'LOGGED_IN_SALT',   'I6g7#]q~VPn`72?4gqLIu|EuzN0u@SXoR`R+sB0c[w?=zM2Fp<%kh2GPz_6m;?[R' );
define( 'NONCE_SALT',       '|I2[M&6#WnD6(coXJ}B #kacQ^y?u1-^OrFYPi#sI.-`tKsj.[dFA.RhS*wul6{^' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
