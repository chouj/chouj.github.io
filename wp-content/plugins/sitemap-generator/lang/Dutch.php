<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Dutch Language File
by Jean-Paul Horn, http://www.iphoneclub.nl/
*/


// Text getoond op sitemap pagina 

define('DDSG_PAGE_HEADER', '<h2>Pagina\'s</h2>');
define('DDSG_POST_HEADER', '<h2>Berichten</h2>');
define('DDSG_CAT_HEADER', '<strong>Categorie:</strong>');
define('DDSG_NO_TITLE', '(Geen titel)');
define('DDSG_VIEW_XML', 'Bekijk XML Sitemap');
define('DDSG_CREDITS', 'Plugin door');

// Navigatiemethode 1
// Voorbeeld: Pagina 2 van 5 : Vorige : Volgende

define('DDSG_NAV1_PAGE', 'Pagina');
define('DDSG_NAV1_OF', 'van');
define('DDSG_NAV1_PREV', 'Vorige');
define('DDSG_NAV1_NEXT', 'Volgende');

// Navigatiemethode 2
// Example: Pagina's: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Pagina\'s:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Standaardopties geactiveerd!');
define('DDSG_CONFIG_UPDATED', 'Configuratie bijgewerkt!');

define('DDSG_FOR_INFO', 'Voor informatie en nieuwe versies, bezoek a.u.b.:');
define('DDSG_DEFAULT_NOTICE', '<strong>Bijwerken?</strong> Als u van een vorige versie aan het bijwerken bent, klik dan de knop <strong>Standaardwaarden laden</strong> hieronder. Sommige instellingen kunnen gewijzigd zijn.');

define('DDSG_LANGUAGE', 'Taal');
define('DDSG_LANGUAGE_DESC', 'Taalbestanden bevinden zich in <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Algemene opties');
define('DDSG_ITEMS_PER_PAGE', 'Aantal per pagina:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Kies 0 voor onbeperkt');
define('DDSG_SITEMAP_SLUG', 'Sitemap pagina slug:');
define('DDSG_SITEMAP_SLUG_INFO', 'Als er permalinks worden gebruikt, vul dan de slug van de sitemappagina in.');
define('DDSG_SITEMAP_GENERATION', 'Genereren Sitemap');
define('DDSG_SHOW', 'Wat moet er getoond worden:');
define('DDSG_SHOW_BOTH', 'Pagina\'s en berichten');
define('DDSG_SHOW_POSTS', 'Alleen berichten');
define('DDSG_SHOW_PAGES', 'Alleen pagina\'s');
define('DDSG_WHICH_FIRST', 'Als beide worden getoond, welke eerst:');
define('DDSG_WHICH_FIRST_POSTS', 'Berichten eerst');
define('DDSG_WHICH_FIRST_PAGES', 'Pagina\'s eerst');
define('DDSG_POST_SORT', 'Berichtsorteervolgorde:');
define('DDSG_POST_SORT_T', 'Op titel');
define('DDSG_POST_SORT_DA', 'Op berichtdatum (oudste eerst)');
define('DDSG_POST_SORT_DD', 'Op berichtdatum (nieuwste eerst)');
define('DDSG_PAGE_SORT', 'Paginasorteervolgorde:');
define('DDSG_PAGE_SORT_T', 'Op titel');
define('DDSG_PAGE_SORT_DA', 'Op paginadatum (oudste eerst)');
define('DDSG_PAGE_SORT_DD', 'Op paginadatum (nieuwste eerst)');
define('DDSG_PAGE_SORT_MA', 'Op menuvolgorde (oplopend)');
define('DDSG_PAGE_SORT_MD', 'Op menuvolgorde (aflopend)');
define('DDSG_POST_COMMENTS', 'Toon aantal reacties na berichten:');
define('DDSG_PAGE_COMMENTS', 'Toon aantal reacties na pagina\'s:');
define('DDSG_ZERO_COMMENTS', 'Als aantal reacties worden getoond, ook tonen bij nul reacties:');
define('DDSG_MULTI_POSTS', 'Toon berichten in meerdere categorie&euml;n alleen in enkele categorie:');
define('DDSG_POST_DATES', 'Toon datum na bericht:');
define('DDSG_PAGE_DATES', 'Toon datum na pagina:');
define('DDSG_DATE_FORMAT', 'Datumformaat (bij tonen datums):');
define('DDSG_DATE_FORMAT_DESC', 'Gebruik <a href="http://nl3.php.net/date" target="_blank">PHP date() formattering</a>');
define('DDSG_EXCLUSIONS', 'Uitzonderingen');
define('DDSG_EXCLUDED_CATS', 'Uitegezonderde categorie&euml;en:');
define('DDSG_EXCLUDED_CATS_DESC', '- Categorie-IDs, gescheiden door komma\'s<br />- Subcategorie&euml;n worden ook uitgezonderd.');
define('DDSG_EXCLUDED_PAGES', 'Uitgezonderde pagina\'s:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Pagina-IDs, gescheiden door komma\'s<br />- Subpagina\'s worden ook uitgezonderd');
define('DDSG_HIDE_FUTURE', 'Verberg toekomstige berichten');
define('DDSG_HIDE_PASS', 'Verberg met wachtwoord beschermde onderdelen:');
define('DDSG_NAVIGATION', 'Navigatie');
define('DDSG_NAV_METHOD', 'Sitemap-navigatiemethode:');
define('DDSG_NAV_WHERE', 'Toon sitemap-navigatie:');
define('DDSG_NAV_WHERE_TOP', 'Bovenaan');
define('DDSG_NAV_WHERE_BOT', 'Onderaan');
define('DDSG_NAV_WHERE_BOTH', 'Zowel boven als onder');
define('DDSG_MISC', 'Overige');
define('DDSG_XML_PATH', 'Volledig pad naar XML sitemap:');
define('DDSG_XML_PATH_DESC', 'Als u ook een XML XML sitemap plugin gebruikt, kunt u hier het pad naar het XML-bestand invullen. De link zal dan worden toegevoegd aan de sitemap-pagina');
define('DDSG_XML_WHERE', 'Waar moet de XML sitemap link getoond worden:');
define('DDSG_XML_WHERE_LAST', 'Aan het einde van de laatste pagina');
define('DDSG_XML_WHERE_EVERY', 'Aan het einde van elke pagina');
define('DDSG_NEW_WINDOW', 'Sitemap links in nieuw venster openen:');

define('DDSG_DEFAULT_BUTTON', 'Standaardwaarden laden');
define('DDSG_UPDATE_BUTTON', 'Werk opties bij');

?>
