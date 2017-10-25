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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'wp_test');

/** MySQL database password */
define('DB_PASSWORD', 'wp_test');

/** MySQL hostname */
define('DB_HOST', '172.17.0.1');

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
define('AUTH_KEY',         'G_9 .U:DAggv1!IB-A182&57)>6%cI%Rr B<s_K72;/RL^3{1fW$Us^*vR:=KD;Y');
define('SECURE_AUTH_KEY',  's 3$ReL9]EpZi9).cR ]x0P&:6Q)Ob$i4Kd=68$;KXA);a[SJkpSB=#--fYSK=hh');
define('LOGGED_IN_KEY',    '<*&8$8D-<fZBJen!tt(Vi(My#aS-t:^-8O/%<S#Wy_kpBG]FX2@#mzEVez=ASriH');
define('NONCE_KEY',        'nIb21|2C3^HxJRevE^={> n<NRazAY5C9eg?zbHWi2`rD502L~gX@C~VsL|3!Wi*');
define('AUTH_SALT',        'SV3Xn/(q+CYsWWV87?@kU)YByeuP$wXl*IJN=&w5=8iK[Vd{(%Ta;$%dk?`33np0');
define('SECURE_AUTH_SALT', 'i;sDPz=FB+v~PfRM0xATyHx F3^)7el818Ng1MLCU* =:qh};5B2f`H$_$7orvgE');
define('LOGGED_IN_SALT',   'ub9D;3gw3q5G%Z!3EMBzvl[U}cXpr1rRfDjm5T 8^J?B0X:36[D/`2~DcZY[@5sW');
define('NONCE_SALT',       'BdNo8qrf,9uI_&N(:6S,c.9n17;W*igdyF?](v1iQV9NNpY(oAAA9^}W @8<;S9>');

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

define('FS_METHOD','direct');
