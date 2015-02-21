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
define('DB_NAME', 'youchase_wp');

/** MySQL database username */
define('DB_USER', 'youchase_scott');

/** MySQL database password */
define('DB_PASSWORD', 'timel00st');

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
define('AUTH_KEY',         '{{B5^][?>>S#6M_(kZde[s#PwxgDIHs;lKRsB6,>y3M@O?;/Vca0KeLPTNYCNU *');
define('SECURE_AUTH_KEY',  'GD_#KF7wvdP:?[I!5g_*/J<Skx7FQ#v/WbU|-5kP*e?_0%BWo+g9u(WFly&(,Qia');
define('LOGGED_IN_KEY',    '-3da8ZHY[oP_p|9!jR.h0J@pn+&p/]qa->>-1%Csp_{7F3)VmG?w+E|Z,#t9-QKL');
define('NONCE_KEY',        'K3*3g)*Hf)OL$>Cg%Juz,L&!::agyA|/8qWksCz4&c6MF%q;/~QI5b|$t#kmiykA');
define('AUTH_SALT',        'J:W}7>jK?C0Q91v?dvsfvvIa/Wq;=K<W<UwHkKyO{Xz%_U&5GHu|WB|jWpcrg>dy');
define('SECURE_AUTH_SALT', '1 i@q;$0wsA7b5|&$=5*$1q)IE73pfZ*b~-7Bq&/djg$nPwcLbd3KE,k-DnlCy+u');
define('LOGGED_IN_SALT',   '# *oaHF-3.2vJRE2C!6qz+d-|ybL]f&%gh?};(l<]KQH/[M---H#&+7qABF>7*lU');
define('NONCE_SALT',       'V5vt~}X<v^-(Rqe42gK@$2;:C?<1tk!HpF9]; ,N%(D$>hHZk<=8^J+MhqEnWl_a');

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
