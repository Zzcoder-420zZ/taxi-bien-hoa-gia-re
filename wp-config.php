<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * C?u hмnh co b?n cho WordPress
 *
 * Trong quб trмnh cаi d?t, file "wp-config.php" s? du?c t?o d?a trкn n?i dung 
 * m?u c?a file nаy. B?n khфng b?t bu?c ph?i s? d?ng giao di?n web d? cаi d?t, 
 * ch? c?n luu file nаy l?i v?i tкn "wp-config.php" vа di?n cбc thфng tin c?n thi?t.
 *
 * File nаy ch?a cбc thi?t l?p sau:
 *
 * * Thi?t l?p MySQL
 * * Cбc khуa bн m?t
 * * Ti?n t? cho cбc b?ng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thi?t l?p MySQL - B?n cу th? l?y cбc thфng tin nаy t? host/server ** //
/** Tкn database MySQL */
define('DB_NAME', 'wordpress4');

/** Username c?a database */
define('DB_USER', 'root');

/** M?t kh?u c?a database */
define('DB_PASSWORD', '');

/** Hostname c?a database */
define('DB_HOST', 'localhost');

/** Database charset s? d?ng d? t?o b?ng database. */
define('DB_CHARSET', 'utf8');

/** Ki?u database collate. Р?ng thay d?i n?u khфng hi?u rх. */
define('DB_COLLATE', '');

/**#@+
 * Khуa xбc th?c vа salt.
 *
 * Thay d?i cбc giб tr? du?i dвy thаnh cбc khуa khфng trщng nhau!
 * B?n cу th? t?o ra cбc khуa nаy b?ng cфng c?
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * B?n cу th? thay d?i chъng b?t c? lъc nаo d? vф hi?u hуa t?t c?
 * cбc cookie hi?n cу. Рi?u nаy s? bu?c t?t c? ngu?i dщng ph?i dang nh?p l?i.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'khуa khфng trщng nhau');
define('SECURE_AUTH_KEY',  'khуa khфng trщng nhau');
define('LOGGED_IN_KEY',    'khуa khфng trщng nhau');
define('NONCE_KEY',        'khуa khфng trщng nhau');
define('AUTH_SALT',        'khуa khфng trщng nhau');
define('SECURE_AUTH_SALT', 'khуa khфng trщng nhau');
define('LOGGED_IN_SALT',   'khуa khфng trщng nhau');
define('NONCE_SALT',       'khуa khфng trщng nhau');

/**#@-*/

/**
 * Ti?n t? cho b?ng database.
 *
 * Р?t ti?n t? cho b?ng giъp b?n cу th? cаi nhi?u site WordPress vаo cщng m?t database.
 * Ch? s? d?ng s?, kэ t? vа d?u g?ch du?i!
 */
$table_prefix = 'wp_';

/**
 * Dаnh cho developer: Ch? d? debug.
 *
 * Thay d?i h?ng s? nаy thаnh true s? lаm hi?n lкn cбc thфng bбo trong quб trмnh phбt tri?n.
 * Chъng tфi khuy?n cбo cбc developer s? d?ng WP_DEBUG trong quб trмnh phбt tri?n plugin vа theme.
 *
 * Р? cу thфng tin v? cбc h?ng s? khбc cу th? s? d?ng khi debug, hгy xem t?i Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Ру lа t?t c? thi?t l?p, ngung s?a t? ph?n nаy tr? xu?ng. Chъc b?n vi?t blog vui v?. */

/** Рu?ng d?n tuy?t d?i d?n thu m?c cаi d?t WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thi?t l?p bi?n vа include file. */
require_once(ABSPATH . 'wp-settings.php');
