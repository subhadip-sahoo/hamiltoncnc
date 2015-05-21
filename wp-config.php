<?php
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
define('DB_NAME', 'hamiltoncnc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(RxtX$u^T>lAdZV) I%|G7Z`83a! :{}[D+9S+{&^b}r|C1PqK85}(UQ-KW66(Vc');
define('SECURE_AUTH_KEY',  '0e+x!-$]-eg*IJ*(7.9;m +h;lcH hHl:.%.k2@Gz|D^}&rPn6x3t03nUKYi5T<1');
define('LOGGED_IN_KEY',    'kFT:Et4%0_et*Y&E)F;,vy-4E++^CD8>)x`r}24YYI}b0^.$6izy<xl|an=Q(|=L');
define('NONCE_KEY',        '/.p,60IN+SGXB(]K6;)m#Kyf9EbGK C#CB7nG-M|J4G*.EUtjY{.f7u#Pjya. eG');
define('AUTH_SALT',        '?K{=~6]+)mmS;Ti=X$M0y0618yzI&O?#)ZQ~# )BLvfX-i5JHBq^3fMJ5S{x2Xb1');
define('SECURE_AUTH_SALT', 'L8-w3tL]CN>`C25~?KJ|.g-)kUh4_q--N:^R]+ic;3})P.$@&FR:2TnzmnjFr]Jl');
define('LOGGED_IN_SALT',   'x:1?4l.Z:.hqkk]2eWrvy9K?*]:#U_p?hI]|c}V=;d2h|/yM*Ptg8$FVaMRilOH^');
define('NONCE_SALT',       '?TGrz/46)td:%/g+#!g*{5@Vtt`}yQPYTAm#2oz~-ZAtg389r!/m+}Lv!ZM+))V-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
