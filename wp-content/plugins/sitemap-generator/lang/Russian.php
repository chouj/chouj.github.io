<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Russian Language File
Trannslated from English by Alexey Shulga
First implemented on http://cts-fighters.info
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Страницы</h2>');
define('DDSG_POST_HEADER', '<h2>Публикации</h2>');
define('DDSG_CAT_HEADER', '<strong>Категория:</strong>');
define('DDSG_NO_TITLE', '(Без заголовка)');
define('DDSG_VIEW_XML', 'Просмотр карты сайта в XML');
define('DDSG_CREDITS', 'Плагин написан');

// Navigation method 1
// Пример: Страница 2 из 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Страница');
define('DDSG_NAV1_OF', 'из');
define('DDSG_NAV1_PREV', 'Назад');
define('DDSG_NAV1_NEXT', 'Вперед');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Страница:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Загружены установки по умолчанию!');
define('DDSG_CONFIG_UPDATED', 'Конфигурация обновлена!');

define('DDSG_FOR_INFO', 'Дополнительная информация и обновления находятся по адресу:');
define('DDSG_DEFAULT_NOTICE', '<strong>Производите обновление?</strong> Если вы обновляете версию плагина, нажмите на кнопку <strong>Загрузить настройки по умолчанию</strong> ниже. Некоторые настройки, скорее всего, изменились.');

define('DDSG_LANGUAGE', 'Язык');
define('DDSG_LANGUAGE_DESC', 'Файлы локализации находятся в <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Основные настройки');
define('DDSG_ITEMS_PER_PAGE', 'Количество единиц контента на странице:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Для сниятия ограничения введите 0 (ноль)');
define('DDSG_SITEMAP_SLUG', 'Постоянная ссылка на карту сайта:');
define('DDSG_SITEMAP_SLUG_INFO', 'Если вы используете ЧПУ, введите идентификатор ЧПУ для страницы Карта Сайта');
define('DDSG_SITEMAP_GENERATION', 'Генерация Карты Сайта');
define('DDSG_SHOW', 'Что показывать:');
define('DDSG_SHOW_BOTH', 'Страницы и публикации');
define('DDSG_SHOW_POSTS', 'Только публикации');
define('DDSG_SHOW_PAGES', 'Только страницы');
define('DDSG_WHICH_FIRST', 'Что показывать вперед, если выбрано "Страницы и публикации":');
define('DDSG_WHICH_FIRST_POSTS', 'Сначала публикации');
define('DDSG_WHICH_FIRST_PAGES', 'Сначала страницы');
define('DDSG_POST_SORT', 'Сортировка публикаций:');
define('DDSG_POST_SORT_T', 'По заголовкам');
define('DDSG_POST_SORT_DA', 'По дате публикации (старые показывать раньше)');
define('DDSG_POST_SORT_DD', 'По дате публикации (новые показывать раньше)');
define('DDSG_PAGE_SORT', 'Сортировка страниц:');
define('DDSG_PAGE_SORT_T', 'По заголовкам');
define('DDSG_PAGE_SORT_DA', 'По дате публикации (старые показывать раньше)');
define('DDSG_PAGE_SORT_DD', 'По дате публикации (новые показывать раньше)');
define('DDSG_PAGE_SORT_MA', 'Согласно меню (по возрастающей)');
define('DDSG_PAGE_SORT_MD', 'Согласно меню (по убывающей)');
define('DDSG_POST_COMMENTS', 'Показывать количество комментариев рядом с публикацией:');
define('DDSG_PAGE_COMMENTS', 'Показывать количество комментариев рядом со страницей:');
define('DDSG_ZERO_COMMENTS', 'Показывать, если комментариев 0:');
define('DDSG_MULTI_POSTS', 'Показывать публикации, относящиеся к нескольким категориям, под одной категорией:');
define('DDSG_POST_DATES', 'Показывать даты создания публикаций:');
define('DDSG_PAGE_DATES', 'Показывать даты создания страниц:');
define('DDSG_DATE_FORMAT', 'Формат даты (если она включена):');
define('DDSG_DATE_FORMAT_DESC', 'Используйте <a href="http://us3.php.net/date" target="_blank">формат даты функции PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Исключения');
define('DDSG_EXCLUDED_CATS', 'Исключить категории:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID категорий, разделенные запятыми <br />- Подкатегории также будут исключены');
define('DDSG_EXCLUDED_PAGES', 'Исключить страницы:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID страниц, разделенные запятыми<br />- Подстраницы также будут исключены');
define('DDSG_HIDE_FUTURE', 'Прятать публикации с датой в будущем');
define('DDSG_HIDE_PASS', 'Прятать публикации защищенные паролем:');
define('DDSG_NAVIGATION', 'Навигация');
define('DDSG_NAV_METHOD', 'Метод навигации Карты Сайта:');
define('DDSG_NAV_WHERE', 'Показывать навигацию на странице:');
define('DDSG_NAV_WHERE_TOP', 'Вверху');
define('DDSG_NAV_WHERE_BOT', 'Внизу');
define('DDSG_NAV_WHERE_BOTH', 'Вверху и внизу');
define('DDSG_MISC', 'Разное');
define('DDSG_XML_PATH', 'Полный путь к Карте Сайта в формате XML:');
define('DDSG_XML_PATH_DESC', 'Если вы также используете плагин для генерации Карты Сайта в формате XML, укажите путь к XML файлу здесь, ссылка на него будет автоматически сгенерирована.');
define('DDSG_XML_WHERE', 'Где показывать сслыку на Карту Сайта в формате XML:');
define('DDSG_XML_WHERE_LAST', 'В конце последней страницы');
define('DDSG_XML_WHERE_EVERY', 'В конце каждой страницы');
define('DDSG_NEW_WINDOW', 'Ссылки в карте сайта открывать в новом окне:');

define('DDSG_DEFAULT_BUTTON', 'Загрузить настройки по умолчанию');
define('DDSG_UPDATE_BUTTON', 'Записать настройки');

?>
