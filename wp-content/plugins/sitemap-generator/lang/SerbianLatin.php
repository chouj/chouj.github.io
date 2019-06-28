<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Serbian Latin Language File
Translation by Predrag Supurovic (http://pedja.supurovic.net)
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Strane</h2>');
define('DDSG_POST_HEADER', '<h2>Članci</h2>');
define('DDSG_CAT_HEADER', '<strong>Tema:</strong>');
define('DDSG_NO_TITLE', '(Nema naslova)');
define('DDSG_VIEW_XML', 'Pogledaj XML mapu sajta');
define('DDSG_CREDITS', 'Dodatak napravio');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'strana');
define('DDSG_NAV1_OF', 'od');
define('DDSG_NAV1_PREV', 'prethodno');
define('DDSG_NAV1_NEXT', 'sledeće');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Strane:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Učitana su podrazumevana podešavanja!');
define('DDSG_CONFIG_UPDATED', 'Podešavanje je ažurirano!');

define('DDSG_FOR_INFO', 'Za informacije o novim verzijama posetite:');
define('DDSG_DEFAULT_NOTICE', '<strong>Nova verzija?</strong> Ako stavnjate novu verziju preko stare, klikinite dugme <strong>Učitaj podrazumevana podešavanja</strong>. Neka podešavanja su promenjena.');

define('DDSG_LANGUAGE', 'Jezik');
define('DDSG_LANGUAGE_DESC', 'Datoteke sa prevodima se nalaze u <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Opšte opcije');
define('DDSG_ITEMS_PER_PAGE', 'Broj elemenata na strani:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Podesite 0 za neograničeno');
define('DDSG_SITEMAP_SLUG', 'Naziv linka za stranu na kojoj je mapa sajta:');
define('DDSG_SITEMAP_SLUG_INFO', 'Ako koristite permalinkove, upišite naziv linka strane na kojoj je mapa sajta a zatim ažurirajte strukturu permalinkova!');
define('DDSG_SITEMAP_GENERATION', 'Gneerisanje mape sajta');
define('DDSG_SHOW', 'Šta sa de vidi:');
define('DDSG_SHOW_BOTH', 'Strane i članci');
define('DDSG_SHOW_POSTS', 'samo članci');
define('DDSG_SHOW_PAGES', 'samo strane');
define('DDSG_WHICH_FIRST', 'Ako se prikazuje oboje, šta ide prvo :');
define('DDSG_WHICH_FIRST_POSTS', 'prvo članci');
define('DDSG_WHICH_FIRST_PAGES', 'prvo strane');
define('DDSG_POST_SORT', 'Redosled članaka:');
define('DDSG_POST_SORT_T', 'po naslovu');
define('DDSG_POST_SORT_DA', 'po datumu (prvo idu najstariji)');
define('DDSG_POST_SORT_DD', 'po datumu (prvo idu najnoviji)');
define('DDSG_PAGE_SORT', 'Redosled strana:');
define('DDSG_PAGE_SORT_T', 'po naslovu');
define('DDSG_PAGE_SORT_DA', 'po datumu (prvo idu najstariji)');
define('DDSG_PAGE_SORT_DD', 'po datumu (prvo idu najnoviji)');
define('DDSG_PAGE_SORT_MA', 'po redosledu u meniju (rastući redosled)');
define('DDSG_PAGE_SORT_MD', 'po redosledu u meniju (opadajući redosled)');
define('DDSG_POST_COMMENTS', 'Prikaži prroj komentara nakon članka:');
define('DDSG_PAGE_COMMENTS', 'Prikaži broj komentara nakon strane:');
define('DDSG_ZERO_COMMENTS', 'Ako se prikazuje broj komentara, prikaži i kada nema komentara:');
define('DDSG_MULTI_POSTS', 'Članke koji su u više tema prikaži samo u jednoj temi:');
define('DDSG_POST_DATES', 'Prikaži datum nakon članka:');
define('DDSG_PAGE_DATES', 'Prikaži datum nakon strane:');
define('DDSG_DATE_FORMAT', 'Format datuma (ako se datum prikazuje):');
define('DDSG_DATE_FORMAT_DESC', 'Vidi <a href="http://us3.php.net/date" target="_blank">PHP date() formatiranje</a>');
define('DDSG_EXCLUSIONS', 'Izuzeci');
define('DDSG_EXCLUDED_CATS', 'Izuzete teme:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID tema, razdvojene zarezom<br />- podteme će takođe biti izuzete');
define('DDSG_EXCLUDED_PAGES', 'Izuzete strane:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID strana, razdvojene zarezom<br />- Podstrane će takođe biti izuizete');
define('DDSG_HIDE_FUTURE', 'Ne prikazuj članke datirane u budućnosti');
define('DDSG_HIDE_PASS', 'Ne prikazuj sadržaj zaštićen lozinkom:');
define('DDSG_NAVIGATION', 'Navigacija');
define('DDSG_NAV_METHOD', 'Način navigacije u mapi sajta:');
define('DDSG_NAV_WHERE', 'Prikaži navigaciju mape sajta:');
define('DDSG_NAV_WHERE_TOP', 'na vrhu');
define('DDSG_NAV_WHERE_BOT', 'na dnu');
define('DDSG_NAV_WHERE_BOTH', 'i na vrhu i na dnu');
define('DDSG_MISC', 'Razno');
define('DDSG_XML_PATH', 'Puna putanja do XML mape sajta:');
define('DDSG_XML_PATH_DESC', 'Ako koristite dodatak za XML mapu sajta, ovde možete uneti putanju do XML datoteke i link će biti prikazan u mapi sajta');
define('DDSG_XML_WHERE', 'Gde da se prikaže link do XML mape sajta:');
define('DDSG_XML_WHERE_LAST', 'na kraju poslednje strane');
define('DDSG_XML_WHERE_EVERY', 'na kraju svake strane');
define('DDSG_NEW_WINDOW', 'Da li da se linkovi na mapi sajta otvaraju u novom prozoru:');

define('DDSG_DEFAULT_BUTTON', 'Učitaj podrazumevana podešavanja');
define('DDSG_UPDATE_BUTTON', 'Ažuriraj podešavanja');

?>