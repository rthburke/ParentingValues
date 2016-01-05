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
define('DB_NAME', 'ParentsValues');

/** MySQL database username */
define('DB_USER', 'fltAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'Shescaredme3');

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
define('AUTH_KEY',         ')X^ dJgpN>}#^HS=r0cT/^/sqG9+F(hrHT$*|9iS+A9?$BLb33Cwq}6%vumCTz_8');
define('SECURE_AUTH_KEY',  '-:S+-DBIdW9|->dvD0-yIZ}Q$8[cS=)]}i9kWAvZJ40g`ps!^(Omeuj;)fp`55]9');
define('LOGGED_IN_KEY',    '$M[9-o,Ea@umLLXn:]>-0wV^8) Vbn1d?6S[)gBJ3DOh3Yl{f |mn^ K$aVmPw55');
define('NONCE_KEY',        '>jqHzaw|C#wJ<T,os+7[)#VRDs5I<VA(TBAE9n_|FQo$9Zj<)is_,2bYDRf-Qe^>');
define('AUTH_SALT',        '/>NvQH;f8G`&>-#-G{uqUXFWr3a2 %p>b2ua,3i+Cq*BF5uRw-zB|~C;ePOz9C[>');
define('SECURE_AUTH_SALT', 'rXIFXe6~yl8@5fLM0CM?N^SOBd*FNGIT>I,#e$UZO$LF$bzTzUb>xO4`V)V#G%Gx');
define('LOGGED_IN_SALT',   'nx}X{sN:HQ9T4_+~VGPk;B`eX2Dx-ds>sAt.~tRo<5otD:jfH^|Ex-V#DcN:-vp{');
define('NONCE_SALT',       'p1#Hyv=LxIvVRA+Zh7Ao-B7enr|Hj2l@B+cUZ4}pv[L?>F^%aM,4$$FGb7Ljnrk8');

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
