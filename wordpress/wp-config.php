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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Q+SL_M2t!ZiXlo*K`Xj,:A3BdFUN_F8|k{B0<79D.(_l_yk=bVNCZ*gTf17>>q]{' );
define( 'SECURE_AUTH_KEY',  'C[.h0{u!v7bAl6m`;s|$IK=khyjA{<+,zQVatPRza72cG{Dm,j6E$[p`PXsgZ,XN' );
define( 'LOGGED_IN_KEY',    'FR4_ZX)Qdw}/ZO8/=,3gRf83))O`w4k1[|qTp?pg%#i2By?30ys<E9Elz) /VbX>' );
define( 'NONCE_KEY',        ')tD7YnD_Kd9t1dm)Ada-R)9/PvY8Dw27+j-Qt=_$_Bk_R0MBj8@c_O_]{@xmH7t)' );
define( 'AUTH_SALT',        'kW7w}3U3X`5`GTWx@>WRbvo2o0Hw,c<PZX)w|qCGk;pV%oTIM:Y]<<fZv:gT+W&<' );
define( 'SECURE_AUTH_SALT', '@e@D= d{EhK+x>cy9w!*:uVI|JlQ eQ)*AOrV#:zmv4vhGBJ&6RCmE+-]E]=fH-O' );
define( 'LOGGED_IN_SALT',   'd/us5//g5St-RFv^yhbq2Oa0LrAu?P_`yBtKL!6By4{0*D9P)2~wXohQO=T-YN{s' );
define( 'NONCE_SALT',       'kJN1Rk[<v3g-jN^ANkNEg`t?l^rQ.lxSiib=<r%&lH|cw`*@#=sXS:}|)1]%*7]5' );

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
