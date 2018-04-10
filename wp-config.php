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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dod');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iN?]5({t_?e3y{Xz`HKOC/Qs~q/FR|-sog7#{tt/9(`NQ!Or<m[=V~eP]?wXoGX8');
define('SECURE_AUTH_KEY',  'X7Mi2Dc&.r}BIFwL~VgelYF5zo&.w$ee-:3;+<8O$$*)v,zX?R6o}*-XrH[4&_6O');
define('LOGGED_IN_KEY',    'Yr&]Fnnd[V=p>pTe/.vcuP@:k1E=:{Q{|P2&p(Vji1WINL>IRuXM{yLNFY6x&S#1');
define('NONCE_KEY',        '^56w2l%:s>Ds1Ip|R=8x;@aFU$3Q>}l+2$$gL:I!@x~Q#*u)5W5Mps07RR[NKE|l');
define('AUTH_SALT',        'Ah>:=k~]ks69!oSHTejb# WRZ2OdYh!n7R<r#Y]gdKjGmr([YGnc/(WaC01iSbaO');
define('SECURE_AUTH_SALT', 'u%H4,6_@tnNz9R+.)Hyu%s{nX0Z5J;:n@^]it|GBJx x^KDxp&.#bu?JBg9%#q4W');
define('LOGGED_IN_SALT',   'lKLxX:(,?;]EQdj/rrJK:Fe4^|/q%Z~]6=x$Fq|~SepnW1ke}:38 eFKxCg{[wyM');
define('NONCE_SALT',       'WBE!3v$3%a4Cix8.R7#B z4$o5Cn&)*E^Pocs/V#E.%tN?OfSF/Zu&CC;_B;s/lp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
