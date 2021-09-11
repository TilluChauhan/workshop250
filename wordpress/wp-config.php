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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8/Zc p:I?4>^1tYKS ;42?AF]^k y{62(<hS]+b^<LCx8zB!NU`w:r=h+mR$+qsu' );
define( 'SECURE_AUTH_KEY',  'iVt>#5{*Q4QS=(iqVTd3TMWT,hNHv#[/Z*)vEJ:Mo3+aE<5ORO/sNRS/|c[*X=4l' );
define( 'LOGGED_IN_KEY',    'zvRx9P^ ^eT~ Z?-0X|RzR5g`sed/Vq<>=ZI#&nbjA4-,#qdwIrzXOC}P*9=s.6G' );
define( 'NONCE_KEY',        '*,`:d(+X]~A/bC|@H^Aay64?GCvat{~*HKqbzNgiT#$Q]]R)NSfP8lMVV( 5,e7`' );
define( 'AUTH_SALT',        '=[hg8Y1w$S5Z?##588i ME2Y,::StcP>v|ui]vI+@,4L&|/+Z-WCOL];k:|&{x]w' );
define( 'SECURE_AUTH_SALT', 'a/ue,`&tx9h8Dt4`[.SySm1km%}N<SThSaqtoBPcVjh58a>mbUPjzpiw@H vV><:' );
define( 'LOGGED_IN_SALT',   'altkHG?P/I- y$fDlxQn2MDh8k%;j}Jpi=qb-2BS889~$VbBx+eyH*OO5^q&_7!Z' );
define( 'NONCE_SALT',       '+^PMvjw)Er~Cl8E8}^0}Pse8.5tjE%*hLfh.uP 7&A:z9wkRYKsK:F?Y24&Lj]>(' );

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
