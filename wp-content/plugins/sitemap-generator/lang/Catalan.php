<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Catalan Language File
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>P$agrave;gines</h2>');
define('DDSG_POST_HEADER', '<h2>Entrades</h2>');
define('DDSG_CAT_HEADER', '<strong>Categoria:</strong>');
define('DDSG_NO_TITLE', '(Sense t&iacute;tol)');
define('DDSG_VIEW_XML', 'Mapa del site en XML');
define('DDSG_CREDITS', 'Plugin escrit per');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'P&agrave;gina');
define('DDSG_NAV1_OF', 'de');
define('DDSG_NAV1_PREV', 'Anterior');
define('DDSG_NAV1_NEXT', 'Següent');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'P$agrave;gines:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Opcions per defecte carregades!');
define('DDSG_CONFIG_UPDATED', 'Configuraci&oacute; actualitzada!');

define('DDSG_FOR_INFO', 'Per mes informaci&oacute; i actualitzacions, visitar:');
define('DDSG_DEFAULT_NOTICE', '<strong>Actualitzan?</strong> Si est&agrave;s actualizant des d\'una versi&oacute; anterior, pica en el bot&oacute; <strong>Carregar opcions per defecte</strong> que hi ha a sota. La configuraci&oacute; pot canviar.');

define('DDSG_LANGUAGE', 'Llenguatge');
define('DDSG_LANGUAGE_DESC', 'Els arxius de llenguatge es guarden a <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Opcions generals');
define('DDSG_ITEMS_PER_PAGE', 'Elements per p&agrave;gina:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Posar a 0 per ilimitats');
define('DDSG_SITEMAP_SLUG', 'Breu descripci&oacute; del mapa del site:');
define('DDSG_SITEMAP_SLUG_INFO', 'Si s\'utilitzen enllaços permantents, escriure una breu descripci&oacute; pel mapa del site');
define('DDSG_SITEMAP_GENERATION', 'Creaci&oacute; del mapa del site');
define('DDSG_SHOW', 'Que mostrar:');
define('DDSG_SHOW_BOTH', 'P$agrave;gines i entrades');
define('DDSG_SHOW_POSTS', 'Nom&eacute;s entrades');
define('DDSG_SHOW_PAGES', 'Nom&eacute;s p$agrave;gines');
define('DDSG_WHICH_FIRST', 'Si es mostren les dues, primer:');
define('DDSG_WHICH_FIRST_POSTS', 'Entrades primer');
define('DDSG_WHICH_FIRST_PAGES', 'P&agrave;gines primer');
define('DDSG_POST_SORT', 'Ordre de les entrades:');
define('DDSG_POST_SORT_T', 'Per t&iacute;tol');
define('DDSG_POST_SORT_DA', 'Per data (antigues primer)');
define('DDSG_POST_SORT_DD', 'Per data (recents primer)');
define('DDSG_PAGE_SORT', 'Ordre de les p$agrave;gines:');
define('DDSG_PAGE_SORT_T', 'Per t&iacute;tol');
define('DDSG_PAGE_SORT_DA', 'Per data (antigues primer)');
define('DDSG_PAGE_SORT_DD', 'Per data (recents primer)');
define('DDSG_PAGE_SORT_MA', 'Segons l\'ordre al men&uacute; (ascendent)');
define('DDSG_PAGE_SORT_MD', 'Segons l\'ordre al men&uacute; (descendent)');
define('DDSG_POST_COMMENTS', 'Mostrar el n&uacute;mero de comentaris despr&eacute;s de les entrades:');
define('DDSG_PAGE_COMMENTS', 'Mostrar el n&uacute;mero de comentaris despr&eacute;s de les p$agrave;gines:');
define('DDSG_ZERO_COMMENTS', 'Si es mostra el n&uacte;mero de comentaris, mostrar 0 si no hi ha cap:');
define('DDSG_MULTI_POSTS', 'Mostrar les entrades que pertanyen a varies categories nom&eacute; en una categoria:');
define('DDSG_POST_DATES', 'Mostrar la data despr&eacute;s de les entrades:');
define('DDSG_PAGE_DATES', 'Mostrar la data despr&eacute;s de les p$agrave;gines:');
define('DDSG_DATE_FORMAT', 'Format de la data (si es mostra):');
define('DDSG_DATE_FORMAT_DESC', 'Utilitzar el format <a href="http://us3.php.net/date" target="_blank">PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Exclusions');
define('DDSG_EXCLUDED_CATS', 'Categories excloses:');
define('DDSG_EXCLUDED_CATS_DESC', '- IDs de categoria, separats <br />- Les subcategories tamb&eacute; seran excloses');
define('DDSG_EXCLUDED_PAGES', 'Pàgines excloses:');
define('DDSG_EXCLUDED_PAGES_DESC', '- IDs de p&agrave;gina, separats per comes<br />- Les subp$agrave;gines tamb&eacute; seran excloses');
define('DDSG_HIDE_FUTURE', 'Ocultar entrades amb data en el futur');
define('DDSG_HIDE_PASS', 'Ocultar elements protegits per contrassenya:');
define('DDSG_NAVIGATION', 'Navegador');
define('DDSG_NAV_METHOD', 'Forma de mostrar el navegador del mapa del site:');
define('DDSG_NAV_WHERE', 'Mostrar navegador del mapa del site:');
define('DDSG_NAV_WHERE_TOP', 'Al principi');
define('DDSG_NAV_WHERE_BOT', 'Al final');
define('DDSG_NAV_WHERE_BOTH', 'Al principi i al final');
define('DDSG_MISC', 'Miscel&aagrave;nea');
define('DDSG_XML_PATH', 'Ruta completa al mapa del site en XML:');
define('DDSG_XML_PATH_DESC', 'Si est&agrave;s fent servir tamb&eacute; un plugin per generar un mapa del site en XML, pots escriure aqu&iacute; la ruta al fitxer XML i s\'afegir&agrave; un enllaç a la p&agrave;gina amb el mapa del site');
define('DDSG_XML_WHERE', 'On mostrar l\'enlla&ccedil; al mapa del site en XML:');
define('DDSG_XML_WHERE_LAST', 'Al final de l\'&uacute;ltima p&agrave;gina');
define('DDSG_XML_WHERE_EVERY', 'Al final de cada p&agrave;gina');
define('DDSG_NEW_WINDOW', 'Els enlla&ccedil;os del mapa s\'obren en una nova finestra:');

define('DDSG_DEFAULT_BUTTON', 'Cargar opcions per defecte');
define('DDSG_UPDATE_BUTTON', 'Actualitzar opcions');

?>
