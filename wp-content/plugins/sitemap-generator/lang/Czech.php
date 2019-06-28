<?php  

/*  
Dagon Design Sitemap Generator v3.x 
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/ 

Czech Language File 
*/ 


// Text shown on sitemap page  

define('DDSG_PAGE_HEADER', '<h2>Stránky</h2>'); 
define('DDSG_POST_HEADER', '<h2>Příspěvky</h2>'); 
define('DDSG_CAT_HEADER', '<strong>Kategorie:</strong>'); 
define('DDSG_NO_TITLE', '(Bez názvu)'); 
define('DDSG_VIEW_XML', 'Zobrazit XML'); 
define('DDSG_CREDITS', 'Plugin od'); 

// Navigation method 1 
// Example: Page 2 z 5 : Previous : Next 

define('DDSG_NAV1_PAGE', 'Stránka'); 
define('DDSG_NAV1_OF', 'z'); 
define('DDSG_NAV1_PREV', 'Předchozí'); 
define('DDSG_NAV1_NEXT', 'Další'); 

// Navigation method 2 
// Example: Pages: 1 2 3 4 5 

define('DDSG_NAV2_PAGE', 'Stránky:'); 


// Text shown in options page  
  
define('DDSG_DEFAULTS_LOADED', 'Defaultní nastavení nahráno!'); 
define('DDSG_CONFIG_UPDATED', 'Konfigurace změněna!'); 

define('DDSG_FOR_INFO', 'Pro informace a updaty navštivte:'); 
define('DDSG_DEFAULT_NOTICE', '<strong>Upgrading?</strong> If you are upgrading from a previous version, click the <strong>Load Default Options</strong> button below. Some settings may have changed.'); 

define('DDSG_LANGUAGE', 'Jazyk'); 
define('DDSG_LANGUAGE_DESC', 'Jazykové soubory uloženy v <strong>/wp-content/plugins/sitemap-generator/lang/</strong>'); 
define('DDSG_GENERAL_OPTIONS', 'Hlavní nastavení'); 
define('DDSG_ITEMS_PER_PAGE', 'Prvků na stránce:'); 
define('DDSG_ITEMS_PER_PAGE_INFO', 'Nastav 0 pro neomezený počet'); 
define('DDSG_SITEMAP_SLUG', 'Mapa stránek:'); 
define('DDSG_SITEMAP_SLUG_INFO', 'Používáte-li permalinky, vložte adresu se sitemap stránkou'); 
define('DDSG_SITEMAP_GENERATION', 'Generování mapy stránek'); 
define('DDSG_SHOW', 'Ukázat:'); 
define('DDSG_SHOW_BOTH', 'Stránky a příspěvky'); 
define('DDSG_SHOW_POSTS', 'Jen příspěvky'); 
define('DDSG_SHOW_PAGES', 'Jen stránky'); 
define('DDSG_WHICH_FIRST', 'Jestli ukazovat stránky a příspěvky, tak zobrazit'); 
define('DDSG_WHICH_FIRST_POSTS', 'Příspěvky jako první'); 
define('DDSG_WHICH_FIRST_PAGES', 'Stránky jako první'); 
define('DDSG_POST_SORT', 'Příspěvky třídit dle:'); 
define('DDSG_POST_SORT_T', 'Názvu'); 
define('DDSG_POST_SORT_DA', 'Data (nejstarší jako první)'); 
define('DDSG_POST_SORT_DD', 'Data (nejnovější jako první)'); 
define('DDSG_PAGE_SORT', 'Stránky třídit dle:'); 
define('DDSG_PAGE_SORT_T', 'Názvu'); 
define('DDSG_PAGE_SORT_DA', 'Data (nejstarší jako první)'); 
define('DDSG_PAGE_SORT_DD', 'Data (nejnovější jako první))'); 
define('DDSG_PAGE_SORT_MA', 'Menu (vzestupný)'); 
define('DDSG_PAGE_SORT_MD', 'Menu (sestupný)'); 
define('DDSG_POST_COMMENTS', 'Ukázat počet komentářů po příspěvku:'); 
define('DDSG_PAGE_COMMENTS', 'Ukázat počet komentářů po stránce:'); 
define('DDSG_ZERO_COMMENTS', 'Ukázat počítadlo komentářů, když ukazuje nulu:'); 
define('DDSG_MULTI_POSTS', 'Ukázat příspěvky s několika ketegoriemi poze v jedné jediné kategorii:'); 
define('DDSG_POST_DATES', 'Ukázat datum po příspěvku:'); 
define('DDSG_PAGE_DATES', 'Ukázat datum po stránce:'); 
define('DDSG_DATE_FORMAT', 'Formát data:'); 
define('DDSG_DATE_FORMAT_DESC', 'Použít <a href="http://us3.php.net/date" target="_blank">PHP date() formát</a>'); 
define('DDSG_EXCLUSIONS', 'Vyjmout'); 
define('DDSG_EXCLUDED_CATS', 'Vyjmout kategorie:'); 
define('DDSG_EXCLUDED_CATS_DESC', '- ID kategorie, oddělit čárkou<br />- Podkategorie budou taky vyjmuty'); 
define('DDSG_EXCLUDED_PAGES', 'Vyjmout stránky:'); 
define('DDSG_EXCLUDED_PAGES_DESC', '- ID stránek, oddělit čárko<br />- Podstránky budou taky vyjmuty'); 
define('DDSG_HIDE_FUTURE', 'Skrýt příspěvky s budoucím datem zobrazení'); 
define('DDSG_HIDE_PASS', 'Skrýt příspěvky chráněné heslem:'); 
define('DDSG_NAVIGATION', 'Navigace'); 
define('DDSG_NAV_METHOD', 'Navigace na stránkách:'); 
define('DDSG_NAV_WHERE', 'Skrýt navigaci mapy stránek:'); 
define('DDSG_NAV_WHERE_TOP', 'Nahoře'); 
define('DDSG_NAV_WHERE_BOT', 'Dole'); 
define('DDSG_NAV_WHERE_BOTH', 'Nahoře i dole'); 
define('DDSG_MISC', 'Ostatní'); 
define('DDSG_XML_PATH', 'Celá cesta k XML mapě stránek:'); 
define('DDSG_XML_PATH_DESC', 'Jestli používáte XML sitemap plugin, zadejte cestu k XML souboru sem a odkaz bude přidán na stránku mapy stránek'); 
define('DDSG_XML_WHERE', 'Kde ukázat XML mapu stránek:'); 
define('DDSG_XML_WHERE_LAST', 'Na poslední stránce'); 
define('DDSG_XML_WHERE_EVERY', 'Na každé stránce'); 
define('DDSG_NEW_WINDOW', 'Odkazy otevřít v novém okně:'); 

define('DDSG_DEFAULT_BUTTON', 'Načti základní nastavení'); 
define('DDSG_UPDATE_BUTTON', 'Změna nastavení'); 

?>