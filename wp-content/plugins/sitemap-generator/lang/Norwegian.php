<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Norwegian Language File
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Sider</h2>');
define('DDSG_POST_HEADER', '<h2>Artikler</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategori:</strong>');
define('DDSG_NO_TITLE', '(Ingen tittel)');
define('DDSG_VIEW_XML', 'Vise XML Sitemap');
define('DDSG_CREDITS', 'Plugin av');

// Navigation method 1
// Example: Side 2 av 5 : Forrige : Neste

define('DDSG_NAV1_PAGE', 'Side');
define('DDSG_NAV1_OF', 'av');
define('DDSG_NAV1_PREV', 'Forrige');
define('DDSG_NAV1_NEXT', 'Neste');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Sider:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Default-instillinger lastet!');
define('DDSG_CONFIG_UPDATED', 'Endringer lagret!');

define('DDSG_FOR_INFO', 'For informasjon og oppdateringer, besök:');
define('DDSG_DEFAULT_NOTICE', '<strong>Oppgradere?</strong> Om du oppgraderer fra en forrige version, klikk på <strong>Laste default-instillinger</strong>  ned. Visse instillinger kan ha endret seg.');

define('DDSG_LANGUAGE', 'Språk');
define('DDSG_LANGUAGE_DESC', 'Språkfiler finnes i <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Instillinger');
define('DDSG_ITEMS_PER_PAGE', 'Objekt per side:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Angi 0 for ubegrenset');
define('DDSG_SITEMAP_SLUG', 'URL-etikett for sitemap:');
define('DDSG_SITEMAP_SLUG_INFO', 'Om du bruker permalenker, angi fin URL-etikett for sitemap her');
define('DDSG_SITEMAP_GENERATION', 'Generering av Sitemap');
define('DDSG_SHOW', 'Velg hva som skal vises:');
define('DDSG_SHOW_BOTH', 'Sider og innlegg');
define('DDSG_SHOW_POSTS', 'Kun innlegg');
define('DDSG_SHOW_PAGES', 'Kun sider');
define('DDSG_WHICH_FIRST', 'Om begge, hvilken skal vises først:');
define('DDSG_WHICH_FIRST_POSTS', 'Innlegg først');
define('DDSG_WHICH_FIRST_PAGES', 'Sider først');
define('DDSG_POST_SORT', 'Sortere innlegg etter:');
define('DDSG_POST_SORT_T', 'Tittel');
define('DDSG_POST_SORT_DA', 'Publiseringsdato (eldste først)');
define('DDSG_POST_SORT_DD', 'Publiseringsdato (nyeste først)');
define('DDSG_PAGE_SORT', 'Sortere sider etter:');
define('DDSG_PAGE_SORT_T', 'Tittel');
define('DDSG_PAGE_SORT_DA', 'Publiseringsdato (eldste først)');
define('DDSG_PAGE_SORT_DD', 'Publiseringsdato (nyeste først)');
define('DDSG_PAGE_SORT_MA', 'Kun meny (stigende)');
define('DDSG_PAGE_SORT_MD', 'Kun meny (fallende)');
define('DDSG_POST_COMMENTS', 'Vise antall kommentarer etter innlegg:');
define('DDSG_PAGE_COMMENTS', 'Vise antall kommentarer etter sider:');
define('DDSG_ZERO_COMMENTS', 'Om antall kommentarer viser, vise om antallet er null:');
define('DDSG_MULTI_POSTS', 'Vise innlegg med med flere kategorier kun i en kategori:');
define('DDSG_POST_DATES', 'Vise dato etter innlegg:');
define('DDSG_PAGE_DATES', 'Vise dato etter sider:');
define('DDSG_DATE_FORMAT', 'Datoformat (om dato ska vises):');
define('DDSG_DATE_FORMAT_DESC', 'Bruk formatering som følger <a href="http://us3.php.net/date" target="_blank">PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Ekskludere');
define('DDSG_EXCLUDED_CATS', 'Ekskludere kategorier:');
define('DDSG_EXCLUDED_CATS_DESC', '- Kategori-IDs, separere med kommategn<br />- Underkategorier kommer også til å ekskluderes');
define('DDSG_EXCLUDED_PAGES', 'Ekskludere sider:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Siders ID, separere med kommategn<br />- Undersider kommer også til å ekskluderes');
define('DDSG_HIDE_FUTURE', 'Skjul innlegg med framtidig dato');
define('DDSG_HIDE_PASS', 'Skjul passordbeskyttede objekt:');
define('DDSG_NAVIGATION', 'Navigasjon');
define('DDSG_NAV_METHOD', 'Metode for navigering i Sitemap:');
define('DDSG_NAV_WHERE', 'Vise navigasjon i Sitemap:');
define('DDSG_NAV_WHERE_TOP', 'I begynnelsen');
define('DDSG_NAV_WHERE_BOT', 'På slutten');
define('DDSG_NAV_WHERE_BOTH', 'Både i begynnelsen og på slutten');
define('DDSG_MISC', 'Øvrigt');
define('DDSG_XML_PATH', 'Fullstendig path til XML sitemap:');
define('DDSG_XML_PATH_DESC', 'Om du også bruker plugin för XML sitemap, så kan du angi pathen XML-filen har for å vise en link til den på din Sitemap-page');
define('DDSG_XML_WHERE', 'Plassering for link til XML-sitemap:');
define('DDSG_XML_WHERE_LAST', 'I slutten på siste side');
define('DDSG_XML_WHERE_EVERY', 'I slutten på hver side');
define('DDSG_NEW_WINDOW', 'Linker til Sitemap åpnes i nytt vindu:');

define('DDSG_DEFAULT_BUTTON', 'Laste default-instillinger');
define('DDSG_UPDATE_BUTTON', 'Oppdatere instillinger');

?>
