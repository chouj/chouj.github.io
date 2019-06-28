<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Russian Language File
Trannslated from English by Alexey Shulga
First implemented on http://cts-fighters.info
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Сторінки</h2>');
define('DDSG_POST_HEADER', '<h2>Публікації</h2>');
define('DDSG_CAT_HEADER', '<strong>Категорія:</strong>');
define('DDSG_NO_TITLE', '(Без заголовка)');
define('DDSG_VIEW_XML', 'Перегляд карти сайту в XML');
define('DDSG_CREDITS', 'Плагін написаний');

// Navigation method 1
// Приклад: Сторінка 2 з 5 : Попередня : Наступна

define('DDSG_NAV1_PAGE', 'Сторінка');
define('DDSG_NAV1_OF', 'з');
define('DDSG_NAV1_PREV', 'Назад');
define('DDSG_NAV1_NEXT', 'Вперед');

// Navigation method 2
// Приклад: Сторінка: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Сторінка:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Встановлено стандартні налаштування!');
define('DDSG_CONFIG_UPDATED', 'Конфігурація оновлена!');

define('DDSG_FOR_INFO', 'Додаткова інформація і оновлення знаходяться за адресою:');
define('DDSG_DEFAULT_NOTICE', '<strong>Виконуєте оновлення?</strong> Якщо ви оновлюєте версію плагіна, то натисніть будь-ласка на кнопку <strong>Завантажити стандартні налаштування</strong> нижче. Деякі налаштування, скоріш за все змінились.');

define('DDSG_LANGUAGE', 'Мова');
define('DDSG_LANGUAGE_DESC', 'Файли локалізації розташовані в папці <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Основні настройки');
define('DDSG_ITEMS_PER_PAGE', 'Кількість одиниць контенту на сторінці:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Для того, щоб зняти обмеження введіть 0 (нуль)');
define('DDSG_SITEMAP_SLUG', 'Постійне посилання на карту сайту:');
define('DDSG_SITEMAP_SLUG_INFO', 'Якщо ви використовуєте ПП, введіть ідентифікатор ПП для сторінки Карта Сайту');
define('DDSG_SITEMAP_GENERATION', 'Генерація Карти Сайту');
define('DDSG_SHOW', 'Що відображати:');
define('DDSG_SHOW_BOTH', 'Сторінки і публікації');
define('DDSG_SHOW_POSTS', 'Тільки публікації');
define('DDSG_SHOW_PAGES', 'Тільки сторінки');
define('DDSG_WHICH_FIRST', 'Що показувати спершу, якщо вибрано "Сторінки і публікації":');
define('DDSG_WHICH_FIRST_POSTS', 'Спершу публікації');
define('DDSG_WHICH_FIRST_PAGES', 'Спершу сторінки');
define('DDSG_POST_SORT', 'Сортування публікацій:');
define('DDSG_POST_SORT_T', 'По заголовках');
define('DDSG_POST_SORT_DA', 'По даті публікації (спочатку показувати старіші)');
define('DDSG_POST_SORT_DD', 'По даті публікації (спочатку показувати новіші)');
define('DDSG_PAGE_SORT', 'Сортування сторінок:');
define('DDSG_PAGE_SORT_T', 'По заголовках');
define('DDSG_PAGE_SORT_DA', 'По даті публікації (спочатку показувати старіші)');
define('DDSG_PAGE_SORT_DD', 'По даті публікації (спочатку показувати новіші)');
define('DDSG_PAGE_SORT_MA', 'Згідно меню (знизу вверх)');
define('DDSG_PAGE_SORT_MD', 'Згідно меню (зверху вниз)');
define('DDSG_POST_COMMENTS', 'Показувати кількість коментарів поряд з публікацією:');
define('DDSG_PAGE_COMMENTS', 'Показувати кількість коментарів поряд з сторінкою:');
define('DDSG_ZERO_COMMENTS', 'Показувати, якщо кількість коментарів = 0:');
define('DDSG_MULTI_POSTS', 'Показувати публікації, що належать до кількох категорій під одною категорією:');
define('DDSG_POST_DATES', 'Показувати дати створення публікацій:');
define('DDSG_PAGE_DATES', 'Показувати дати створення сторінок:');
define('DDSG_DATE_FORMAT', 'Формат дати (якщо та увімкнена):');
define('DDSG_DATE_FORMAT_DESC', 'Використовуйте <a href="http://us3.php.net/date" target="_blank">формат дати функції PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Винятки');
define('DDSG_EXCLUDED_CATS', 'Виключити категорії:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID категорій, розділені комами<br />- Підкатегорії також будуть виключені');
define('DDSG_EXCLUDED_PAGES', 'Виключити сторінки:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID сторінок, розділені комами<br />- Підсторінки будуть виключені також');
define('DDSG_HIDE_FUTURE', 'Приховувати публікації з датою в майбутньому');
define('DDSG_HIDE_PASS', 'Приховувати публікації захищені паролем:');
define('DDSG_NAVIGATION', 'Навігація');
define('DDSG_NAV_METHOD', 'Метод навігації Карти Сайту:');
define('DDSG_NAV_WHERE', 'Показувати навігацію на сторінці:');
define('DDSG_NAV_WHERE_TOP', 'Зверху');
define('DDSG_NAV_WHERE_BOT', 'Знизу');
define('DDSG_NAV_WHERE_BOTH', 'Зверху та знизу');
define('DDSG_MISC', 'Різне');
define('DDSG_XML_PATH', 'Повний шлях до карти сайту в форматі XML:');
define('DDSG_XML_PATH_DESC', 'Якщо ви також використовуєте плагін для генерації Карти Сайту в форматі XML, вкажіть шлях до XML файлу туть, посилання на нього буде автоматично згенеровано.');
define('DDSG_XML_WHERE', 'Де показувати посилання на Карту Сайту в форматі XML:');
define('DDSG_XML_WHERE_LAST', 'В кінці останньої сторінки');
define('DDSG_XML_WHERE_EVERY', 'В кінці кожної сторінки');
define('DDSG_NEW_WINDOW', 'Посилання в Карті Сайту відкривати в новому вікні:');

define('DDSG_DEFAULT_BUTTON', 'Завантажити стандартні налаштування');
define('DDSG_UPDATE_BUTTON', 'Зберегти налаштування');

?>
