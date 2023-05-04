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
define( 'DB_NAME', 'wp_ecom' );

/** Database username */
define( 'DB_USER', 'wp_ecom_user' );

/** Database password */
define( 'DB_PASSWORD', 'hanLdZK5n](UUR7(' );

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
define( 'AUTH_KEY',         'cZHEh/)wKv^R=h8Y/K] x.R?t*b1H?p =t_- Y?)<KM#Q ov_G [1<y~j`T0e|g+' );
define( 'SECURE_AUTH_KEY',  'XMC!qkJs)RLqh.aa*}><Xiij<V,j{6z.SL0#t12WwO9+NvYSu/B5:S`|ty1LbVDM' );
define( 'LOGGED_IN_KEY',    '`ACKmYC}1fprEl*h>4XQ<:|I #24RrW%^o-c@Q OoEkQgB+frl:cJ3X,i.V&Nb:H' );
define( 'NONCE_KEY',        'FnjGP*/oWFXGzfKj@RU..k,t4Q!*Q B;@H%&Di}@nF7*ZHz@)TcUvXjYHNANJ-`e' );
define( 'AUTH_SALT',        'XrrQW|neG]#Xf=qT=heQYRVA@+_dJ(@g`#!2}LM}u9g*WFdy<r)eOq#wKEOUzz8c' );
define( 'SECURE_AUTH_SALT', '0!Zkw{s`}eVM@O#U;ZFoGN~b2#xM$qF,o[~ttF9q6}o?,,r<Db.62rpRQwM(j!Xx' );
define( 'LOGGED_IN_SALT',   '.=~lr8<*p/,M}C~dm=M)JjbYR*Tx]I-0y8yU#(_dWG*XsHO}0zHA$o4s&=I-HBmk' );
define( 'NONCE_SALT',       '9TT=OABWdr)`A(W]4}xbIlYC$OPAX]AzNjU3eI{=K5zonli`3=ps/u|7YTTef^_h' );

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
