<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Bulgarian Language File
by Iliyan Darganov, http://www.darganov.com/
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h3>Страници</h3>');
define('DDSG_POST_HEADER', '<h3>Публикации</h3>');
define('DDSG_CAT_HEADER', '<strong>Категория:</strong>');
define('DDSG_NO_TITLE', '(Без заглавие)');
define('DDSG_VIEW_XML', 'Разглеждане на XML карта на сайта');
define('DDSG_CREDITS', 'Плъгин от');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Страница');
define('DDSG_NAV1_OF', 'от');
define('DDSG_NAV1_PREV', 'Предишна');
define('DDSG_NAV1_NEXT', 'Следваща');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Страници:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Настройките по подразбиране са заредени!');
define('DDSG_CONFIG_UPDATED', 'Настройките са обновени!');

define('DDSG_FOR_INFO', 'За информация и обновявания, моля посетете:');
define('DDSG_DEFAULT_NOTICE', '<strong>Надстройване?</strong> Ако надстройвате от предишна версия, натиснете бутона <strong>Зареждане на настройки по подразбиране</strong> намиращ се най-долу на страницата. Някои настройки може да са променени.');

define('DDSG_LANGUAGE', 'Език');
define('DDSG_LANGUAGE_DESC', 'Езиковите файлове се намират в <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Общи настройки');
define('DDSG_ITEMS_PER_PAGE', 'Елементи на страница:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Въведете 0 за безброй');
define('DDSG_SITEMAP_SLUG', 'Кратко име на sitemap страницата:');
define('DDSG_SITEMAP_SLUG_INFO', 'Ако използвате постоянни връзки, въведете краткото име на вашата sitemap страница');
define('DDSG_SITEMAP_GENERATION', 'Генериране на Sitemap');
define('DDSG_SHOW', 'Какво да се показва:');
define('DDSG_SHOW_BOTH', 'Страници и публикации');
define('DDSG_SHOW_POSTS', 'Само публикации');
define('DDSG_SHOW_PAGES', 'Само страници');
define('DDSG_WHICH_FIRST', 'Ако се показват и двете, кое да е първо:');
define('DDSG_WHICH_FIRST_POSTS', 'Първо публикациите');
define('DDSG_WHICH_FIRST_PAGES', 'Първо страниците');
define('DDSG_POST_SORT', 'Сортиране на публикациите:');
define('DDSG_POST_SORT_T', 'По заглавие');
define('DDSG_POST_SORT_DA', 'По дата на публикуване (най-старите са първи)');
define('DDSG_POST_SORT_DD', 'По дата на публикуване (най-новите са първи)');
define('DDSG_PAGE_SORT', 'Сортиране на страниците:');
define('DDSG_PAGE_SORT_T', 'По заглавие');
define('DDSG_PAGE_SORT_DA', 'По дата на страницата (най-старите са първи)');
define('DDSG_PAGE_SORT_DD', 'По дата на страницата (най-новите са първи)');
define('DDSG_PAGE_SORT_MA', 'Като списък (възходящ)');
define('DDSG_PAGE_SORT_MD', 'Като списък (низходящ)');
define('DDSG_POST_COMMENTS', 'Показване на броя коментари след публикациите:');
define('DDSG_PAGE_COMMENTS', 'Показване на броя коментари след страниците:');
define('DDSG_ZERO_COMMENTS', 'Ако се показва броя на коментарите, показвай когато са 0:');
define('DDSG_MULTI_POSTS', 'Показване на публикации принадлежащи към повече категории само в една категория:');
define('DDSG_POST_DATES', 'Показване на датите след публикациите:');
define('DDSG_PAGE_DATES', 'Показване на датите след страниците:');
define('DDSG_DATE_FORMAT', 'Формат на датата (ако се показват дати):');
define('DDSG_DATE_FORMAT_DESC', 'Използвайте <a href="http://us3.php.net/date" target="_blank">PHP date() форматиране</a>');
define('DDSG_EXCLUSIONS', 'Изключения');
define('DDSG_EXCLUDED_CATS', 'Изключени категории:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID-та на категориите разделени със запетая<br />- Подкатегориите също ще бъдат изключени');
define('DDSG_EXCLUDED_PAGES', 'Изключени страници:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID-та на страниците разделени със запетая<br />- Подстраниците също ще бъдат изключени');
define('DDSG_HIDE_FUTURE', 'Скриване на публикации с бъдеща дата');
define('DDSG_HIDE_PASS', 'Скриване на елементи защитени с парола:');
define('DDSG_NAVIGATION', 'Навигация');
define('DDSG_NAV_METHOD', 'Метод на навигация на Sitemap-а:');
define('DDSG_NAV_WHERE', 'Показване на sitemap навигацията:');
define('DDSG_NAV_WHERE_TOP', 'Отгоре');
define('DDSG_NAV_WHERE_BOT', 'Отдолу');
define('DDSG_NAV_WHERE_BOTH', 'Заедно горе и долу');
define('DDSG_MISC', 'Разни');
define('DDSG_XML_PATH', 'Пълният път до XML sitemap:');
define('DDSG_XML_PATH_DESC', 'Ако също така използвате плъгин за XML sitemap, можете да въведете пътя до XML файла тук и ще бъде добаване връзка към него в sitemap страницата');
define('DDSG_XML_WHERE', 'Къде да се показва връзка към XML sitemap:');
define('DDSG_XML_WHERE_LAST', 'Отдолу на последната страница');
define('DDSG_XML_WHERE_EVERY', 'Отдолу на всяка страница');
define('DDSG_NEW_WINDOW', 'Отваряне на връзките в Sitemap в нов прозорец:');

define('DDSG_DEFAULT_BUTTON', 'Зареждане на настройки по подразбиране');
define('DDSG_UPDATE_BUTTON', 'Обновяване на настройките');

?>
