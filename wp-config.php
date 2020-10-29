<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'childhood_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Dazi01081989' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$8)jcR#F1_XX`on[d/p(IPj@Hsuyd-ZvAmZubS#McpnrnQkf9-p _#DHNf3B@(`e' );
define( 'SECURE_AUTH_KEY',  '&/KAMD&lYDBlzsFY?xxq.Ug6V#*[g[Ia@; AkJ0YVkx,NyGS[shY:mE.cany=FSU' );
define( 'LOGGED_IN_KEY',    'P4u-_0*mk{.=!O0}&[wo_+aQxB+12/5-$)p<AQpiK!5|ohPC$:CNert.#JhH)lP=' );
define( 'NONCE_KEY',        'GsGIX,$gSq1{]uC 4O11EVnULGw3F:MQP|<($hHWN0N[*@D pd_.c/[L:zQ,M}WP' );
define( 'AUTH_SALT',        'H k7|1lGjjQ3RXw(1pG7b*s?A`hV{uj![SBN_XcT?kDh.9JUo2Oe?a96!Yk&^8D_' );
define( 'SECURE_AUTH_SALT', '<jEP@IjyyVdPj/-}A@YOjD6W:W#Z#w&]nPo{BXC<VWC>&_x;b`P^+n%Ybe.lGOE=' );
define( 'LOGGED_IN_SALT',   'ijOWnbxUry!|l5!&Cus Tji<f4T~B^&i1(gJz+6_*9zoB7sqs1H+_Y@j49da?5vf' );
define( 'NONCE_SALT',       ';6`SO/cz:!F(<&9p^N*W?ctEVqK/n5%ImiG`d.QQ/HAq-s.cJ*ZqB^Xu^+jolxcg' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
