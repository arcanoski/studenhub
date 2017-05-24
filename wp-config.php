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
define('DB_NAME', 'studenthub');

/** MySQL database username */
define('DB_USER', 'hubstudent');

/** MySQL database password */
define('DB_PASSWORD', 'StudentHub@!');

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
define('AUTH_KEY',         'cn^HX*m`kSYJ1U4P|U+8Ku!NYi#HI-5rID)DyxCj^j]4J-<l07rW;7XrK!6h<Pl]');
define('SECURE_AUTH_KEY',  'v*D/FSIu:2WV9f8UZY8Bs~Rxi[NY%Iu_I0`lMTUzr/)kEeI Pk4]DU|V4apQ%_M0');
define('LOGGED_IN_KEY',    '`#h n(>h=9j11|TIM^YCaaryp|},Ek=$/s8k1ciSn$<UpJ:C$-$sJ<4;XXr=~1!/');
define('NONCE_KEY',        'aq`cx_B,(+-Dwv]aJ_V([+=`c41<|rdMMx0waj[T.SOG^#Pes)}2%SG{yO|^vkpG');
define('AUTH_SALT',        '),I+OS4F9-y@>9$>r1bt0*^jG4Ln:lClfvlm[,M4x7Q`|PZWGi;=yX/Gyxr.C+mW');
define('SECURE_AUTH_SALT', 'E^.a r75KNo;1O*w01gOdykPs.^ixAM[OdA{{_<5BjT9dM/:%FbP:9I4oBjf~<X;');
define('LOGGED_IN_SALT',   'd}C5CPbS-%}T}yI4h4GwVS6G@5V)</9$7]Z<urfio$%U|OOd,{(Kg<XcuD)nO&A&');
define('NONCE_SALT',       'pUyuT(hy,;U!ua!^/A1O<yEGp2!1TrkBcg;CQgKvPONIbT9a(IOG|6mK4{N08)Bc');

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
