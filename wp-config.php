<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ivan' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ivan' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZU:9/$nD.OI=P)]+iYoH_I}ai/lf%Y6sdZ<%GNS>Np&V=[|]GT;1 ~s0ZUo=5<4+' );
define( 'SECURE_AUTH_KEY',  'ItU8Fajy; GZGE&,&2P{_=IF#_DNQqs_hRhvhbR[XYBs@k$.PDZ/Snup*1IB(!#L' );
define( 'LOGGED_IN_KEY',    '5`JYwETZ3+%k=-}kffYkvv~kV$ALG0{t_N>v4;Y(fj ew=<l>96y|6.`pV)0,dn@' );
define( 'NONCE_KEY',        ' 2olIo!$J8NoTAtNo>7jF3ZedS^?CO{Shx%J7 Qs0 ?$!;D]vI1E}+cIaON?)[@`' );
define( 'AUTH_SALT',        ':#m;VTC1T)QnK3qxoZvDmP}/V_hPq^lE5mn@c```ScxeYhr;b8e=!<SW2/Q@UJ|6' );
define( 'SECURE_AUTH_SALT', ' RX/,X7yIv!5DdFnc<xb$UkjSs1pSkItE&H8SId)y?l7j30b:p.cwS=+!@c&h2l/' );
define( 'LOGGED_IN_SALT',   'HjdV5?T-?YuYgw;PeWe)-U75Z`:&B2O`Vu3c$xP?1$j@f,cI3I#r xK+ak)nrucX' );
define( 'NONCE_SALT',       't(!NS*nAAN~IP#M;sZ6JYn$tb!$-cdK[q!H$^2zKMD>ear-fzKGqs9kS4P6pC=Fh' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
