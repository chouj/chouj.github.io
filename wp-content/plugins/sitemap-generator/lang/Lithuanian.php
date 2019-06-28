<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/
Lithuanian Language File
Translation: Aurimas Gudas - http://gudas.lt
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Puslapiai</h2>');
define('DDSG_POST_HEADER', '<h2>Ira�ai</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategorija:</strong>');
define('DDSG_NO_TITLE', '(Nera pavadinimo)');
define('DDSG_VIEW_XML', 'Rodyti svetaines �emelapi XML formatu');
define('DDSG_CREDITS', 'Iskiepi sukure');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Puslapis');
define('DDSG_NAV1_OF', 'i�');
define('DDSG_NAV1_PREV', 'Ankstesnis');
define('DDSG_NAV1_NEXT', 'Kitas');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Puslapiai:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Nustatymai pakeisti i standartinius!');
define('DDSG_CONFIG_UPDATED', 'Konfiguracija atnaujinta!');

define('DDSG_FOR_INFO', 'Daugiau informacijos ir atnaujinimus rasi:');
define('DDSG_DEFAULT_NOTICE', '<strong>Atnaujini?</strong> Jeigu atnaujini i� sensenes versijos, paspausk ant <strong>Nustatyti standartinius nustatymus</strong> apacioje. Kai kurie nustatymai galejo pasikeisti.');

define('DDSG_LANGUAGE', 'Kalba');
define('DDSG_LANGUAGE_DESC', 'Kalbu failai yra: <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Pagrindiniai nustatymai');
define('DDSG_ITEMS_PER_PAGE', 'Ira�u puslapyje:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Nustacius 0 bus rodomi visi ira�ai');
define('DDSG_SITEMAP_SLUG', 'Svetaines �emelapio trumpa antra�te:');
define('DDSG_SITEMAP_SLUG_INFO', 'Jei nori gra�esniu nuorodu ivesk savo svetaines �emelapio trumpa antra�te');
define('DDSG_SITEMAP_GENERATION', 'Svetaines �emelapio generavimas');
define('DDSG_SHOW', 'Ka rodyti:');
define('DDSG_SHOW_BOTH', 'Puslapius ir ira�us');
define('DDSG_SHOW_POSTS', 'Tik ira�us');
define('DDSG_SHOW_PAGES', 'Tik puslapius');
define('DDSG_WHICH_FIRST', 'Jei rodome ir tuos ir tuos, ka rodysime pirmiausia:');
define('DDSG_WHICH_FIRST_POSTS', 'Pirmiausia ira�ai');
define('DDSG_WHICH_FIRST_PAGES', 'Pirmiausiai puslapiai');
define('DDSG_POST_SORT', 'Ira�u ru�iavimo tvarka:');
define('DDSG_POST_SORT_T', 'Pagal pavadinima');
define('DDSG_POST_SORT_DA', 'Pagal ira�o data (pirmiau senesi)');
define('DDSG_POST_SORT_DD', 'Pagal ira�o data (pirmiau naujesni)');
define('DDSG_PAGE_SORT', 'Puslapiu ru�iavimo tvarka:');
define('DDSG_PAGE_SORT_T', 'Pagal pavadinima');
define('DDSG_PAGE_SORT_DA', 'Pagal ira�o data (pirmiau senesi)');
define('DDSG_PAGE_SORT_DD', 'Pagal ira�o data (pirmiau naujesni)');
define('DDSG_PAGE_SORT_MA', 'Pagal meniu tvarka (didejancia tvarka)');
define('DDSG_PAGE_SORT_MD', 'Pagal meniu tvarka (ma�ejancia tvarka)');
define('DDSG_POST_COMMENTS', 'Rodyti komentaru kieki po ira�o:');
define('DDSG_PAGE_COMMENTS', 'Rodyti komentaru kieki po puslapiu:');
define('DDSG_ZERO_COMMENTS', 'Ar rodyti komentaru kieki kai ju nera?');
define('DDSG_MULTI_POSTS', 'Rodyti ira�us i� ivairiu kategoriju tik vienoje kategorijoje:');
define('DDSG_POST_DATES', 'Rodyti datas po ira�u:');
define('DDSG_PAGE_DATES', 'Rodyti datas po puslapiu:');
define('DDSG_DATE_FORMAT', 'Datos formatas (jei rodysim datas):');
define('DDSG_DATE_FORMAT_DESC', 'Naudok <a href="http://us3.php.net/date" target="_blank">PHP date() formatavima</a>');
define('DDSG_EXCLUSIONS', 'Neitraukimas');
define('DDSG_EXCLUDED_CATS', 'Neitraukti kategoriju:');
define('DDSG_EXCLUDED_CATS_DESC', '- Kategoriju pavadinimai, atskirti kableliais<br />- Subkategorijos taip pat bus neitraukiamos');
define('DDSG_EXCLUDED_PAGES', 'Neitraukti puslapiu:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Puslapu pavadinimai, atskirti kableliais<br />- Subpuslapiai taip pat bus neitraukiami');
define('DDSG_HIDE_FUTURE', 'Nerodyti ateities ira�u');
define('DDSG_HIDE_PASS', 'Nerodyti ira�u, kurie yra apsaugoti slapta�od�iu:');
define('DDSG_NAVIGATION', 'Navigacija');
define('DDSG_NAV_METHOD', 'Svetaines �emelapio navigacijos metodas:');
define('DDSG_NAV_WHERE', 'Rodyti svetaines �emelapio navigacija:');
define('DDSG_NAV_WHERE_TOP', 'Vir�uje');
define('DDSG_NAV_WHERE_BOT', 'Apacioje');
define('DDSG_NAV_WHERE_BOTH', 'Vir�uje ir apacioje');
define('DDSG_MISC', 'Ivairus');
define('DDSG_XML_PATH', 'Pilnas kelias iki svetaines �emelapio XML formatu:');
define('DDSG_XML_PATH_DESC', 'Jeigu naudoji svetaines �emelapio XML formatu iskiepi, tu gali nurodyti kelia iki XML failo, ir svetaines �emelapyje atsiras nuoroda i ji');
define('DDSG_XML_WHERE', 'Kur rodyti svetaines �emelapio XML nuoroda:');
define('DDSG_XML_WHERE_LAST', 'Paskutinio puslapio apacioje');
define('DDSG_XML_WHERE_EVERY', 'Kiekvieno puslapio apacioje');
define('DDSG_NEW_WINDOW', 'Svetaines �emelapio nuorodos atsidarys naujame lange:');

define('DDSG_DEFAULT_BUTTON', 'Nustatyti standartinius nustatymus');
define('DDSG_UPDATE_BUTTON', 'Atnaujinti nustatymus');

?>
