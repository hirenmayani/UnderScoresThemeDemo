<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'underscore_s');

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
define('AUTH_KEY',         'd..(IY)zH6!o8@Nln1!{*X3+MON=~Hp$UYdn>}g6XMDM5X0S^IKqHGk?C!SVl<N/');
define('SECURE_AUTH_KEY',  'o9.=L!urQGO@67*atVc 0h:7P~])d(/SY[pUx)RO00ULmMK|x;RX,~_V`Mn#d-bu');
define('LOGGED_IN_KEY',    'DTk.Pi0-}NYkZi~=HLNkFIATev7[.V%^(a*4:hAm*^osWa>FV,axKa]%=u*#2}E1');
define('NONCE_KEY',        'X$|?7%/:9XJlkt40[z.n_zov5>1coQ[yQ.ev51IVvg)2C=R$y(E<:,6si)$+3@>j');
define('AUTH_SALT',        '^LR;T4,?tY71hBiu]t$r^Mx{{lh|E)f0c6,}Y>8O[r8T92Ep;K7V~/@mu%(;Y|*h');
define('SECURE_AUTH_SALT', '9dq6y|=X}BAygj<E<74gT,;&9jsLUTLC?:zIM8+9HzX4vG`p7B~n44z2i@RbWQ/n');
define('LOGGED_IN_SALT',   'yS39lU-S8@ZjC=cw?3*$+%I!8pr9X7-PaQ;|#SmkIW*JvsOyF[2@(A--Oj()g&Lw');
define('NONCE_SALT',       'Dik+WK:o_Z:N:J%Fc!r|0OuUbC3Ua@<3,g?-Ejh$5i?L?Gq~L7L>|kGwBcP6wem|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
