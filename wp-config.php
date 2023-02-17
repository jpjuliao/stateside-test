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
define( 'DB_NAME', 'id20309287_wp_d0f3576134a8629c6aff065d7c08af6b' );

/** MySQL database username */
define( 'DB_USER', 'id20309287_wp_d0f3576134a8629c6aff065d7c08af6b' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd5f4e7300c39bf8191c0931d979c15aa3431b699' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '~*XUJugMyEtpd3sK36od<h4-Yy,YcqhP~F;8WgW%:=GERD:OJJ}PZ@xBk,-X}R.N' );
define( 'SECURE_AUTH_KEY',   'Af(9LnzMopm#@m6#M6>q(J,rS{I|nxbUK.`$(/hzb(}8T1{W{i?M?m._j0!,XiuC' );
define( 'LOGGED_IN_KEY',     'qJ]0},0r|o(vUoi$ng#T77kR.f%V^MmC1FC $?-_UWV~R*u2jZ.,=CV9]Tzq8iu{' );
define( 'NONCE_KEY',         'TR|L*cR,Qyl7VItuT6dhmr<Q13=s|/M-bY].Z^~.9QIGekELk?L)ZG)5+r=$.X7&' );
define( 'AUTH_SALT',         ';;k_ R}$_JC<f-x0xI^KwY|)HC.a#&|S_bCgE6AtBfZ_n`vS8iE=M_f^-$D[t6~G' );
define( 'SECURE_AUTH_SALT',  'H>p.+F,!`[ezgmQYycCA[5gB[9k|h|9(t#,;0!fk6 9XDb.Kwv]50Eb,;9$M167:' );
define( 'LOGGED_IN_SALT',    '6F-*C_JR`w+NKAS4Op!=&l|:qSKCmm?47cv}}xEUt*t]T{X|:yO7= {1[8u[7[(?' );
define( 'NONCE_SALT',        'X7/3wtk4jl1Jh)S=G3VQ`Yi&Viwz|(*_T9PPpv_6-!Z%#O$rm%9#AIJVLCh7Hq#D' );
define( 'WP_CACHE_KEY_SALT', 'K>PlmGTsgqprcZvAzdcr2C7zC@/WPX-WqTUf=$2;1fz<XSe)b>/A8@LJwL.R=mbZ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('API_KEY', "AIzaSyCvlZ1r79q_QJwaDRU0KWbe466WV8pemR4");