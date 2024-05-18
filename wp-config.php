<?php
define( 'WP_CACHE', false ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "landingu_sman1tladan");
/** MySQL database username */
define('DB_USER', "landingu_sman1tladan");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
define( 'DUPLICATOR_AUTH_KEY', '3RP`e7WS!bfmU&ic?`$a}Q^9X}4s =cZ^NyAcX?dtl5$$s;6,AYpFN<R{XMIklJd' );
define( 'AUTH_KEY', '7JAg2boUN2PIzu85tLs76UFCC4B1hbwgocegtd7fNTCASfeC2h92SsWSuTeDmJCI' );
define( 'SECURE_AUTH_KEY', '5dx0bzHv18rqSd1fYSBBEILMVMc75V7GJfrnGKi08H6EaeA1FSTfwfPGfWYuEYdD' );
define( 'LOGGED_IN_KEY', '9Mg4JA9JBQSKUuAfuH6GtqIDnmPvHWguFjbo1KI9cJrcaGsYafKJXCCrrny0rWWF' );
define( 'NONCE_KEY', 'BUAGctYTiCAxsCKIju05i5wXpsDSNwiF7RhcQr1cQV0zR6VbCs0xKXrH6b5nzqVf' );
define( 'AUTH_SALT', 'CQprRK5QcadcehzCRdKtpH5dRt87vX1jK8mG2PXtTbcc0Ivx7ELRGAWvTYSwTpen' );
define( 'SECURE_AUTH_SALT', 'R9apJd4mAvq3xwqquxzCYasrTjHSKpTF8xT5Q5dCKKYc80PNeVUHfuDfHz7dcKDx' );
define( 'LOGGED_IN_SALT', 'QcD5iTBpma5Egd7WJ5d7pnsjUPzIQa5ofKXucQnFJ2E7fatJDHw9oJ1GXwV28wM0' );
define( 'NONCE_SALT', 'D0zQKjicJXgGCUepjHYhWztizAtV4VwaImBKE9UxwbYa3LEC7YywxK02FqRdAREM' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');