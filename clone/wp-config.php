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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordbase' );

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
define( 'AUTH_KEY',         '[|`%I2GUVN~r?JJdj{g$>^1aJSJm<>g1)j0Qc=#w f&wiV&[Dh;6u.W91,J%A|,^' );
define( 'SECURE_AUTH_KEY',  'BG;oP+)jtI1)~>|/1_`O`FMA3KjOmymJ^RDR0@}q#yoa=GhynhAZr-bZwdmZlXzQ' );
define( 'LOGGED_IN_KEY',    '$*vcXS![3O;qh2Ttr?ulXug#,62ZY}*=*--@*{e~RT:jfRXq}mp<nh]G~[_Km5uh' );
define( 'NONCE_KEY',        'QG1RZx]~>iTfN6J?`N>P;G&&.t^(OH1:Gq7^4 8:BhS-:Y?UxW.o2~H{B;y0jDEO' );
define( 'AUTH_SALT',        '[?%*KyML,GeRlkzd;Md9$Z#Az>h0H#0VE6{,WB/>U<*2lGW%)h3}%{1>l 3, j!]' );
define( 'SECURE_AUTH_SALT', 'Jd#Q4ZlP4wiDJ1{HD04v: 0ln+x0h+S5P,D1TGxzL}/eakt)Li6Hj}Af%![ktz4*' );
define( 'LOGGED_IN_SALT',   'jcP9ajtlKg<`DVukt< `NuWS_T>11[v8YSjD583jb@1z2K@qK530L}*2C/?#dgFH' );
define( 'NONCE_SALT',       '> @N[sGNoVNb~wQ9q**d6z|!85ak^+)DI}1+&eY(8@WOLsY91iB[VSbCm6z)EvSa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Table';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
