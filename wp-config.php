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
define('DB_NAME', 'wordpress_db_exam');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G=EJ2X(h7anUc1w1AH[iKca!#:AQ0[HXQG>9-fM^!t9=uQ&F+i?keZRo{zG;HR-U');
define('SECURE_AUTH_KEY',  'bXDci]+s/nwcBU(X%q`n8:$4aEB@>g@sep~mJlC5i$^|L8z@jY3m}?9z@:Jx_-G:');
define('LOGGED_IN_KEY',    '(B92w=7<AUubm]dEGkn<_im})d*2J7:5:WVTSJ?{DG<QO!,UON$YORyT_C?}]_.h');
define('NONCE_KEY',        'GA#[XU,0h{TMp]=`E.*{1qoT0JmLm5y70%j5([eoQ|Pbvb.3nDtUnF~A%n:Y(<=g');
define('AUTH_SALT',        'k3TEbev~!vu/V@2?+|G>-f@R5PRp?qJAvLWHlp^V5@Pi4 Zr@0rT<G8f l;rE,S=');
define('SECURE_AUTH_SALT', '{ws:T]1]~&?mePY,o{CAfuHoKN#/v.n]e|h]UUg-WIecO&Oz:qCVk7<3Ki45xQOe');
define('LOGGED_IN_SALT',   'hU0Gu[@*4w{:J>.g,V=cj:)7#KJiuSINB;#H@]UpHqq-{FPqEggu+0g7Z4ESH5(X');
define('NONCE_SALT',       'kokl.]DrHN$RDmy:&X3xB*M884ZXe`if@.N_!H0{JgEU$x~u1KHZQC<7D[Y9e$WM');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
