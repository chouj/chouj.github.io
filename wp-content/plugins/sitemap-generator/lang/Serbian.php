<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Serbian Cyrillic Language File
Translation by Predrag Supurovic (http://pedja.supurovic.net)
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Стране</h2>');
define('DDSG_POST_HEADER', '<h2>Чланци</h2>');
define('DDSG_CAT_HEADER', '<strong>Тема:</strong>');
define('DDSG_NO_TITLE', '(Нема наслова)');
define('DDSG_VIEW_XML', 'Погледај XML мапу сајта');
define('DDSG_CREDITS', 'Додатак направио');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'страна');
define('DDSG_NAV1_OF', 'од');
define('DDSG_NAV1_PREV', 'претходно');
define('DDSG_NAV1_NEXT', 'следеће');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Стране:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Учитана су подразумевана подешавања!');
define('DDSG_CONFIG_UPDATED', 'Подешавање је ажурирано!');

define('DDSG_FOR_INFO', 'За информације о новим верзијама посетите:');
define('DDSG_DEFAULT_NOTICE', '<strong>Нова верзија?</strong> Ако ставњате нову верзију преко старе, кликините дугме <strong>Учитај подразумевана подешавања</strong>. Нека подешавања су промењена.');

define('DDSG_LANGUAGE', 'Језик');
define('DDSG_LANGUAGE_DESC', 'Датотеке са преводима се налазе у <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Опште опције');
define('DDSG_ITEMS_PER_PAGE', 'Број елемената на страни:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Подесите 0 за неограничено');
define('DDSG_SITEMAP_SLUG', 'Назив линка за страну на којој је мапа сајта:');
define('DDSG_SITEMAP_SLUG_INFO', 'Ако користите пермалинкове, упишите назив линка стране на којој је мапа сајта а затим ажурирајте структуру пермалинкова!');
define('DDSG_SITEMAP_GENERATION', 'Гнеерисање мапе сајта');
define('DDSG_SHOW', 'Шта са де види:');
define('DDSG_SHOW_BOTH', 'Стране и чланци');
define('DDSG_SHOW_POSTS', 'само чланци');
define('DDSG_SHOW_PAGES', 'само стране');
define('DDSG_WHICH_FIRST', 'Ако се приказује обоје, шта иде прво :');
define('DDSG_WHICH_FIRST_POSTS', 'прво чланци');
define('DDSG_WHICH_FIRST_PAGES', 'прво стране');
define('DDSG_POST_SORT', 'Редослед чланака:');
define('DDSG_POST_SORT_T', 'по наслову');
define('DDSG_POST_SORT_DA', 'по датуму (прво иду најстарији)');
define('DDSG_POST_SORT_DD', 'по датуму (прво иду најновији)');
define('DDSG_PAGE_SORT', 'Редослед страна:');
define('DDSG_PAGE_SORT_T', 'по наслову');
define('DDSG_PAGE_SORT_DA', 'по датуму (прво иду најстарији)');
define('DDSG_PAGE_SORT_DD', 'по датуму (прво иду најновији)');
define('DDSG_PAGE_SORT_MA', 'по редоследу у менију (растући редослед)');
define('DDSG_PAGE_SORT_MD', 'по редоследу у менију (опадајући редослед)');
define('DDSG_POST_COMMENTS', 'Прикажи пррој коментара након чланка:');
define('DDSG_PAGE_COMMENTS', 'Прикажи број коментара након стране:');
define('DDSG_ZERO_COMMENTS', 'Ако се приказује број коментара, прикажи и када нема коментара:');
define('DDSG_MULTI_POSTS', 'Чланке који су у више тема прикажи само у једној теми:');
define('DDSG_POST_DATES', 'Прикажи датум након чланка:');
define('DDSG_PAGE_DATES', 'Прикажи датум након стране:');
define('DDSG_DATE_FORMAT', 'Формат датума (ако се датум приказује):');
define('DDSG_DATE_FORMAT_DESC', 'Види <a href="http://us3.php.net/date" target="_blank">PHP date() форматирање</a>');
define('DDSG_EXCLUSIONS', 'Изузеци');
define('DDSG_EXCLUDED_CATS', 'Изузете теме:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID тема, раздвојене зарезом<br />- подтеме ће такође бити изузете');
define('DDSG_EXCLUDED_PAGES', 'Изузете стране:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID страна, раздвојене зарезом<br />- Подстране ће такође бити изуизете');
define('DDSG_HIDE_FUTURE', 'Не приказуј чланке датиране у будућности');
define('DDSG_HIDE_PASS', 'Не приказуј садржај заштићен лозинком:');
define('DDSG_NAVIGATION', 'Навигација');
define('DDSG_NAV_METHOD', 'Начин навигације у мапи сајта:');
define('DDSG_NAV_WHERE', 'Прикажи навигацију мапе сајта:');
define('DDSG_NAV_WHERE_TOP', 'на врху');
define('DDSG_NAV_WHERE_BOT', 'на дну');
define('DDSG_NAV_WHERE_BOTH', 'и на врху и на дну');
define('DDSG_MISC', 'Разно');
define('DDSG_XML_PATH', 'Пуна путања до XML мапе сајта:');
define('DDSG_XML_PATH_DESC', 'Ако користите додатак за XML мапу сајта, овде можете унети путању до XML датотеке и линк ће бити приказан у мапи сајта');
define('DDSG_XML_WHERE', 'Где да се прикаже линк до XML мапе сајта:');
define('DDSG_XML_WHERE_LAST', 'на крају последње стране');
define('DDSG_XML_WHERE_EVERY', 'на крају сваке стране');
define('DDSG_NEW_WINDOW', 'Да ли да се линкови на мапи сајта отварају у новом прозору:');

define('DDSG_DEFAULT_BUTTON', 'Учитај подразумевана подешавања');
define('DDSG_UPDATE_BUTTON', 'Ажурирај подешавања');

?>