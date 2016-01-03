<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'pracownia');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'pracus');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'cyfrowa');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gKV>c1;](jT_|x|xE5[+~;5c.d^O?;&%&&k:qZ9Ti%]`wqBme@AIXi[^qy+B <jY');
define('SECURE_AUTH_KEY',  '/I8-?bnN)c?|=^VL#Vcmk!_|Q+V#5ce9z.Sb}-Gf_!u58U.$A|7)+:?CfzW?>?!(');
define('LOGGED_IN_KEY',    '2#=,05p6[96[Z}Iw]VKEPIZ{yaRze@{lm<p!xbi9f8E-+, QH/8y@NaBE#m4T|XR');
define('NONCE_KEY',        '^X L,=PW1wEf7Bq}68]rl74!]u:$?-Utd-JHL`Ixy1|uX+XD|lFY3$I4>,6<Own$');
define('AUTH_SALT',        's!mq[iU>fy7=b+?+ig]ae{HeImhDGXsSWrd GHnmh,|.r9|jrtR]vxN6z%u_YP]V');
define('SECURE_AUTH_SALT', 'MHk;bEEsW-[q@]YL*pb6R@gy?z-v|sfYiz(Q@QhmrRF661B/cc1nsLP]:SRT^fSn');
define('LOGGED_IN_SALT',   'B!^Z_kX}#+jVqE&z +Cu3XU5+3`B^u^;_S7S?FC-o%I~}>&8mVKy?B<RF[hUcM05');
define('NONCE_SALT',       '4uc_/+LZeHlaRaXsCwj:1`y<guwaC4?%E7JhPiijGkS-9QeH`q `_ly*yN*I:]L9');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
